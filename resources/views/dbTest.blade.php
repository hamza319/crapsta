@extends('layouts.hz_layout')

@section('content')

<div class="container">
	<div class="row">
		<ul>
			@foreach($posts as $post)
			<li>{{ $post-> path }}</li>
		
			@endforeach
		</ul>
	</div>
</div>
@endsection