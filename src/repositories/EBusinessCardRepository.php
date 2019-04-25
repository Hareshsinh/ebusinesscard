<?php

namespace Vcian\EbusinessCard\repositories;

use DB;
use Illuminate\Support\Facades\File;
use Vcian\EbusinessCard\BaseRepository;
use Vcian\EbusinessCard\EBusinessCard;


class EBusinessCardRepository extends BaseRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo

    /**
     * EBusinessCardRepository constructor.
     * @param EBusinessCard $model
     */
    public function __construct(EBusinessCard $model)
    {
        $this->model = $model;
    }

    /**
     * @param $request
     * @return object
     */
    public function getEBusinessCards($request)
    {
        $sortBy = ($request['sortBy']) ?? 'id';
        $sortType = ($request['order']) ?? 'asc';
        $name = ($request['name']) ?? '';
        $phone = ($request['phone']) ?? '';
        $email = ($request['email']) ?? '';
        $zipcode = ($request['zipcode']) ?? '';
        $country = ($request['country']) ?? '';
        $perPage = ($request['perPage']) ?? 10;
        $eBusinessCardDates = $this->model->where('status', 'active');

        if ($name)
            $eBusinessCardDates->where('name', 'like', '%$name%');

        if ($phone)
            $eBusinessCardDates->where('phone', 'like', '%$phone%');

        if ($email)
            $eBusinessCardDates->where('email', 'like', '%$email%');
        if ($zipcode)
            $eBusinessCardDates->where('zipcode', 'like', '%$zipcode%');

        if ($country)
            $eBusinessCardDates->where('country', 'like', '%$country%');

        $eBusinessCardDates->orderBy($sortBy, $sortType);
        return $eBusinessCardDates->paginate($perPage);
    }


    /**
     * @param $request
     * @return bool
     */
    public function setEBusinessCard($request)
    {
        try {
            DB::beginTransaction();
            $input = $request->all();
            $profile = ($request->file('profile')) ?? null;
            $background = ($request->file('background')) ?? null;
            if ($profile) {
                $request->profile = time() . '.' . $profile->getClientOriginalExtension();
                if (!File::exists($destinationPath = public_path('/ebusinesscards/profile'))) {
                    File::makeDirectory($destinationPath, 0777, true, true);
                }
                $profile->move($destinationPath, $request->profile);
            }

            if ($background) {
                $request->background = time() . '.' . $background->getClientOriginalExtension();
                if (!File::exists($destinationPath = public_path('/ebusinesscards/background'))) {
                    File::makeDirectory($destinationPath, 0777, true, true);
                }
                $background->move($destinationPath, $request->background);
            }
            $input['profile'] = $request->profile;
            $input['slug'] = $this->slugify($request->name);
            $input['background'] = $request->background;
            if ($this->model->create($input)) {
                DB::commit();
                return true;
            }
            DB::rollBack();
            return false;
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return false;
        }

    }

    public static function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
    /**
     * @param $slug
     * @param $request
     * @return bool|EBusinessCardResource
     */
    public function updateEBusinessCard($slug, $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->all();
            $ebusinesscard = $this->model->findOrFail($slug);
            $profile = ($request->file('profile')) ?? null;
            $background = ($request->file('background')) ?? null;
            if ($profile) {
                $request->profile = time() . '.' . $profile->getClientOriginalExtension();
                if (!\File::exists($destinationPath = public_path('/ebusinesscards/profile'))) {
                    \File::makeDirectory($destinationPath, 0777, true, true);
                }
                if ($profile->move($destinationPath, $request->profile)) {
                    if (File::exists(public_path('/ebcuploads/profile/' . $ebusinesscard->profile))) {
                        File::delete(public_path('/ebcuploads/profile/' . $ebusinesscard->profile));
                    }
                }
                $input['profile'] = $request->profile;
            }

            if ($background) {
                $request->background = time() . '.' . $background->getClientOriginalExtension();
                if (!File::exists($destinationPath = public_path('/ebusinesscards/background'))) {
                    File::makeDirectory($destinationPath, 0777, true, true);
                }
                if ($background->move($destinationPath, $request->background)) {
                    if (File::exists(public_path('/ebcuploads/background/' . $ebusinesscard->background))) {
                        File::delete(public_path('/ebcuploads/background/' . $ebusinesscard->background));
                    }
                }
                $input['background'] = $request->background;
            }
            if ($ebusinesscard->update($input)) {
                DB::commit();
                return true;
            } else {
                DB::rollBack();
                return false;
            }
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return false;
        }
    }


    /**
     * @param $id
     * @return bool
     */
    public function deleteEBusinessCard($slug)
    {
        try {
            DB::beginTransaction();
            $ebusinesscard = $this->model->where('slug', $slug)->first();
            if (File::exists(public_path('/ebusinesscards/profile/' . $ebusinesscard->profile))) {
                File::delete(public_path('/ebusinesscards/profile/' . $ebusinesscard->profile));
            }
            if (File::exists(public_path('/ebusinesscards/background/' . $ebusinesscard->background))) {
                File::delete(public_path('/ebusinesscards/background/' . $ebusinesscard->background));
            }

            if ($ebusinesscard->delete()) {
                DB::commit();
                return true;
            } else {
                DB::rollBack();
                return false;
            }
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return false;
        }
    }
}
