<?php

use JD\Cloudder\Facades\Cloudder;

$following = Auth::user()->following()->where('following_id', $id)->get()->pluck('following_id');
?>

@extends('layouts.hz_layout')
@section('title', 'Profile')

@section('css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css"
          integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
@endsection

@section('content')

    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('image/bg2.jpg') }}" class="mx-auto d-block">
                    <div class="row">
                        <div class="col user_details">
                            <div class="col user_info">
                                <div class="profile_image">
                                    <img src="{{ asset('image/pimg.jpeg') }}">
                                </div>
                                <div class="profile_name">
                                    <ul>
                                        <li class="name">
                                            {{$user->email}}
                                        </li>
                                        <li class="user_name">
                                            {{$user->name}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col flex">
                                <div class="user_stat">
                                    <ul>
                                        <li>{{$user->post_count}}</li>
                                        <li>Post</li>
                                    </ul>
                                    <ul>
                                        <li>{{$user->following_count}}</li>
                                        <li>Following</li>
                                    </ul>
                                    <ul>
                                        <li>{{$user->followers_count}}</li>
                                        <li>Followers</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="follow_status">
                                    @if($id != Auth::id())
                                        @if($following->isNotEmpty())
                                            <button type="button" class="btn btn-outline-light">Following</button>
                                        @else
                                            <a class="btn btn-outline-light" href="{{route('follow', $user->id)}}">Follow</a>
                                        @endif
                                    @endif
                                </div>
                                <div class="new-picture">
                                    <a href="{{route('new.post')}}">
                                        <button type="button" id="uploadbtn" class="btn btn-outline-light" data-toggle="modal" data-target="#fileuploa"><i
                                                    class="fas fa-file-upload fa-1x"></i></button>
                                    </a>

                                    <div class="modal" id="fileupload">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form method="Get">
                                                        <div class="form-group">
                                                            <label for="imagefile">Select Image</label>
                                                            <input type="file" name="file" id="imagefile" class="inputfile" accept="image/*">

                                                            <div class="form-group">
                                                                <textarea class="form-control" id="comments" placeholder="say something" rows="2"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary">Share</button>
                                                            </div>
                                                            <!-- <label for="file" class="btn">upload</label> -->
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row imagegrid">
                <div class="img-container">

                    <!-- insert loop here -->
                    @if($user->post)
                        @foreach($user->post as $post)
                            <div class="img-box float-left">
                                <a href="{{route('details', $post->id)}}">
                                    <img src="{{Cloudder::showPrivateUrl($post->path, "png", ["q_auto:eco", "f_auto"])}}" class="img img-fluid">
                                    <div class="overlay">
                                        <div class='likes'>
                                            <i class="far fa-heart"></i><span>{{$post->likes_count}}</span>
                                        </div>
                                        <div class="comments">
                                            <i class="far fa-comment"></i><span>{{$post->comments_count}}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    @endforeach
                @endif

                <!-- end loop here -->

                    <!-- <div class="img-box float-left">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1455853659719-4b521eebc76d?auto=format&fit=crop&w=750&q=80" class="img-fluid">
                            <div class="overlay">
                                <div class='likes'>
                                    <i class="far fa-heart"></i><span>105</span>
                                </div>
                                <div class="comments">
                                    <i class="far fa-comment"></i><span>28</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="img-box float-left">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1485963631004-f2f00b1d6606?auto=format&fit=crop&w=668&q=80" class="img-fluid">
                            <div class="overlay">
                                <div class='likes'>
                                    <i class="far fa-heart"></i><span>105</span>
                                </div>
                                <div class="comments">
                                    <i class="far fa-comment"></i><span>28</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="img-box float-left">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1500816558239-6b91f4256ead?auto=format&fit=crop&w=331&q=80" class="img-fluid">
                            <div class="overlay">
                                <div class='likes'>
                                    <i class="far fa-heart"></i><span>105</span>
                                </div>
                                <div class="comments">
                                    <i class="far fa-comment"></i><span>28</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="img-box float-left">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1487376318617-f43c7b41e2e2?auto=format&fit=crop&w=750&q=80" class="img-fluid">
                            <div class="overlay">
                                <div class='likes'>
                                    <i class="far fa-heart"></i><span>105</span>
                                </div>
                                <div class="comments">
                                    <i class="far fa-comment"></i><span>28</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="img-box float-left">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1455853659719-4b521eebc76d?auto=format&fit=crop&w=750&q=80" class="img-fluid">
                            <div class="overlay">
                                <div class='likes'>
                                    <i class="far fa-heart"></i><span>105</span>
                                </div>
                                <div class="comments">
                                    <i class="far fa-comment"></i><span>28</span>
                                </div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

@endsection