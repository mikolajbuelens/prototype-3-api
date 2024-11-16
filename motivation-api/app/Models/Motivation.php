<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motivation extends Model
{
    protected $table = 'motivation';
    protected $fillable = ['quote', 'author'];
}
