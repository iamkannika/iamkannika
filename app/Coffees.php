<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coffees extends Model
{
    protected $table = 'coffees';

    protected $fillable = ['name', 'price', 'type'];
}