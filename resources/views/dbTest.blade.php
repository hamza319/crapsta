@extends('layouts.hz_layout')

@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
@endsection

@section('content')
<div class="row imagegrid">
	<div class="img-container justify-content-center">
		<div class="img-box float-left">
			<a href="#">
				<img src="https://images.unsplash.com/photo-1485963631004-f2f00b1d6606?auto=format&fit=crop&w=668&q=80" class="img img-fluid">
				<div class="overlay">
					<div class='likes'>
						<i class="far fa-heart"></i><span>105</span>
					</div>
					<div class="comments">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						28
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
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						28
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
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						28
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
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						28
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
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						28
					</div>
				</div>
			</a>
		</div>


		<!-- <div class="row imagegrid">
			<div class="d-flex flex-row flex-wrap justify-content-center">
				<div class="d-flex flex-column">
					<a href="#">
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
					<a href="#">
						<div class="img-container">
							<img src="https://images.unsplash.com/photo-1455853659719-4b521eebc76d?auto=format&fit=crop&w=750&q=80" class="img-fluid">
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
					<a href="#">
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
					<a href="#">
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
					<a href="#"><div class="img-container">
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
				<a href="#">
					<div class="img-container">
						<img src="https://images.unsplash.com/photo-1497888329096-51c27beff665?auto=format&fit=crop&w=751&q=80" class="img-fluid">
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
				<a href="#">
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
				<a href="#">
					<div class="img-container">
						<img src="https://images.unsplash.com/photo-1502550900787-e956c314a221?auto=format&fit=crop&w=334&q=80" class="img-fluid">
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
				<a href="#">
					<div class="img-container">
						<img src="https://images.unsplash.com/photo-1455853659719-4b521eebc76d?auto=format&fit=crop&w=750&q=80" class="img-fluid image">
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
	</div> -->

			<!-- <ul>
				@foreach($posts as $post)
				<li>{{ $post-> path }}</li>

				@endforeach
			</ul> -->
		</div>
	</div>
	@endsection