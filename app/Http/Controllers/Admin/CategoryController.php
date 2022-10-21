<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }
}
