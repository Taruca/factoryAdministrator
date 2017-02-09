<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home() {
        return view('static_pages.home');
    }
}
