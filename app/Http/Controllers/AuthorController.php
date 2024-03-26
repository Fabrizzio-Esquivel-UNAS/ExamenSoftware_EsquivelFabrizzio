<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    protected function getModelClass()
    {
        return Author::class;
    }

    protected $validationRules = [
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        // Add more validation rules as needed
    ];
    protected $withModels = [
        'books'
    ];

    // Implement additional controller-specific methods if needed
}
