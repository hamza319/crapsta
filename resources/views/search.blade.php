@extends('layouts.hz_layout')
@section('title', 'Profile')
@section('title', "Results for ".$key)

@section('css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="search">
        <div class="row">
            <div class="col-12">
                <h3><p>Results for: <b>{{$key}}</b> </p></h3>
            </div>
        </div>
        <div class="row">
            @if($result->isNotEmpty())
                @foreach($result as $item)
                    <div class="col-sm-3 user-profile">
                        <div class="profile-img">
                            <a href="{{route('profile', $item->id)}}"><img src="https://placeimg.com/350/350/any" class="img-fluid"></a>
                        </div>
                        <div class="user-info">
                            <div class="name">
                                <h5>{{$item->email}}</h5>
                            </div>
                            <hr/>
                            <div class="user-stat">
                                <ul>
                                    <li>{{$item->post_count}}</li>
                                    <li>Post</li>
                                </ul>
                                <ul>
                                    <li>{{$item->following_count}}</li>
                                    <li>Following</li>
                                </ul>
                                <ul>
                                    <li>{{$item->followers_count}}</li>
                                    <li>Followers</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center">
                    <h4>No users found!</h4>
                </div>
            @endif
        </div>
    </div>

@endsection