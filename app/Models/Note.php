<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //

    protected $table = 'notes';

    public $fillable = ['title','description'];
}
