@extends('master')
@section('title','Contact')

@section('content')

<div class="container bg-light container-t border">
	<div class="row my-3">
		<div class="column">
			<img src="{{ asset('assets/image/movie.png') }}" class="menu" style="width:100%">
			<br><br>
			<a href="https://www.facebook.com/profile.php?id=100009712514619" class="fa fa-facebook rounded"></a>
		</div>
		<div class="column">
			<form>
				<div class="form-group">
					<label for="exampleFormControlInput1">Email address</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Example textarea</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Send</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection