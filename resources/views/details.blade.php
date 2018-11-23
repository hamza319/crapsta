@extends('layouts.hz_layout')

@section('title', 'Post Details')

@section('content')
    <div class="row mt-5 mb-3">
        <div class="col-12">
            <div class="card w-auto">
                <img class="card-img-top" src="https://placeimg.com/992/558/any" alt="User Image">
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
                    <form>
                        <div class="row mt-3">
                            <div class="col-10">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Your Comment Here: </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
            <h5 class="my-2">Comments (5)</h5>
            <ul class="list-group list-group-flush p-0 mt-2">
                @for($loop=0; $loop<5; $loop++)
                    <li class="list-group-item flex-column align-items-start p-2">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1"><a href="#" class="text-dark"><img src="https://placeimg.com/50/50/any" alt="profile pic" class="rounded-circle"
                                                                                height="50" width="50">&nbsp;&nbsp; user@thing.com</a></h6>
                            <small>23 November 2018 12:55 PM</small>
                        </div>
                        Fraticinida alter humani generis est.
                    </li>
                @endfor
            </ul>
        </div>
    </div>
@endsection