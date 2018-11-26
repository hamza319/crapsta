@extends('layouts.hz_layout')
@section('title', 'Profile')
@section('js')

<script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
<script type="text/javascript">  
  var myUploadWidget;
  document.getElementById("upload_widget_opener").addEventListener("click", function() {
    myUploadWidget = cloudinary.openUploadWidget({ 
      cloudName: 'dlxurkbpj', uploadPreset: 'bmoy73rn', cropping: true}, (error, result) => { });
  }, false);
</script>
@endsection
@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
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
										Johnny Bullivan-danco
									</li>
									<li class="user_name">
										@johnny
									</li>
								</ul>
							</div>
						</div>
						<div class="col flex">
							<div class="user_stat">
								<ul>
									<li>55</li>
									<li>Post</li>
								</ul>
								<ul>
									<li>367</li>
									<li>Following</li>
								</ul>
								<ul>
									<li>1032</li>
									<li>Followers</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<div class="follow_status">
								<button type="button" class="btn btn-outline-light">Following</button>
							</div>
							<div class="new-picture">
								<a href="#" id="upload_widget_opener"><button type="button" id="uploadbtn" class="btn btn-outline-light" data-toggle="modal" data-target="#fileuploa"><i class="fas fa-file-upload fa-1x"></i></button></a>

								<div class="modal" id="fileupload">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<!-- Modal body -->
											<div class="modal-body">
												<input type="file" name="file" id="file" class="inputfile" accept="image/*">
												<!-- <label for="file" class="btn">upload</label> -->
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
			<div class="d-flex flex-row flex-wrap justify-content-center">
				<div class="d-flex flex-column">
					<a href="{{route('details')}}">
						<div class="img-container">
							<img src="https://images.unsplash.com/photo-1485963631004-f2f00b1d6606?auto=format&fit=crop&w=668&q=80" class="img-fluid">
							<div class="overlay">
								<div class='likes'>
									<i class="far fa-heart"></i><span>105</span>
								</div>
								<div class="comments">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									28
								</div>
							</div>
						</div>
					</a>
					<a href="{{route('details')}}">
						<div class="img-container">
							<img src="https://images.unsplash.com/photo-1455853659719-4b521eebc76d?auto=format&fit=crop&w=750&q=80" class="img-fluid image m-1 p-1">
							<div class="overlay">
								<div class='likes'>
									<i class="far fa-heart"></i>
									105
								</div>
								<div class="comments">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									28
								</div>
							</div>
						</div>
					</a>
					<a href="{{route('details')}}">
						<div class="img-container">
							<img src="https://images.unsplash.com/photo-1485963631004-f2f00b1d6606?auto=format&fit=crop&w=668&q=80" class="img-fluid">
							<div class="overlay">
								<div class='likes'>
									<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
									105
								</div>
								<div class="comments">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									28
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="d-flex flex-column">
					<a href="{{route('details')}}">
						<div class="img-container">
							<img src="https://images.unsplash.com/photo-1500816558239-6b91f4256ead?auto=format&fit=crop&w=331&q=80" class="img-fluid">
							<div class="overlay">
								<div class='likes'>
									<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
									105
								</div>
								<div class="comments">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									28
								</div>
							</div>
						</div>
					</a>
					<a href="{{route('details')}}"><div class="img-container">
						<img src="https://images.unsplash.com/photo-1487376318617-f43c7b41e2e2?auto=format&fit=crop&w=750&q=80" class="img-fluid ">
						<div class="overlay">
							<div class='likes'>
								<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
								105
							</div>
							<div class="comments">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								28
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="d-flex flex-column">
				<a href="{{route('details')}}">
					<div class="img-container">
						<img src="https://images.unsplash.com/photo-1497888329096-51c27beff665?auto=format&fit=crop&w=751&q=80" class="img-fluid mb-2">
						<div class="overlay">
							<div class='likes'>
								<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
								105
							</div>
							<div class="comments">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								28
							</div>
						</div>
					</div>
				</a>
				<a href="{{route('details')}}">
					<div class="img-container">

						<img src="https://images.unsplash.com/photo-1505253468034-514d2507d914?auto=format&fit=crop&w=334&q=80"  class="img-fluid ">

						<div class="overlay">
							<div class='likes'>
								<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
								105
							</div>
							<div class="comments">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								28
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="d-flex flex-column">
				<a href="{{route('details')}}">
					<div class="img-container">
						<img src="https://images.unsplash.com/photo-1502550900787-e956c314a221?auto=format&fit=crop&w=334&q=80" class="img-fluid m-1 p-1">
						<div class="overlay">
							<div class='likes'>
								<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
								105
							</div>
							<div class="comments">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								28
							</div>
						</div>
					</div>
				</a>
				<a href="{{route('details')}}">
					<div class="img-container">
						<img src="https://images.unsplash.com/photo-1455853659719-4b521eebc76d?auto=format&fit=crop&w=750&q=80" class="img-fluid image m-1 p-1">
						<div class="overlay">
							<div class='likes'>
								<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
								105
							</div>
							<div class="comments">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								28
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
</div>

@endsection