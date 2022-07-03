<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poject extends Model
{
    protected $table = 'pojects';

    protected $fillable = ['title', 'content'];
}

