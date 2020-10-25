@extends('master')
@section('title','Service')

@section('content')

<div class="container bg-light container-t border">
	<div class="row py-2">
		@foreach($a as $row)
			<p>Name:{{$row['name']}}</p><br>
			<p>Age:{{$row ['age']}}</p>
		@endforeach
	</div>
</div>
@endsection