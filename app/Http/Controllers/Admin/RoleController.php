<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\RoleRequest;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.role.index');
    }
}
