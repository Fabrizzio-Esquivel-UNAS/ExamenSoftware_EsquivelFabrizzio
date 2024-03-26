<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected function getModelClass()
    {
        return User::class;
    }

    protected $validationRules = [
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        // Add more validation rules as needed
    ];
    protected $withModels = [
        'reviews',
        'books'
    ];

    // Implement additional controller-specific methods if needed
}
