<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BookCategory extends Pivot
{
    //
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
