@extends('master')
@section('content')

<div class="container bg-light container-t border">
	<div class="row py-2">
		<div class="col-12">
			<h2 class="text-center"><span class="text-dark">Latest Release</span></h2>
		</div>
	</div>
	<div class="row py-2">
		<div class="col-12">
			@foreach($students as $row)
				<p class="text-center">{{$row->id}} | {{$row->rollno}} | {{$row->name}} | {{$row->email}}</p>
			@endforeach
		</div>
	</div>

@endsection