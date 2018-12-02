<?php

use JD\Cloudder\Facades\Cloudder;

?>
@extends('layouts.hz_layout')

@section('title', 'Post Details')

@section('js')
    <script type="text/javascript">
        let solid = "<i class=\"fas fa-heart fa-2x\"></i>";
        let regular = "<i class=\"far fa-heart fa-2x\"></i>";

        $('.like').click(function (e) {
            e.preventDefault();
            let link = $(this);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'post',
                url: "{{route('post.like')}}",
                data: {
                    'post_id' : link.attr('data-id'),
                },
                success: function (result) {
                    link.parent().find('span').first().html(result[1]+" Likes");

                    if(result[0] == "like") {
                        link.html(solid);
                    }
                    else{
                        link.html(regular);
                    }

                },
                error: function (e) {
                    console.error(e);
                }
            })
        });
    </script>
@endsection

@section('content')
    <div class="row mt-5 mb-3">
        <div class="col-12">
            <div class="card w-auto">
                <img class="card-img-top" src="{{Cloudder::showPrivateUrl($post->path, "png")}}" alt="User Image">
                <div class="card-body">
                    <div class="flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1"><a href="#" class="text-dark"><img src="https://placeimg.com/50/50/any" alt="profile pic" class="rounded-circle"
                                                                                height="30" width="30">&nbsp;&nbsp; {{$post->user->email}}</a></h6>
                            <small>{{$post->created_at->format('M j, Y - h:i A')}}</small>
                        </div>
                    </div>
                    <p class="card-text mt-2 mb-2">{{$post->caption}}</p>
                    <a href="#" class="text-danger like" data-id="{{$post->id}}">
                        @if($post->likes->isNotEmpty())
                            <i class="fas fa-heart fa-2x"></i>
                        @else
                            <i class="far fa-heart fa-2x"></i>
                        @endif
                    </a>
                    <span class="text-danger align-top" id="like_count">{{$post->likes_count}} Likes</span>
                    <form method="post" action="{{route('post.comment')}}">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-10">
                                <input type="hidden" value="{{$post->id}}" name="post">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Your Comment Here: </label>
                                    <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    @if ($errors->has('comment'))
                                        <div class="invalid-feedback d-block">
                                            {{ $errors->first('comment') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-2 align-middle flex-nowrap align-content-center align-items-center">
                                <button class="btn btn-outline-secondary mt-5" type="submit">Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row border rounded mb-5">
        <div class="col-12">
            <h5 class="my-2">Comments ({{$post->comments_count}})</h5>
            <ul class="list-group list-group-flush p-0 mt-2">
                @if($post->comments_count > 0)
                    @foreach($post->comments as $comment)
                        <li class="list-group-item flex-column align-items-start p-2">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><a href="#" class="text-dark"><img src="https://placeimg.com/50/50/any" alt="profile pic" class="rounded-circle"
                                                                                    height="50" width="50">&nbsp;&nbsp; {{$comment->user->email}}</a></h6>
                                <small>{{$comment->created_at->format('M j, Y - h:i A')}}</small>
                            </div>
                            {{$comment->comment}}
                        </li>
                    @endforeach
                @else
                    <li class="list-group-item flex-column align-items-start p-2">
                        No comments yet!
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endsection