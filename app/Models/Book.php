<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
        'title', 'author', 'category', 'image'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
