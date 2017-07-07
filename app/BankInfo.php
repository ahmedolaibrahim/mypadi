<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BankInfo extends Model
{
     // set table name
     protected $table = 'bank_information';

     //set fillable properties
     protected $fillable = [
      'firstname',
      'lastname',
      'address',
      'phone_number',
      'account_number',
      'opening_bal',
      'gender'
    ];
}
