
<div>
	<div class="row">

		
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
			<style>
				@media only screen and (min-device-width: 736px) {
					/*.modal-dialog:hover {
					  overflow-y: scroll;
					}*/
					/* width */
					::-webkit-scrollbar {
					  width: 8px;
					  height: 8px;
					}

					/* Track */
					::-webkit-scrollbar-track {
					  background: #f1f1f1;
					}

					/* Handle */
					::-webkit-scrollbar-thumb {
					  background: #888;
					}

					/* Handle on hover */
					::-webkit-scrollbar-thumb:hover {
					  background: #555;
					}
				}
			</style>

			@forelse($products as $product)
				<div class="col-6 col-sm-6 col-md-4 col-lg-3">
				<a class="product-sm mb-3 text-decoration-none">
					<div class="img-wrap" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#productDetailModal_{{$product->id}}"> 
						@if(Storage::disk('public')->exists($product->image_url))
							<img src="{{ asset('storage/'.$product->image_url) }}">
						@else
							<img src="{{asset('images/items/item.jpg')}}">
						@endif	 
					</div>
					<div class="text-wrap d-flex justify-content-between">
						<div class="w-75">
							<p class="text-truncate fw-bold text-dark">{{$product->name}}</p>
							<div class="price">RM{{number_format($product->price ? $product->price : 0,2)}}</div>
						</div>
						<button type="button" class="btn btn-circle btn-sm btn-outline-primary shadow-sm float-end mt-2" wire:click="addToCart({{$product->id}})"><i class="fa fa-plus" aria-hidden="true"></i></button>
					</div>
				</a>
				<livewire:store.product.detail :product="$product" :wire:key="$product->id">
		    </div>
	    @empty
	    @endforelse
	   
	</div>
</div>
@push('scripts')
    <script>
          var scrollSpy = new bootstrap.ScrollSpy(document.body, {
target: '#navbar-example2'
})
    </script>
<script type="text/javascript">
      window.onscroll = function(ev) {
          if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
              window.livewire.emit('load-more');
          }
      };
</script>
@endpush