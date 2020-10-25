@extends('master')
@section('title','Tvshow')

@section('content')

<div class="container container-t bg-light border">
	<div class="row py-4"> 
		<div class="col-3 py-2 bg-light"> 
			<div class="col-12 d-none d-xl-block ">
				<div class="card cards  card-1">
					<div class="flip-box">
						<div class="flip-box-front">
							<img src="{{ asset('assets/image/y1.jpg') }}" class="card-img-top" alt="Paris" style="height:200px">
							<span class="bg-dark top-right checked rounded float-right  py-2 px-2">Movie</span>
						</div>
					</div>
					<div class="card-body">
						<div class="container-float">
							<div class="row">
								<div class="col-6 my-3">
									<a href=""><span class="fa fa-heart btn btn-outline-danger fa-1x"></span></a>
								</div>
								<div class="col-6">
									<span class="fa fa-star bg-dark checked rounded float-right my-3 py-2 px-1"><span>&nbsp8.0&nbsp</span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 py-2 bg-light cards">
			<div class="container">
				<div class="row">
					<h2 class="text-success">Your Name<span class="text-dark">(2019)</span></h2>
				</div>
				<div class="row border">
					<img src="{{ asset('assets/image/y.jpg') }}" width="100%" height="200px">
				</div>
				<div class="row py-1">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Info</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Video</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Download</a>
						</li>
					</ul>
				</div>

				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active py-2" id="home" role="tabpanel" aria-labelledby="home-tab"><p>(Japanese: 君の名は。, Hepburn: Kimi no Na wa.) is a 2016 Japanese animated romantic fantasy film written and directed by Makoto Shinkai, and produced by CoMix Wave Films. ... Your Name tells the story of a high school boy in Tokyo and a high school girl in a rural town, who suddenly and inexplicably begin to swap bodies.</p></div>
					<div class="tab-pane fade py-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="container">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0YDXw35ts3I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="container bg-light"> 
							<div class="row mx-auto py-2 scro">
								<div class="col-12 py-2">
									<ul class="list-group">
										<a href=""><li class="list-group-item list-group-item-success">Google Drive</li></a>
										<a href=""><li class="list-group-item list-group-item-success">This is a download link</li></a>
										<a href=""><li class="list-group-item list-group-item-success">This is a download link</li></a>
										<a href=""><li class="list-group-item list-group-item-success">This is a download link</li></a>
										<a href=""><li class="list-group-item list-group-item-success">This is a download link</li></a>
										<a href=""><li class="list-group-item list-group-item-success">This is a download link</li></a>
										<a href=""><li class="list-group-item list-group-item-success">This is a download link</li></a>
										<a href=""><li class="list-group-item list-group-item-success">This is a download link</li></a>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
		<div class="col-3">
			<div class="d-none d-xl-block">
				<h1>Suggesstion</h1>
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
								<img src="{{ asset('assets/imagest.jpg') }}" class="rounded zoom" width="60" height="60">
							</div>
							<div class="col-8 py-2">
								<span>Star War</span><br>
								<span>(1998)</span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-12 my-2">
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
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-xl-12 float-right">
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-center">
					<li class="page-item"><a class="page-link text-success" href="#">Previous</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">1</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">2</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">3</a></li>
					<li class="page-item"><a class="page-link text-success" href="#">Next</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<h1 class="text-center">Comments</h1>
	<div class="row mx-auto py-2 scro">
		<div class="col-12">
			<div id="accordion ">
				<div class="card">
					<div class="card-header" id="headingOne">
						<div class="media">
							<img class="mr-3" src="{{ asset('assets/image/m1.jpg') }}" width="50" height="50" alt="Generic placeholder image">
							<div class="media-body">
								<a href=""><h6 class="mt-0">Mg Mg</h6></a>
								<p>Good Video!</p>
								<a href="" class="text-primary">like</a>
								<span>23</span>
								<a href="#collapseExample" class="text-primary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">reply</a>
								<span>23</span>
								<div class="collapse" id="collapseExample">
									<div class="card card-body">
										<div class="media mt-3">
											<a class="pr-3" href="#">
												<img src="image/movie.png" width="50" height="50" alt="Generic placeholder image" class="border">
											</a>
											<div class="media-body">
												<a href=""><h6 class="mt-0">Admin</h6></a>
												<p>Thanks!</p> 
												<a href="" class="text-primary">like</a>
												<span>23</span>
												<a href="" class="text-primary">reply</a>
												<span>23</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingOne">
						<div class="media">
							<img class="mr-3" src="image/m1.jpg" width="50" height="50" alt="Generic placeholder image">
							<div class="media-body">
								<a href=""><h6 class="mt-0">Mg Mg</h6></a>
								<p>Good Video!</p>
								<a href="" class="text-primary">like</a>
								<span>23</span>
								<a href="#collapseExample" class="text-primary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">reply</a>
								<span>23</span>
								<div class="collapse" id="collapseExample">
									<div class="card card-body">
										<div class="media mt-3">
											<a class="pr-3" href="#">
												<img src="image/movie.png" width="50" height="50" alt="Generic placeholder image" class="border">
											</a>
											<div class="media-body">
												<a href=""><h6 class="mt-0">Admin</h6></a>
												<p>Thanks!</p> 
												<a href="" class="text-primary">like</a>
												<span>23</span>
												<a href="" class="text-primary">reply</a>
												<span>23</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingOne">
						<div class="media">
							<img class="mr-3" src="image/m1.jpg" width="50" height="50" alt="Generic placeholder image">
							<div class="media-body">
								<a href=""><h6 class="mt-0">Mg Mg</h6></a>
								<p>Good Video!</p>
								<a href="" class="text-primary">like</a>
								<span>23</span>
								<a href="#collapseExample" class="text-primary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">reply</a>
								<span>23</span>
								<div class="collapse" id="collapseExample">
									<div class="card card-body">
										<div class="media mt-3">
											<a class="pr-3" href="#">
												<img src="image/movie.png" width="50" height="50" alt="Generic placeholder image" class="border">
											</a>
											<div class="media-body">
												<a href=""><h6 class="mt-0">Admin</h6></a>
												<p>Thanks!</p> 
												<a href="" class="text-primary">like</a>
												<span>23</span>
												<a href="" class="text-primary">reply</a>
												<span>23</span>
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
	<div class="row my-5">
		<form class="form-inline mx-auto">
			<div class="form-group">
				<textarea class="form-control" placeholder="Comment"></textarea>
				<button class="btn btn-success btn-sm mx-2">Send</button>
			</div>
		</form>
	</div>
    <!-- <div class="row">
      <div class="container">
        <div class="col-md-6 offset-md-3">
          <div class="card paper">
            <ul id="lastComment" class="list-group">
              <li class="list-group-item">
                <span class="circle">
                  <img src="image/m1.jpg" width="30" height="30" alt="user">  
                </span>
                <span class="title"> 
                  <a href="#">Sandra Adams </a> <time> 6:00 PM</time> 
                    <p><a href="#">Peter Carlsson</a> This is without doubt the greatest flim i’ve ever seen.</p>
                </span>
                <ul class="list-inline actions" href="#">
                  <li><a class="edit" href="#" title="Edit comment">Edit</a></li>
                  <li class="roff"><a class="delete" href="#" title="Delete comment"></a></li>
                </ul>
              </li>
            </ul>
            <details>
              <summary style="padding:1em;">3 comments</summary>
              <ul class="list-group">
                <li class="list-group-item ">
                  <span class="circle">
                    <img src="image/m1.jpg" width="30" height="30" alt="user"> 
                  </span>
                  <span class="title"> 
                    <a href="#">Soe</a> <time> 5:09 PM</time> 
                    <p>Can’t wait to see this movie.</p>
                  </span>
                  <ul class="actions" href="#">
                    <li><a class="reply" href="#">Reply</a></li>
                  </ul>
                </li>
                <li class="list-group-item">
                  <span class="circle">
                    <img src="image/m1.jpg" width="30" height="30" alt="user">  
                  </span>
                  <span class="title"> 
                    <a href="#">Ali Connors</a> <time> 5:15 PM</time> 
                    <p>Mee too.</p>
                  </span>
                  <ul class="actions" href="#">
                    <li><a class="reply" href="#">Reply</a></li>
                  </ul>
                </li> 
                <li class="list-group-item">
                  <span class="circle">
                    <img src="image/m1.jpg" width="30" height="30" alt="user">  
                  </span>
                  <span class="title"> 
                  <a href="#">Peter Carlsson</a> <time> 5:30 PM</time> 
                  <p><a href="#">Abbey Christensen</a> I thought it was a good movie. The slow motion was a tad excessive at times, but overall it was good! I'm love it ;) </p>
                  </span>
                  <ul class="actions" href="#">
                    <li><a class="reply" href="#">Reply</a></li>
                  </ul>
                </li> 
              </ul> 
            </details>
            
            <form>
              <fieldset class="form-group">
                <input type="text" 
                class="form-control" 
                id="exampleInputEmail1" 
                placeholder="Add a comment">
              </fieldset>
              <button type="button" class="btn btn-sm btn-success">Post</button>
              <button type="button" class="btn btn-sm btn-secondary">Cancel</button>
            </form> 
          </div>
        </div> 
      </div>
  </div> -->
</div>

@endsection