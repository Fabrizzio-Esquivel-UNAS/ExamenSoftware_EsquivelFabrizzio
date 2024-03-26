<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    protected function getModelClass()
    {
        return Review::class;
    }

    protected $validationRules = [
        'user_id' => 'required',
        'book_id' => 'required',
        'content' => 'required',
        'score' => 'required'
        // Add more validation rules as needed
    ];
    protected $withModels = [
        'user'
    ];

    // Implement additional controller-specific methods if needed
}
