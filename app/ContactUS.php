<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
  //Table name
public $table = 'contact_forms';

  //Table data
public $fillable = ['name','email','message'];

}
