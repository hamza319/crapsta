<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function response;

class HomeController extends Controller
{

    public function index()
    {
        if (Auth::check()) {

            $following = Auth::user()->following()->with('follows')->latest()->get();
            $ids = $following->pluck('following_id')->push(Auth::id());

            $posts = Post::whereIn('user_id', $ids)->with(['user', 'comments' => function ($query) {
                $query->with('user')->latest()->limit(2);
            }, 'likes' => function ($query) {
                $query->where('user_id', Auth::id());
            }])->withCount(['likes', 'comments'])->latest()->get();


            return view('home')->with(['following' => $following->take(5), 'posts' => $posts]);

        } else
            return response()->redirectToRoute('login');
    }
}
