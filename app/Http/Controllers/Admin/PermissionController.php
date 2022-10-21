<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\PermissionRequest;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.permission.index');
    }
}
