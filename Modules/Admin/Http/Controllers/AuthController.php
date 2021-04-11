<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\LoginRequest;

class AuthController extends Controller
{

    public function login()
    {
        return view('admin::login');
    }

    public function handleLogin(LoginRequest $request)
    {
        if(!auth()->attempt($request->only(['email', 'password']))) {
            return redirect()->back()->withErrors(trans(__('auth.failed')));
        }

        return redirect()->route('admin.dashboard');
    }
}
