<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    protected $fillable = [
        'original_url',
        'shorten_url',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($url) {
            $url->shorten_url = $url->generateShortenUrl();
        });
    }
}
