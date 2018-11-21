<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harm extends Model
{
    protected $table = 'harmonogram';
    protected $fillable = ['title','date','body'];
}
