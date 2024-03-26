<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    protected function getModelClass()
    {
        return BookCategory::class;
    }

    protected $validationRules = [
        // Add more validation rules as needed
    ];

    // Implement additional controller-specific methods if needed
}
