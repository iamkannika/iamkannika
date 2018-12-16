<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class confirm_coffee extends Model
{
    protected $table = 'confirm_coffee';

    protected $fillable = ['id','name', 'price', 'Date'];

    public $timestamps = false;
}