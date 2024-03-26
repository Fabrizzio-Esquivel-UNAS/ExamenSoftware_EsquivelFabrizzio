<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'year'
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_book');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function author()
    {
        return $this->hasOne(Author::class);
    }
}
