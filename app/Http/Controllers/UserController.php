<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use function with;

class UserController extends Controller
{
    public function profile($id){

        $result = new Collection();
        if(Auth::user()->following()->get()->contains($id)){
            $user = User::with(['post' => function($query){
                $query->withCount(['comments', 'likes']);
            }])->withCount('following', 'followers')->find($id);
            return  view('profile', ["posts" => $user->post]);
        }

        return  view('profile', ["posts" => $result]);

    }
}
