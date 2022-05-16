
	@if(Auth::guard('web')->check() || Auth::guard('customer')->check())
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 mb-3">
				<div class="row">
					{{-- <div class="col-12 col-sm-12 col-md-12 mb-3">
						<div class="input-group input group-sm">
							<input type="search" class="form-control rounded-3 " name="keyword" id="keyword">
							<button type="button" class="btn btn-icon rounded-3 mx-2"><i class="fa fa-th-large" aria-hidden="true"></i></button>
							<button type="button" class="btn btn-icon rounded-3"><i class="fa fa-th-list" aria-hidden="true"></i></button>
						</div>
					</div> --}}
					<div class="col-6 col-sm-6 col-md-4">
						<a href="#" class="product-sm mb-3 text-decoration-none position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal">

							<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
								<span class="position-absolute top-0 end-0 btn btn-sm btn-danger shadow-sm rounded-0"><span class="visually">Sale</span></span>
							<div class="text-wrap">
								<p class="title text-truncate">Great product name is here</p>
								<div class="price">RM17.00</div> <!-- price-wrap.// -->
							</div>
						</a>
					</div>
					@forelse($products as $product)
					<div class="col-6 col-sm-6 col-md-4">
						<a href="#" class="product-sm mb-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
							<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
							<div class="text-wrap">
								<p class="title text-truncate">{{$product->name}}</p>
								<div class="price">RM{{number_format($product->price ? $product->price : 0,2)}}</div> <!-- price-wrap.// -->
							</div>
						</a>
				    </div>
				    @empty
				    @endforelse
				   
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade p-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
			<div class="modal-content">
				<div class="modal-body p-0">
					<div class="screen-wrap">

						{{-- <header class="app-header">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</header> --}}

						<main class="app-content position-relative">
	  						<div class="position-absolute m-3 top-0 start-0"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
							<section class="gallery-wrap scroll-horizontal">
								<div class="item-slider"><img src="{{asset('images/items/item.jpg')}}"></div>
								<div class="item-slider"><img src="{{asset('images/items/item.jpg')}}"></div>
								<div class="item-slider"><img src="{{asset('images/items/item.jpg')}}"></div>
							</section>

							<section class="padding-around">

								<div class="rating-wrap mb-2">
								    <ul class="rating-stars">
								        <li style="width:80%" class="stars-active">
								            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
								            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
								            <i class="fa fa-star"></i>
								        </li>
								        <li>
								            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
								            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
								            <i class="fa fa-star"></i>
								        </li>
								    </ul>
								    <small class="label-rating text-muted">7/10</small>
								</div> <!-- rating-wrap.// -->

								<h6 class="title-detail">Mayin matodan tikilgan xalat, Zara  </h6>	
								<div class="price-wrap mb-3">
									<span class="h6 price text-warning">179 000 sum</span> 
								</div> <!-- price-wrap.// -->


								<div class="d-flex">
									<div class="flex-grow-1 mr-2"><a href="page-cart.html" class="btn btn-primary btn-block">Savatga solish</a></div>
									<div><a href="page-cart.html" class="btn btn-light btn-icon"><i class="fa fa-heart"></i></a></div>
								</div>

								<article class="info-detail-wrap mt-2">
									Great words is nothing but just sounds tovar xarakteristikasi uchun tekst shunchaki aliquid molestias ipsum tenetur nesciunt assumenda sequi, dolor doloremque quo nam earum.
										 <a href="#" class="btn-link"> Read more</a>
								</article>

							</section>
						</main>

						</div>
				</div>
				<div class="modal-footer">
					<span class="">RM 89</span>
	                    <a href="#" class="btn btn-primary">  <i class="fa fa-shopping-cart"></i> Add To Cart  </a>
	                    
	              

				</div>
			</div>
		</div>
	</div>
	@else
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-4">
	                <div class="d-block text-center">
	                    <img class="mb-4" src="{{asset('images/bootstrap-logo.svg')}}" alt="" width="58" height="48">
	                    <h5 class="mb-3 fw-normal">Fast sign in</h5>
	                </div>
	 
	                <div class="row">
	                    <div class="d-grid"><a class="btn btn-light border btn-google btn-block btn-outline" href="{{ url('auth/google') }}"><img width="18px" src="https://assets.gitlab-static.net/assets/auth_buttons/google_64-9ab7462cd2115e11f80171018d8c39bd493fc375e83202fbb6d37a487ad01908.png"> Login With Google </a></div>
	                </div> 

	                <p class="mb-3 text-muted text-center">{{ config('app.name', 'Laravel') }}© 2017–2021</p>
	  
	        </div>
	    </div>
	</div>
	@endif
