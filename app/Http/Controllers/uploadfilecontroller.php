<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadfilecontroller extends Controller
{
    //
	function profileview(){

		return view('profile');
	}
	public function store(request $request){

		if($request->hasFile('image')){
			$request->file('image');
			return Storage::putFile(public/image, $request->file('image'));
		} 
		else {
			return 'No file selected';
		}
	}

	public function show()
	{
		$url = Storage::url();
		return "<img src='".$url."'/>";

	}
}
