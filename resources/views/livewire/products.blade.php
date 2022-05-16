<div>
	@section('title')
	<h4 class="fw-bold p-2 mb-0">Products</h4>
	@endsection
	<div class="row justify-content-center mb-3">
    	<div class="col-12 col-sm-8 col-md-8 col-lg-8">

			<div class="clearfix mb-3">
				{{-- <input type="search" class="form-control float-start w-auto " placeholder="Search Product" name="keyword"> --}}
				<div class="input-group float-start w-50">
					<input type="text" class="form-control text-primary border-end-0" wire:model="keyword" id="keyword" placeholder="Search Product" >
					<span class="input-group-text bg-light" id="keyword"><i class="fas fa-search"></i></span>
				</div>
				<button type="button" class="btn btn-link text-decoration-none float-end" data-bs-toggle="modal" data-bs-target="#createModal"><i class="fa fa-plus" aria-hidden="true"></i> New Product</button>
			</div>

	    	@forelse($products as $key => $product)
		    	<div class="card border-0 mb-2 bg-white">
		    		{{-- <div class="card-body"> --}}
		    			<div class="d-flex">
		    				<div class="flex-shrink-0" data-bs-toggle="modal" data-bs-target="#updateModal_{{$product->id}}">
		    					<img src="{{ asset('images/items/item.jpg') }}" class="img-fluid rounded-start" alt="..." style="width: 102px; height:102px; object-fit:cover;">
		    				</div>
		    				<div class="flex-grow-1 ms-3 py-2" data-bs-toggle="modal" data-bs-target="#updateModal_{{$product->id}}">
		    					<span class="text-muted">{{$product->name ? $product->name : ''}}</span>
		    				</div>
		    				<div class="flex-shrink-1">
			    				<button class="btn px-2 m-2"><i class="fas fa-lg fa-ellipsis-h"></i></button>
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

