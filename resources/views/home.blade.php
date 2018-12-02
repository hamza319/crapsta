<?php
use JD\Cloudder\Facades\Cloudder;
?>
@extends('layouts.hz_layout')

@section('title', 'Home')

@section('content')
<form>
    <div class="row">
        <div class="col-12">
            <div class="input-group mb-3 mt-3 w-50 mx-auto">
                <input type="text" class="form-control" id="Search" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="row mb-5">
    <div class="col-9">
        {{--@for($loop=0; $loop<5; $loop++)--}}
        {{--<div class="card w-auto {{($loop > 0)?"mt-5":""}}">--}}
            {{--<a href="{{route('details')}}"><img class="card-img-top" src="https://placeimg.com/992/558/any" alt="User Image"></a>--}}
            {{--<div class="card-body">--}}
                {{--<div class="flex-column align-items-start">--}}
                    {{--<div class="d-flex w-100 justify-content-between">--}}
                        {{--<h6 class="mb-1"><a href="#" class="text-dark"><img src="https://placeimg.com/50/50/any" alt="profile pic" class="rounded-circle"--}}
                            {{--height="30" width="30">&nbsp;&nbsp; user1@thing.com</a></h6>--}}
                            {{--<small>23 November 2018 12:55 PM</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<p class="card-text mt-2 mb-2">Medicinas velum in talis burdigala! Nunquam examinare mens. Bi-color, secundus castors cito transferre de--}}
                        {{--pius,--}}
                    {{--placidus era.</p>--}}
                    {{--<a href="#" class="text-danger"><i class="far fa-heart fa-2x"></i></a>--}}
                    {{--<span class="text-danger align-top">10 Likes</span>--}}
                    {{--<a href="#" class="text-secondary ml-2"><i class="far fa-comment fa-2x"></i></a>--}}
                    {{--<ul class="list-group list-group-flush p-0 mt-2">--}}
                        {{--<li class="list-group-item flex-column align-items-start p-2">--}}
                            {{--<div class="d-flex w-100 justify-content-between">--}}
                                {{--<h6 class="mb-1"><a href="#" class="text-dark"><img src="https://placeimg.com/50/50/any" alt="profile pic" class="rounded-circle"--}}
                                    {{--height="30" width="30">&nbsp;&nbsp; user@thing.com</a></h6>--}}
                                    {{--<small>23 November 2018 12:55 PM</small>--}}
                                {{--</div>--}}
                                {{--Domus germanus liberi est.--}}
                            {{--</li>--}}
                            {{--<li class="list-group-item flex-column align-items-start p-2">--}}
                                {{--<div class="d-flex w-100 justify-content-between">--}}
                                    {{--<h6 class="mb-1"><a href="#" class="text-dark"><img src="https://placeimg.com/50/50/any" alt="profile pic" class="rounded-circle"--}}
                                        {{--height="30" width="30">&nbsp;&nbsp; user@thing.com</a></h6>--}}
                                        {{--<small>23 November 2018 12:55 PM</small>--}}
                                    {{--</div>--}}
                                    {{--Humani generiss favere!--}}
                                {{--</li>--}}
                                {{--<li class="list-group-item p-1"><a class="text-muted" href="#">View All Comments <span class="text-primary">(5)</span></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--@endfor--}}
                    @foreach(Auth::user()->post as $post)
                    <div class="card w-auto {{($loop->index > 0)?"mt-5":""}}">
                        <a href="{{route('details')}}"><img class="card-img-top" src="{{Cloudder::showPrivateUrl($post->path, "png")}}" alt="User Image"></a>
                        <div class="card-body">
                            <div class="flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1"><a href="#" class="text-dark"><img src="https://placeimg.com/50/50/any" alt="profile pic" class="rounded-circle"
                                        height="30" width="30">&nbsp;&nbsp; user1@thing.com</a></h6>
                                        <small>23 November 2018 12:55 PM</small>
                                    </div>
                                </div>
                                <p class="card-text mt-2 mb-2">Medicinas velum in talis burdigala! Nunquam examinare mens. Bi-color, secundus castors cito transferre de
                                    pius,
                                placidus era.</p>
                                <a href="#" class="text-danger"><i class="far fa-heart fa-2x"></i></a>
                                <span class="text-danger align-top">10 Likes</span>
                                <a href="#" class="text-secondary ml-2"><i class="far fa-comment fa-2x"></i></a>
                                <ul class="list-group list-group-flush p-0 mt-2">
                                    <li class="list-group-item flex-column align-items-start p-2">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1"><a href="#" class="text-dark"><img src="https://placeimg.com/50/50/any" alt="profile pic" class="rounded-circle"
                                                height="30" width="30">&nbsp;&nbsp; user@thing.com</a></h6>
                                                <small>23 November 2018 12:55 PM</small>
                                            </div>
                                            Domus germanus liberi est.
                                        </li>
                                        <li class="list-group-item flex-column align-items-start p-2">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1"><a href="#" class="text-dark"><img src="https://placeimg.com/50/50/any" alt="profile pic" class="rounded-circle"
                                                    height="30" width="30">&nbsp;&nbsp; user@thing.com</a></h6>
                                                    <small>23 November 2018 12:55 PM</small>
                                                </div>
                                                Humani generiss favere!
                                            </li>
                                            <li class="list-group-item p-1"><a class="text-muted" href="#">View All Comments <span class="text-primary">(5)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <div class="col-3 text-center">
                                <h5 class="mt-2">Your Recent Follows</h5>
                                <hr>
                                <ul class="list-group list-group-flush">
                                    @for($loop=0; $loop<5; $loop++)
                                    <li class="list-group-item border-0">
                                        <a href="#"><img src="https://placeimg.com/50/50/any" alt="profile pic" class="rounded-circle" height="50" width="50"></a>
                                        <a href="#" class="text-dark"><b>email@domain.com</b></a>
                                    </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        @endsection
