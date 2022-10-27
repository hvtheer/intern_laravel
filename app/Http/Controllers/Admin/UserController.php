<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UserRequest;
use App\Http\Controllers\Controller;
// use App\Services\MailService;
use Illuminate\Http\Request;
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

    private function getSessionUsers()
    {
        return collect(Session::get('users'));
    }

    public function store(UserRequest $request)
    {
        Session::push('users', $request->validated());
        return redirect()->back()->with('message', 
            'The new user has been successfully added!');
    }

    public function formSend()
    {
        return view('admin.user.mail.form', [
            'users' => $this->getSessionUsers(),
        ]);
    }
}
