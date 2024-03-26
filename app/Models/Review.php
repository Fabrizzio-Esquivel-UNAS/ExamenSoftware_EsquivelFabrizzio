<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'score',
        'content'
    ];
    public function book()
    {
        return $this->hasOne(Book::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
