<?php

use JD\Cloudder\Facades\Cloudder;

?>
@extends('layouts.hz_layout')

@section('title', 'Home')

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
                    'post_id': link.attr('data-id'),
                },
                success: function (result) {
                    link.parent().find('span').first().html(result[1] + " Likes");

                    if (result[0] == "like") {
                        link.html(solid);
                    }
                    else {
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
   <!--  <form method="get" action="{{route('search')}}">
        <div class="row">
            <div class="col-12">
                <div class="input-group mb-3 mt-3 w-50 mx-auto">
                    <input type="text" class="form-control" name="q" id="Search" placeholder="User email" aria-label="Search" aria-describedby="button-addon2"
                           required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </form> -->
    <div class="row mb-5">
        <div class="col-9">
            @if($posts->isNotEmpty())
                @foreach($posts as $post)
                    <div class="card w-auto {{($loop->index > 0)?"mt-5":""}}">
                        <a href="{{route('details', $post->id)}}"><img class="card-img-top"
                                                                       src="{{Cloudder::showPrivateUrl($post->path, "png", ["q_auto:eco", "f_auto"])}}"
                                                                       alt="User Image"></a>
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
                            <a href="{{route('details', $post->id)}}" class="text-secondary ml-2"><i class="far fa-comment fa-2x"></i></a>
                            <ul class="list-group list-group-flush p-0 mt-2">
                                @if($post->comments_count > 0)
                                    @foreach($post->comments as $comment)
                                        <li class="list-group-item flex-column align-items-start p-2">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"><a href="#" class="text-dark"><img src="https://placeimg.com/50/50/any" alt="profile pic"
                                                                                                    class="rounded-circle"
                                                                                                    height="30" width="30">&nbsp;&nbsp; {{$comment->user->email}}</a>
                                                </h6>
                                                <small>{{$comment->created_at->format('M j, Y - h:i A')}}</small>
                                            </div>
                                            {{$comment->comment}}
                                        </li>
                                    @endforeach
                                    <li class="list-group-item p-1"><a class="text-muted" href="{{route('details', $post->id)}}">View All Comments <span
                                                    class="text-primary">({{$post->comments_count}})</span></a></li>
                                @else
                                    <li class="list-group-item flex-column align-items-start p-2">
                                        No comments yet!
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                @endforeach
            @else
                <h4>There isn't anything here. <a href="{{route('new.post')}}"> Go post something!</a></h4>
            @endif
        </div>
        <div class="col-3 text-center">
            <h5 class="mt-2">Your Recent Follows</h5>
            <hr>
            <ul class="list-group list-group-flush">
                @if($following->isNotEmpty())
                    @foreach($following as $item)
                        <li class="list-group-item border-0">
                            <a href="#"><img src="https://placeimg.com/50/50/any" alt="profile pic" class="rounded-circle" height="50" width="50"></a>
                            <a href="#" class="text-dark"><b>{{$item->follows->email}}</b></a>
                        </li>
                    @endforeach
                @else
                    <h6>No recent follows</h6>
                @endif
            </ul>
        </div>
    </div>
@endsection
