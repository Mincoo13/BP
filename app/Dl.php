<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dl extends Model
{
    protected $table = 'downloads';
    protected $fillable = ['title','link'];
}
