<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    public function create() {
        return view('session.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

         if (Auth::attempt($credentials)) {
            session()->flash('success', '登录成功');
            return redirect()->route('home', [Auth::user()]);
        } else {
            session()->flash('danger', '登录失败，请检查你的邮箱、密码');
            return redirect()->back();
        }
    }
}
