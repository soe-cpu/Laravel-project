@extends('master')
@section('title','Movie')

@section('content')

<div class="container  border bg-light container-t py-4"> 
	<div class="row">
		<div class="col-12">
			<h2 class="text-center"><span class="text-dark">Movies</span></h2>
		</div>
	</div>
	<div class="row"> 
		<div class="col-xl-12">
			<div class="row">
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/y1.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/y.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/m3.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/adv.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/o2.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/o3.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/k1.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="image/k.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/o1.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/o.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="{{ asset('assets/image/k2.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="{{ asset('assets/image/k3.jpg') }}" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="image/m4.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="image/st.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="image/k4.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="image/k5.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="image/v.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="image/v1.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="image/v.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="image/v1.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="image/v.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="image/v1.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
				<div class="col-xl-3 col-md-6 col-lg-4 col-xs-6 col-sm-12 pt-3">
					<div class="card cards">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img src="image/v.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
								</div>
								<div class="flip-box-back">
									<img src="image/v1.jpg" class="card-img-top menu" alt="Paris" style="height:200px">
									<span class="bg-dark bottom-right checked rounded float-right  py-2 px-2">Movie</span>
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
	</div>
	<div class="row py-4">
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