<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index', [
            'users' => $this->getSessionUsers(),
        ]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function getSessionUsers()
    {
        return collect(Session::get('users'));
    }

    public function store(UserRequest $request)
    {
        Session::push('users', $request->validated());
        return redirect()->back()->with('message', 
            'The new user has been successfully added!');
    }
}
