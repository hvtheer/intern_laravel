<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UserRequest;
use App\Http\Controllers\Controller;
use App\Services\MailService;
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

    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function sendMail(Request $request)
    {
        $users = $this->getSessionUsers();
        $email = $request->email;
        $attachment = null;
        $attachment = $request->file('attachment');

        if ($email == 'all'){
            foreach ($users as $user) {
                $this->mailService->sendInform($user, $attachment);
            };
        }
        else {
            $user = $users->firstWhere('email', $email);
            $this->mailService->sendInform($user, $attachment);
        }

        return redirect()->back()->with('message',
            'The mail was successfully sent! Please check you email!');
    }
}