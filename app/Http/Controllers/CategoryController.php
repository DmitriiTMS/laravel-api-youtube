<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::query()->get();
    }

    public function show($categoryId)
    {
        return Category::query()->findOrFail($categoryId);
    }
}
