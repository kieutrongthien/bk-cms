<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Requests\LoginRequest;

class AuthController extends Controller
{

    public function login()
    {
        return view('admin::login');
    }

    public function handleLogin(LoginRequest $request)
    {
        if(!auth()->attemp($request->all())) {
            return redirect()->back()->withErrors(trans('admin::auth.fail'));
        }

        return redirect()->route('admin.dashboard');
    }
}
