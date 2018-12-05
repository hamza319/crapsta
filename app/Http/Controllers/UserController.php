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
        $following = Auth::user()->following;
        $result = new Collection();
        if($following->contains($id) || Auth::id() == $id ){
            $user = User::with(['post' => function($query){
                $query->withCount(['comments', 'likes']);
            }])->withCount(['following', 'followers', 'post'])->find($id);
            
            if($user)
                return  view('profile', ["user" => $user]);
            else
            {
                abort("404", "User not found");
                return false;
            }
        }

        $user = User::withCount(['following', 'followers', 'post'])->find($id);
        if ($user)
            return  view('profile', ["user" => $user]);
        else
        {
            abort("404", "User not found");
            return false;
        }

    }
}
