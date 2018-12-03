<?php
/**
 * Created by PhpStorm.
 * User: Hamza Zafer
 * Date: 28-Nov-18
 * Time: 4:41 PM
 */

$signature = getSignature();
?>
@extends('layouts.hz_layout')

@section('title', 'Image Upload')

@section('js')
    <script src="{{asset('js/cloudinary.js')}}" type="text/javascript" crossorigin="anonymous"></script>
    <script type="text/javascript">
        let myUploadWidget;

        document.getElementById("upload_widget_opener").addEventListener("click", function () {
            myUploadWidget = cloudinary.openUploadWidget({
                cloudName: '{{env('CLOUDINARY_CLOUD_NAME')}}',
                uploadPreset: '{{env('CLOUDINARY_PRESET')}}',
                apiKey: "{{env("CLOUDINARY_API_KEY")}}",
                sources: ['local'],
                moderation: 'metascan',
                multiple: false,
                uploadSignatureTimestamp: "{{$signature['time']}}",
                uploadSignature: "{{$signature['secret']}}",
                maxFiles: 1,
            }, (error, result) => {
                if (result.info.public_id) {
                    console.log(result.info.public_id);
                    $('input[name=public_id]').val(result.info.public_id);
                    $('#uploaded').css("display", "block");
                }
            });
        }, false);
    </script>
@endsection

@section('content')
    <div class="row mb-5 mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-title">
                        <h4>Create A New Post</h4>
                    </div>
                    <form method="post" action="{{route('post.save')}}">
                        @csrf
                        <div class="form-group">
                            <a class="btn btn-primary btn-lg text-white" id="upload_widget_opener">Select and Upload An Image</a>
                            @if ($errors->has('public_id'))
                                <div class="invalid-feedback d-block">
                                    {{ $errors->first('public_id') }}
                                </div>
                            @endif

                            <div class="valid-feedback {{(old('public_id'))?"d-block":""}}" id="uploaded">
                                Image Uploaded!
                            </div>
                        </div>
                        <input type="hidden" id="public_id" name="public_id">
                        <div class="form-group">
                            <label for="caption">Caption:</label>
                            <textarea name="caption" id="caption" class="form-control">{{old('caption')}}</textarea>
                            @if ($errors->has('caption'))
                                <div class="invalid-feedback d-block">
                                    {{ $errors->first('caption') }}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
