<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vedute extends Model
{
    use HasFactory;

protected $fillable = [
        'name',
        'description',
        'image',
        'artist_id'
    ];
}