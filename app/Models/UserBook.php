<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserBook extends Pivot
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Book()
    {
        return $this->belongsTo(Book::class);
    }
}
