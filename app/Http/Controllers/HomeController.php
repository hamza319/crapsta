<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function response;

class HomeController extends Controller
{

    public function index()
    {
        if(Auth::check())
            return view('home');
        else
            return response()->redirectToRoute('login');
    }
}
