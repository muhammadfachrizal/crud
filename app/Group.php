<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	public $table = 'group';
    protected $fillable = [
    	'name'
    ];
    public static $rules = [
        'name'=> 'required'
    ];
}
