<?php

namespace Vcian\EbusinessCard;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Log;
use Vcian\EbusinessCard\repositories\EBusinessCardRepository;


class EBusinessCardController extends Controller
{
    /**
     * @var EBusinessCardRepository
     */
    protected $eBusinessCardRepository;


    /**
     * EBusinessCardController constructor.
     * @param EBusinessCardRepository $eBusinessCardRepository
     */
    public function __construct(EBusinessCardRepository $eBusinessCardRepository)
    {
        $this->eBusinessCardRepository = $eBusinessCardRepository;
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        try {
            $ebusinesscard = $this->eBusinessCardRepository->getEbusinessCards($request->all());
            return view('ebusinesscard.list', compact('ebusinesscard'));
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        try {
            $submit = 'Generate';
            $message = 'Add new';
            return view('ebusinesscard.app', compact('submit', 'message'));
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            $this->eBusinessCardRepository->setEBusinessCard($request);
            return redirect('ebusinesscard')->with('success', 'Card generate successfully!');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            redirect('ebusinesscard')->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($slug)
    {
        try {
            $ebusinesscard = EBusinessCard::where('slug', $slug)->first();
            $submit = 'Update';
            $message = 'Update';
            return view('ebusinesscard.app', compact('ebusinesscard', 'submit', 'message'));
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            redirect()->back()->with('error', $exception->getMessage());
        }
    }


    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        try {
            $ebusinesscard = EBusinessCard::where('slug', $slug)->first();
            $submit = 'view';
            $message = 'View';
            return view('ebusinesscard.app', compact('ebusinesscard', 'submit', 'message'));
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @param $slug
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($slug, Request $request)
    {
        try {
            $this->eBusinessCardRepository->updateEBusinessCard($slug, $request);
            return redirect('ebusinesscard');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * @param $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($slug)
    {
        try {
            $this->eBusinessCardRepository->deleteEBusinessCard($slug);
            return redirect('ebusinesscard');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($slug)
    {
        try {
            $ebusinesscard = EBusinessCard::where('slug', $slug)->first();
            $ebusinesscard->backgroundPath =  asset("ebusinesscards/social/background.jpeg");
            if($ebusinesscard->background!=''){
                if (File::exists(public_path('/ebusinesscards/background/' . $ebusinesscard->background))) {
                    $ebusinesscard->backgroundPath = asset('ebusinesscards/background/' . $ebusinesscard->background);
                }
            }
            $data['ebusinesscard'] = $ebusinesscard;
            $pdf = PDF::loadView('ebusinesscard.cardPDF',$data);
            return $pdf->stream('itsolutionstuff.pdf');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
