<?php

namespace Vcian\EbusinessCard;

use Illuminate\Database\Eloquent\Model;

class EBusinessCard extends Model
{
    protected $table;

    protected $fillable = ['name','slug','designation','organisation','email','phone','fax','skype_name','website','street','city','state','country','zipcode','whatsapp','linkedin','instagram','snapchat','facebook','google','twitter','foursquare','youtube','blog','meetup','pinterest','about','profile','background','logo','status'];
}
