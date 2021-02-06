<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function getPrice()
    {
      //return "10.99";
      return number_format($this->price / 100, 2);

    }
}
