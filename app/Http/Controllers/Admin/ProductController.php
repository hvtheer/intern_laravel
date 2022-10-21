<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }
}
