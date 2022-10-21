<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\PermissionRequest;

class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.permission.index');
    }
}
