<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assigment extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'file_path',
    ];
}
