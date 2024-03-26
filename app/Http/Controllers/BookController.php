<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected function getModelClass()
    {
        return Book::class;
    }

    protected $validationRules = [
        'author_id' => 'required',
        'title' => 'required',
        'year' => 'required'
        // Add more validation rules as needed
    ];
    protected $withModels = [
        'categories',
        'users'
    ];

    // Implement additional controller-specific methods if needed
}
