<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JD\Cloudder\Facades\Cloudder;
use function response;

class PostController extends Controller
{
    public function save(Request $request){
        /** @noinspection PhpUnhandledExceptionInspection */
        $this->validate($request,[
            "public_id" => "required|string",
            "caption" => "required|string|max:240"
        ], [
            "public_id.required" => "Please upload an image",
            "caption.required" => "The caption is required",
            "caption.max" => "Your caption is too long.",
        ]);


        $p = new Post();
        $p->path = $request->public_id;
        $p->caption = $request->caption;
        Auth::user()->post()->save($p);

        return response()->redirectToRoute('profile');
    }
}
