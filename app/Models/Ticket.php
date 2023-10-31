<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

protected $fillable = [
    'type',
    'date',
    'location',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
