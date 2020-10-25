@extends('master')
@section('title','Home')

@section('content')

<div class="container bg-light container-t border">
	<div class="row py-2">
		<div class="col-12">
			<h2 class="text-center"><span class="text-dark">Latest Release</span></h2>
		</div>
	</div>
	<div class="row py-2">
		<div class="slider">
			<div class="popular-movies">
				<div class="movie-container">
					<div class="image-effect card-1">
						<div class="card cards">
							<div class="movie-image" >
								<a href="" data-target="#info" data-toggle="modal">
									<img src="{{ asset('assets/image/y1.jpg') }}" class="card-img-top" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked float-right  py-2 px-2">Movie</span>
								</a>
								<div class="card-body">
									<div class="container-fluid">
										<div class="row">
											<div class="col-9">
												<b class="text-success py-1 float-left">Your Name<span class="text-dark">(2019)</span></b><br>
											</div>
											<div class="col-3">
												<span class="fa fa-star bg-dark checked rounded my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="image-effect card-1">
						<div class="card cards">
							<div class="movie-image" >
								<a href="" data-target="#info" data-toggle="modal">
									<img src="{{ asset('assets/image/o1.jpg') }}" class="card-img-top" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked py-2 px-2">Series</span>
								</a>
								<div class="card-body">
									<div class="container-float">
										<div class="row">
											<div class="col-8">
												<b class="text-success py-1">One Piece<span class="text-dark">(1998)</span></b><br>
											</div>
											<div class="col-4">
												<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="image-effect card-1">
						<div class="card cards">
							<div class="movie-image" >
								<a href="" data-target="#info" data-toggle="modal">
									<img src="{{ asset('assets/image/k1.jpg') }}" class="card-img-top" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked float-right  py-2 px-2">Movie</span>
								</a>
								<div class="card-body">
									<div class="container-float">
										<div class="row">
											<div class="col-8">
												<b class="text-success py-1">Tee Divine Fury<span class="text-dark">(2019)</span></b><br>
											</div>
											<div class="col-4">
												<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="image-effect card-1">
						<div class="card cards">
							<div class="movie-image" >
								<a href="" data-target="#info" data-toggle="modal">
									<img src="{{ asset('assets/image/st.jpg') }}" class="card-img-top" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked float-right  py-2 px-2">Series</span>
								</a>
								<div class="card-body">
									<div class="container-float">
										<div class="row">
											<div class="col-8">
												<b class="text-success py-1">Star War<span class="text-dark">(2019)</span></b><br>
											</div>
											<div class="col-4">
												<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="image-effect card-1">
						<div class="card cards">
							<div class="movie-image" >
								<a href="" data-target="#info" data-toggle="modal">
									<img src="{{ asset('assets/image/m2.jpg') }}" class="card-img-top" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked float-right  py-2 px-2">Movie</span>
								</a>
								<div class="card-body">
									<div class="container-float">
										<div class="row">
											<div class="col-8">
												<b class="text-success py-1">Doraemon<span class="text-dark">(2019)</span></b><br>
											</div>
											<div class="col-4">
												<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="image-effect card-1">
						<div class="card cards">
							<div class="movie-image" >
								<a href="" data-target="#info" data-toggle="modal">
									<img src="{{ asset('assets/image/k2.jpg') }}" class="card-img-top" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked float-right  py-2 px-2">Series</span>
								</a>
								<div class="card-body">
									<div class="container-float">
										<div class="row">
											<div class="col-8">
												<b class="text-success py-1">Missing:The Other Side<span class="text-dark">(2019)</span></b><br>
											</div>
											<div class="col-4">
												<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="image-effect card-1">
						<div class="card cards">
							<div class="movie-image" >
								<a href="" data-target="#info" data-toggle="modal">
									<img src="{{ asset('assets/image/m4.jpg') }}" class="card-img-top" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked float-right  py-2 px-2">Movie</span>
								</a>
								<div class="card-body">
									<div class="container-float">
										<div class="row">
											<div class="col-8">
												<b class="text-success py-1">Venom<span class="text-dark">(2019)</span></b><br>
											</div>
											<div class="col-4">
												<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="image-effect card-1">
						<div class="card cards">
							<div class="movie-image" >
								<a href="" data-target="#info" data-toggle="modal">
									<img src="{{ asset('assets/image/k5.jpg') }}" class="card-img-top" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked float-right  py-2 px-2">Movie</span>
								</a>
								<div class="card-body">
									<div class="container-float">
										<div class="row">
											<div class="col-8">
												<b class="text-success py-1">Your Name<span class="text-dark">(2019)</span></b><br>
											</div>
											<div class="col-4">
												<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="image-effect card-1">
						<div class="card cards">
							<div class="movie-image" >
								<a href="" data-target="#info" data-toggle="modal">
									<img src="{{ asset('assets/image/v.jpg') }}" class="card-img-top" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked float-right  py-2 px-2">Movie</span>
								</a>
								<div class="card-body">
									<div class="container-float">
										<div class="row">
											<div class="col-8">
												<b class="text-success py-1">Your Name<span class="text-dark">(2019)</span></b><br>
											</div>
											<div class="col-4">
												<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="image-effect card-1">
						<div class="card cards">
							<div class="movie-image" >
								<a href="" data-target="#info" data-toggle="modal">
									<img src="{{ asset('assets/image/o2.jpg') }}" class="card-img-top" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checke float-right  py-2 px-2">Movie</span>
								</a>
								<div class="card-body">
									<div class="container-float">
										<div class="row">
											<div class="col-8">
												<b class="text-success py-1">Your Name<span class="text-dark">(2019)</span></b><br>
											</div>
											<div class="col-4">
												<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
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
	</div>
	{{-- <div class="row">
		<div class="col-12 my-1">
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<li class="page-item"><a class="page-link text-success" href="#"><<</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">1</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">2</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">3</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">>></a></li>
				</ul>
			</nav>
		</div>
	</div> --}}
</div>
<!-- movies -->
<div class="container border bg-light my-2 py-4"> 
	<div class="row">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" href="#">Active</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>
		</ul>
	</div>
	<div class="row px-5">
		<div class="col-xl-9">
			<div class="row">
				<div class="col-xl-4 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/y1.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/y.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right  py-2 px-2">Movie</span>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="container-float">
								<div class="row">
									<b class="text-success py-1">Your Name<span class="text-dark">(2019)</span></b><br>
									<p>What an amazing movies.What an amazing...<a href="" data-target="#info" data-toggle="modal">seemore</a></p>
								</div>
								<div class="row">
									<div class="col-6 my-3">
										<a class="button py-2 my-1" href="tvshow.html">Play<i class="mx-2 fa fa-play"></i></a>
									</div>
									<div class="col-6">
										<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/m3.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/adv.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right py-2 px-2">Movie</span>
								</div>
							</div>
						</div>
						<div class="card-body">             
							<div class="container-float">
								<div class="row">
									<b class="text-success py-1">End Game<span class="text-dark">(2019)</span></b><br>
									<p>What an amazing movies.What an amazing...<a href="" data-target="#info" data-toggle="modal">seemore</a></p>
								</div>
								<div class="row">
									<div class="col-6 my-3">
										<a class="button py-2 my-1" href="tvshow.html">Play<i class="mx-2 fa fa-play"></i></a>
									</div>
									<div class="col-6">
										<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/o2.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right  py-2 px-2">Series</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/o3.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right  py-2 px-2">Series</span>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="container-float">
								<div class="row">
									<b class="text-success py-1">One Piece<span class="text-dark">(1998)</span></b><br>
									<p>What an amazing movies.What an amazing...<a href="" data-target="#info" data-toggle="modal">seemore</a></p>
								</div>
								<div class="row">
									<div class="col-6 my-3">
										<a class="button py-2 my-1" href="tvshow.html">Play<i class="mx-2 fa fa-play"></i></a>
									</div>
									<div class="col-6">
										<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/k1.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/k.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right  py-2 px-2">Movie</span>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="container-float">
								<div class="row">
									<b class="text-success py-1">The Divine Fury<span class="text-dark">(2019)</span></b><br>
									<p>What an amazing movies.What an amazing...<a href="" data-target="#info" data-toggle="modal">seemore</a></p>
								</div>
								<div class="row">
									<div class="col-6 my-3">
										<a class="button py-2 my-1" href="tvshow.html">Play<i class="mx-2 fa fa-play"></i></a>
									</div>
									<div class="col-6">
										<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/o1.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right  py-2 px-2">Series</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/o.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right  py-2 px-2">Series</span>
								</div>
							</div>
						</div>
						<div class="card-body">                   
							<div class="container-float">
								<div class="row">
									<b class="text-success py-1">Stampede<span class="text-dark">(2019)</span></b><br>
									<p>What an amazing movies.What an amazing...<a href="" data-target="#info" data-toggle="modal">seemore</a></p>
								</div>
								<div class="row">
									<div class="col-6 my-3">
										<a class="button py-2 my-1" href="tvshow.html">Play<i class="mx-2 fa fa-play"></i></a>
									</div>
									<div class="col-6">
										<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/k2.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/k3.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right  py-2 px-2">Movie</span>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="container-float">
								<div class="row">
									<b class="text-success py-1">Missing:The Other Side<span class="text-dark">(2019)</span></b><br>
									<p>What an amazing movies.What an amazing...<a href="" data-target="#info" data-toggle="modal">seemore</a></p>
								</div>
								<div class="row">
									<div class="col-6 my-3">
										<a class="button py-2 my-1" href="tvshow.html">Play<i class="mx-2 fa fa-play"></i></a>
									</div>
									<div class="col-6">
										<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/m4.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right  py-2 px-2">Series</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/st.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right py-2 px-2">Series</span>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="container-float">
								<div class="row">
									<b class="text-success py-1">Star War<span class="text-dark">(2019)</span></b><br>
									<p>What an amazing movies.What an amazing...<a href="" data-target="#info" data-toggle="modal">seemore</a></p>
								</div>
								<div class="row">
									<div class="col-6 my-3">
										<a class="button py-2 my-1" href="tvshow.html">Play<i class="mx-2 fa fa-play"></i></a>
									</div>
									<div class="col-6">
										<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/k4.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right py-2 px-2">Series</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/k5.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right py-2 px-2">Series</span>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="container-float">
								<div class="row">
									<b class="text-success py-1">Vagabond<span class="text-dark">(2019)</span></b><br>
									<p>What an amazing movies.What an amazing...<a href="" data-target="#info" data-toggle="modal">seemore</a></p>
								</div>
								<div class="row">
									<div class="col-6 my-3">
										<a class="button py-2 my-1" href="tvshow.html">Play<i class="mx-2 fa fa-play"></i></a>
									</div>
									<div class="col-6">
										<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/v.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/v1.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark top-right checked  float-right py-2 px-2">Movie</span>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="container-float">
								<div class="row">
									<b class="text-success py-1">Venom<span class="text-dark">(2019)</span></b><br>
									<p>What an amazing movies.What an amazing...<a href="" data-target="#info" data-toggle="modal">seemore</a></p>
								</div>
								<div class="row">
									<div class="col-6 my-3">
										<a class="button py-2 my-1" href="tvshow.html">Play<i class="mx-2 fa fa-play"></i></a>
									</div>
									<div class="col-6">
										<span class="fa fa-star bg-dark checked rounded float-right my-3 py-1 px-1"><span>&nbsp8.0&nbsp</span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 d-none d-xl-block pt-3">
			<div class="row mx-4">
				<h1 class="text-dark">Category</h1>
				<div class="example border">
					<ul class="list-group list-group-flus  bg-secondary">
						<li class="list-group-item"><a href="">Action</a><span class="bg-dark checked rounded float-right">43</span></li>
						<li class="list-group-item"><a href="">Adventure</a><span class="bg-dark checked rounded float-right">30</span></li>
						<li class="list-group-item"><a href="">Comedy</a><span class="bg-dark checked rounded float-right">20</span></li>
						<li class="list-group-item"><a href="">Crime</a><span class="bg-dark checked rounded float-right">10</span></li>
						<li class="list-group-item"><a href="">Animation</a><span class="bg-dark checked rounded float-right">43</span></li>
						<li class="list-group-item"><a href="">Fantasy</a><span class="bg-dark checked rounded float-right">43</span></li>
						<li class="list-group-item"><a href="">Family</a><span class="bg-dark checked rounded float-right">43</span></li>
						<li class="list-group-item"><a href="">Horro</a><span class="bg-dark checked rounded float-right">43</span></li>
						<li class="list-group-item"><a href="">Live Action</a><span class="bg-dark checked rounded float-right">43</span></li>
						<li class="list-group-item"><a href="">School</a><span class="bg-dark checked rounded float-right">43</span></li>
					</ul>
				</div>
			</div>
			<div class="row mx-4 my-4"> 
				<div class="example border">
					<div class="col-12 my-1">
						<button type="button" class="btn btn-success btn-sm btn-block">2010</button>
					</div>
					<div class="col-12 my-1">
						<button type="button" class="btn btn-success btn-sm btn-block">2011</button>
					</div>
					<div class="col-12 my-1">
						<button type="button" class="btn btn-success btn-sm btn-block">2012</button>
					</div>
					<div class="col-12 my-1">
						<button type="button" class="btn btn-success btn-sm btn-block">2013</button>
					</div>
					<div class="col-12 my-1">
						<button type="button" class="btn btn-success btn-sm btn-block">2010</button>
					</div>
					<div class="col-12 my-1">
						<button type="button" class="btn btn-success btn-sm btn-block">2011</button>
					</div>
					<div class="col-12 my-1">
						<button type="button" class="btn btn-success btn-sm btn-block">2012</button>
					</div>
					<div class="col-12 my-1">
						<button type="button" class="btn btn-success btn-sm btn-block">2013</button>
					</div>
				</div>
			</div>
			<div class="row mx-4 my-4">
				<div class="d-none d-xl-block">
					<h1 class="text-dark">Suggesstion</h1>
					<div class="col-12 my-2 card-1">
						<a href="" data-target="#info" data-toggle="modal">
							<div class="row border cards">
								<div class="col-4 py-2">
									<img src="{{ asset('assets/image/m3.jpg') }}" class="rounded zoom" width="60" height="60">
								</div>
								<div class="col-8 py-2">
									<span>End Game</span><br>
									<span>(2019)</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 my-2 card-1">
						<a href="" data-target="#info" data-toggle="modal">
							<div class="row border cards">
								<div class="col-4 py-2">
									<img src="{{ asset('assets/image/o2.jpg') }}" class="rounded zoom" width="60" height="60">
								</div>
								<div class="col-8 py-2">
									<span>One Piece</span><br>
									<span>(1998)</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 my-2 card-1">
						<a href="" data-target="#info" data-toggle="modal">
							<div class="row border cards">
								<div class="col-4 py-2">
									<img src="{{ asset('assets/image/st.jpg') }}" class="rounded zoom" width="60" height="60">
								</div>
								<div class="col-8 py-2">
									<span>Star War</span><br>
									<span>(1998)</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 my-2 card-1">
						<a href="" data-target="#info" data-toggle="modal">
							<div class="row border cards">
								<div class="col-4 py-2">
									<img src="{{ asset('assets/image/k.jpg') }}" class="rounded zoom" width="60" height="60">
								</div>
								<div class="col-8 py-2">
									<span>The Divine Fury</span><br>
									<span>(1998)</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 my-2 card-1">
						<a href="" data-target="#info" data-toggle="modal">
							<div class="row border cards">
								<div class="col-4 py-2">
									<img src="{{ asset('assets/image/k2.jpg') }}" class="rounded zoom" width="60" height="60">
								</div>
								<div class="col-8 py-2">
									<span>Missing</span><br>
									<span>(2020)</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 my-2 card-1">
						<a href="" data-target="#info" data-toggle="modal">
							<div class="row border cards">
								<div class="col-4 py-2">
									<img src="{{ asset('assets/image/st.jpg') }}" class="rounded zoom" width="60" height="60">
								</div>
								<div class="col-8 py-2">
									<span>Star War</span><br>
									<span>(1998)</span>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>       
	</div>
	<div class="row pt-4">
		<div class="col-xl-12 mx-5">
			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item"><a class="page-link text-success" href="#">Previous</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">1</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">2</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">3</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">Next</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>


@endsection