<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userprofiles extends Model
{
    protected $fillable = ['holderName','ICnumber','mailAddress','accountNumber','cardNumber'];
}
