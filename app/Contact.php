<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'contact';
    protected $fillable = [
    	'avatar',
    	'fname',
    	'lname',
    	'address',
    	'city',
    	'zip',
    	'country',
    	'email',
    	'phone',
    	'note',
    	'group_id'
    ];
    public static $rules = [
        'avatar'=> 'required',
    	'fname'=> 'required',
    	'lname'=> 'required',
    	'address'=> 'required',
    	'city'=> 'required',
    	'zip'=> 'required',
    	'country'=> 'required',
    	'email'=> 'required',
    	'phone'=> 'required',
    	'note'=> 'required',
    	'group_id'=> 'required'
    ];
}
