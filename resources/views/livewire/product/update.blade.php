<div>
	<div wire:ignore.self class="modal fade p-0" id="updateModal_{{$product->id}}" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
			<form class="modal-content" wire:submit.prevent="update">
				<div class="modal-header">
					<h5 class="modal-title">Update Product</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					@if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
					<div class="form-group row justify-content-center">
						@if (isset($photo))
					        <div class="col-6 col-md-6 mb-3">
						        <img class="img-fluid float-start" src="{{ $photo->temporaryUrl() }}">
						    </div>
						@else
							<div class="col-6 col-md-6 mb-3">
								@if(!empty($product->image_url))
									@if(Storage::disk('public')->exists($product->image_url))
						        		<img class="img-fluid float-start" src="{{  asset('storage/'.$product->image_url) }}">
						        	@endif
						   		@endif
						    </div>
						   		{{-- <img src="{{ asset('images/items/item.jpg') }}"> --}}
					    @endif
						<div class="col-12 mb-3">
							<label for="photo">Photo </label>
							<input type="file" class="form-control text-primary" wire:model="photo" id="photo">
							@error('photo') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
						<div class="col-12 mb-3">
							<label for="name">Name</label>
							<input type="text" class="form-control text-primary" wire:model="name" placeholder="e.g.Cookies">
							@error('name') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
						<div class="col-12 mb-3">
							<label for="description">Description</label>
							<textarea class="form-control text-primary" wire:model="description" id="description" value="{{old('description')}}" rows="3"></textarea>
							@error('description') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
						<div class="col-12 mb-3">
							<label class="" for="price">Price</label>
							<div class="input-group">
								<span class="input-group-text bg-light" id="price">RM</span>
								<input type="text" class="form-control text-primary border-start-0  text-end format_money" wire:model="price" id="price" value="{{old('price')}}" oninput="validate(this)" placeholder="0.00" maxlength="7">
							</div>
							@error('description') <span class="text-danger">{{ $message }}</span> @enderror
							<div id="price" class="form-text">Set your price between RM2 and RM30000</div>
						</div>
						<div class="col-12 mb-3">
							<label for="promoable">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" wire:model="promoable" id="promoable" value="1">
									<label class="custom-control-label" for="promoable">Check this to set your promotional price</label>
								</div>
							</label>
							<div class="input-group" id="promo-field">
								<span class="input-group-text bg-light" id="promo_price">RM</span>
								<input type="text" class="form-control text-primary border-start-0 text-end format_money" wire:model="promo_price" id="promo_price" value="{{old('promo_price')}}" oninput="validate(this)" placeholder="0.00" maxlength="7">
							</div>
							@error('promo_price') <span class="text-danger">{{ $message }}</span> @enderror
							<div id="promo_price" class="form-text">Remain unchecked is product have no promotional price</div>
						</div>

						<div class="col-12 mb-3">
							<label for="quantity">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" wire:model="stockable" id="stockable" value="1">
									<label class="custom-control-label" for="stockable">Check this to manage stock</label>
								</div>
							</label>
							<input type="number" class="form-control text-primary text-end " wire:model="quantity" id="quantity" min="1" value="{{old('quantity')}}" placeholder="0">
							@error('quantity') <span class="text-danger">{{ $message }}</span> @enderror
							<div id="quantity" class="form-text">Default availability is Pre-Order</div>
						</div>

						<div class="col-12 mb-3">
							<label for="weight">Set product weight</label>
							<div class="input-group">
								<input type="number" class="form-control text-primary border-end-0" min="0.1" step="0.1" wire:model="weight" id="weight" value="{{old('weight')}}" placeholder="0" aria-describedby="weight">
								<span class="input-group-text bg-light" id="price">KG</span>
							</div>
							<div id="weight" class="form-text">Auto calculate delivery fee using EasyParcel.</div>
							<div id="weight" class="form-text">Manage delivery, go to Settings > <a href="{{url('/delivery')}}">Delivery</a></div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">
						<i class="fas fa-circle-notch fa-spin d-none mr-2" id="icon-processing"></i>
						Update
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
