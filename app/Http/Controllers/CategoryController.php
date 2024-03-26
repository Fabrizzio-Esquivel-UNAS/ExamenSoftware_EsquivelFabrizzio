<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected function getModelClass()
    {
        return Category::class;
    }

    protected $validationRules = [
        'name' => 'required'
        // Add more validation rules as needed
    ];
    protected $withModels = [
        'books'
    ];

    // Implement additional controller-specific methods if needed
}
