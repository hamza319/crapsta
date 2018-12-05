<?php

namespace App\Http\Controllers;

use function abort;
use App\Comment;
use App\Like;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use function intval;
use JD\Cloudder\Facades\Cloudder;
use function response;
use function trim;
use function view;

class PostController extends Controller
{
    public function save(Request $request)
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        $this->validate($request, [
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

        return response()->redirectToRoute('profile', Auth::id());
    }

    public function show($id)
    {
        $following = Auth::user()->following()->get(['following_id'])->pluck('following_id');
        $post = Post::where('id', $id)->with(['user', 'comments' => function ($query) {
            $query->with('user')->latest();
        }])->withCount(['likes', 'comments'])->first();

        if ($post)
            if ($following->contains($post->user_id) || $post->user_id == Auth::id())
                return view('details')->with('post', $post);
            else {
                abort('403', "You're not authorized to view this post");
                return false;
            }
        else {
            abort('404', "Post not found");
            return false;
        }
    }

    public function comment(Request $request)
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        $this->validate($request, [
            "post" => "required",
            "comment" => "required|string|max:240"
        ], [
            "comment.required" => "Type something is first! -_-",
            "caption.max" => "Your comment is too long.",
        ]);

        $following = Auth::user()->following()->get(['following_id'])->pluck('following_id');
        $post = Post::where('id', $request->post)->first();


        if ($following->contains($post->user_id) || $post->user_id == Auth::id()) {
            $c = new Comment();
            $c->comment = $request->comment;
            $c->user_id = Auth::id();
            $post->comments()->save($c);
            return back();
        } else {
            abort('403', "You're not authorized to comment on this post");
            return false;
        }

    }

    public function like(Request $request)
    {
        $following = Auth::user()->following()->get(['following_id'])->pluck('following_id');
        $post = Post::where('id', $request->post_id)->withCount('likes')->with(['likes' => function ($query) {
            $query->where("user_id", Auth::id());
        }])->first();

        if ($following->contains($post->user_id) || $post->user_id == Auth::id()) {
            if ($post->likes->isEmpty()) {
                $l = new Like();
                $l->user_id = Auth::id();
                $post->likes()->save($l);
                return ["like", intval($post->likes_count) + 1];
            } else {
                $post->likes->first()->delete();
                return ["dislike",intval($post->likes_count) - 1];
            }
        } else {
            abort('403', "You're not authorized to like this post");
            return false;
        }
    }

    public function search(Request $request){

        $result = new Collection();

        if ($request->q)
            $result = User::where('email', 'like', '%'.trim($request->q).'%')->withCount(['following', 'followers', 'post'])->get();

        return view('search', ["result" => $result, "key"  => $request->q]);
    }
}
