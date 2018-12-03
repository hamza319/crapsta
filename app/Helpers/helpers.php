<?php

use Carbon\Carbon;
use JD\Cloudder\Facades\Cloudder;

/**
 * Created by PhpStorm.
 * User: Hamza Zafer
 * Date: 28-Nov-18
 * Time: 5:41 PM
 */

function getSignature(){
    $time = Carbon::now()->timestamp;

    $prams = [
        "source" => "uw",
        "timestamp" => $time,
        "upload_preset" => env('CLOUDINARY_PRESET'),
    ];

    $sha = Cloudinary::api_sign_request($prams, env("CLOUDINARY_API_SECRET"));
    return ["secret" => $sha, "time" => $time];
}