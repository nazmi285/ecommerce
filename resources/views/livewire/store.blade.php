
<div>
	<div class="row">
		{{-- <div class="col-12 col-sm-12 col-md-12 mb-3">
			<div class="input-group input group-sm">
				<input type="search" class="form-control rounded-3 " name="keyword" id="keyword">
				<button type="button" class="btn btn-icon rounded-3 mx-2"><i class="fa fa-th-large" aria-hidden="true"></i></button>
				<button type="button" class="btn btn-icon rounded-3"><i class="fa fa-th-list" aria-hidden="true"></i></button>
			</div>
		</div> --}}
		{{-- <div class="col-6 col-sm-6 col-md-4">
			<a href="#" class="product-sm mb-3 text-decoration-none position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal">

				<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
					<span class="position-absolute top-0 end-0 btn btn-sm btn-danger shadow-sm rounded-0"><span class="visually">Sale</span></span>
				<div class="text-wrap">
					<p class="title text-truncate">Great product name is here</p>
					<div class="price">RM17.00</div> <!-- price-wrap.// -->
				</div>
			</a>
		</div> --}}
		@forelse($products as $product)
		<div class="col-6 col-sm-6 col-md-4 col-lg-3">
			<a href="#" class="product-sm mb-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#productDetailModal_{{$product->id}}">
				<div class="img-wrap"> 
					@if(Storage::disk('public')->exists($product->image_url))
						<img src="{{ asset('storage/'.$product->image_url) }}">
					@else
						<img src="{{asset('images/items/item.jpg')}}">
					@endif	 
				</div>
				<div class="text-wrap">
					<p class="text-truncate fw-bold">{{$product->name}}</p>
					<div class="price">RM{{number_format($product->price ? $product->price : 0,2)}}</div> <!-- price-wrap.// -->
				</div>
			</a>
			<livewire:store.product.detail :product="$product" :wire:key="$product->id">
	    </div>
	    @empty
	    @endforelse
	   
	</div>
</div>
@push('scripts')
<script type="text/javascript">
      window.onscroll = function(ev) {
          if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
              window.livewire.emit('load-more');
          }
      };
</script>
@endpush