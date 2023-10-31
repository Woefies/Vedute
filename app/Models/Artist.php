<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'about',
        'country'
    ];

    public function vedutes()
    {
        return $this->hasMany(Vedute::class);
    }
}
