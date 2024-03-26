<?php

namespace App\Http\Controllers;

use App\Models\UserBook;
use Illuminate\Http\Request;

class UserBookController extends Controller
{
    protected function getModelClass()
    {
        return UserBook::class;
    }

    protected $validationRules = [
        // Add more validation rules as needed
    ];

    // Implement additional controller-specific methods if needed
}
