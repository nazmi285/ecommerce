<div>
	@section('title')
	<h4 class="fw-bold p-2 mb-0">Products</h4>
	@endsection

	<nav class="navbar fixed-bottom navbar-light" style="bottom:55px;">
		<div class="container">
			<div class="navbar-brand">
			</div>
			<div class="col-md-12">
				<button type="button" class="btn btn-circle btn-lg btn-primary shadow-sm float-end" id="btnCreateProduct" data-bs-toggle="modal" data-bs-target="#createModal"><i class="fa fa-plus" aria-hidden="true"></i></button>
			</div>
		</div>
	</nav>

	<div class="row justify-content-center mb-5">
    	<div class="col-12 col-sm-8 col-md-8 col-lg-8">
    		
			<div class="clearfix mb-3">
				<div class="input-group">
				  	<input type="search" class="form-control bg-white border-0" wire:model="keyword" id="keyword" placeholder="Search Product" >
				  	<span class="btn bg-white rounded-end"><i class="fas fa-search"></i></span>
				  	<button type="button" class="btn bg-white rounded float-end ms-2" data-bs-toggle="modal" data-bs-target="#filterModal"><i class="fa-solid fa-filter"></i></button>
				</div>
			</div>

			<div class="d-flex justify-content-between">
				<p class="text-muted"> Total {{count($products)}} </p>
			</div>

	    	@forelse($products as $key => $product)
		    	<div class="card border-0 mb-2 bg-white">
		    		{{-- <div class="card-body"> --}}
		    			<div class="d-flex">
		    				<div class="flex-shrink-0" data-bs-toggle="modal" data-bs-target="#updateModal_{{$product->id}}">
		    					@if(Storage::disk('public')->exists($product->image_url))
		    						<img src="{{ asset('storage/'.$product->image_url) }}" class="img-fluid rounded-start" alt="..." style="width: 102px; height:102px; object-fit:cover;">
		    					@else
		    						<img src="{{ asset('images/items/item.jpg') }}" class="img-fluid rounded-start" alt="..." style="width: 102px; height:102px; object-fit:cover;">
		    					@endif
		    					{{-- <img src="{{ asset('images/items/item.jpg') }}" class="img-fluid rounded-start" alt="..." style="width: 102px; height:102px; object-fit:cover;"> --}}
		    				</div>
		    				<div class="flex-grow-1 ms-3 py-2" data-bs-toggle="modal" data-bs-target="#updateModal_{{$product->id}}">
		    					<span class="text-muted">{{$product->name ? $product->name : ''}}</span>
		    				</div>
		    				<div class="flex-shrink-1">
		    					<div class="dropdown dropstart">
		    						<button type="button" class="btn dropdown-toggle px-2 m-2" id="btnMoreAction_{{$key}}" data-bs-toggle="dropdown" aria-expanded="false">
		    							<i class="fas fa-lg fa-ellipsis-h"></i>
		    						</button>
		    						<ul class="dropdown-menu shadow-lg border-0" aria-labelledby="btnMoreAction_{{$key}}">
		    							<li><a class="dropdown-item" href="#">Sales Report</a></li>
		    							<li><a class="dropdown-item" href="#">Stock</a></li>
		    							<li><a class="dropdown-item" href="#">Something else here</a></li>
		    							<li><hr class="dropdown-divider"></li>
    									<li><a class="dropdown-item text-danger" href="#">Delete</a></li>
		    						</ul>
		    					</div>
		    				</div>
		    			</div>
					{{-- </div> --}}
				</div>
				<livewire:product.update :product="$product" :wire:key="$product->id">
	    	@empty
			    <div class="col-12 col-md-4 col-lg-4">
			    	<a href="{{route('product.create')}}">
						<div class="card rounded-3 alert-primary h-100">
							<div class="card-body my-5 position-relative">
								<div class="position-absolute top-50 start-50 translate-middle text-center">
									<i class="fa fa-plus" aria-hidden="true"></i><br> Add New Product
								</div>
							</div>
						</div>
					</a>
				</div>
			@endforelse
		</div>
	</div>

	
	
	<livewire:product.create/>


</div>
