<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable = ['contact_name', 'contact_date', 'contact_email', 'contact_message'] ;
  #public ​$timestamps ​= ​false;
}
