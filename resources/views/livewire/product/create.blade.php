<div>
	<div wire:ignore.self class="modal fade p-0" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
			<form class="modal-content" wire:submit.prevent="store">
				<div class="modal-header">
					<h5 class="modal-title">Create New Product</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					@if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

					<div class="form-group row justify-content-center">
						@if (isset($form['photo']))
					        <div class="col-4 float-start mb-3">
						        <img class="img-fluid" src="{{ $form['photo']->temporaryUrl() }}">
						    </div>
						@else
							<div class="col-4 float-start mb-3">
						        <img class="img-fluid" src="{{ asset('images/items/item.jpg') }}">
						    </div>
					    @endif
						<div class="col-12 mb-3">
							<label for="photo">Photo</label>
							<input type="file" class="form-control text-primary" wire:model="form.photo" id="photo">
							@error('form.photo') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
						<div class="col-12 mb-3">
							<label for="name">Name</label>
							<input type="text" class="form-control text-primary" wire:model="form.name" id="name" value="{{old('name')}}" placeholder="e.g.Cookies">
							@error('name') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
						<div class="col-12 mb-3">
							<label for="description">Description</label>
							<textarea class="form-control text-primary" wire:model="form.description" id="description" value="{{old('description')}}" rows="3"></textarea>
							@error('description') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
						<nav>
							<ul class="nav nav-justified nav-underline border-bottom">
								<li class="nav-item">
									<a wire:click="$set('form.mode', 'STANDART')" class="nav-link {{$form['mode']=='STANDART'?'active':''}}" id="nav-standart-tab" data-bs-toggle="tab" data-bs-target="#nav-standart" type="button" role="tab" aria-controls="nav-standart" aria-selected="true">Standart</a>
								</li>
								<li class="nav-item">
									<a wire:click="$set('form.mode', 'VARIATION')" class="nav-link {{$form['mode']=='VARIATION'?'active':''}}" id="nav-variation-tab" data-bs-toggle="tab" data-bs-target="#nav-variation" type="button" role="tab" aria-controls="nav-variation" aria-selected="false">Variation</a>
								</li>
							</ul>
						</nav>
						
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade {{$form['mode']=='STANDART'?'show active':''}} pt-3" id="nav-standart" role="tabpanel" aria-labelledby="nav-standart-tab">
								<div class="col-12 mb-3">
									<label class="" for="price">Price</label>
									<div class="input-group">
										<span class="input-group-text bg-light" id="price">RM</span>
										<input type="text" class="form-control text-primary border-start-0  text-end format_money" wire:model="form.price" id="price" value="{{old('price')}}" oninput="validate(this)" placeholder="0.00" maxlength="7">
									</div>
									@error('description') <span class="text-danger">{{ $message }}</span> @enderror
									<div id="price" class="form-text">Set your price between RM2 and RM30000</div>
								</div>

								<div class="col-12 mb-3">
									<label for="promoable">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" wire:model="form.promoable" id="promoable" value="1">
											<label class="custom-control-label" for="promoable">Check this to set your promotional price</label>
										</div>
									</label>

									<div class="input-group {{$form['promoable']?'':'d-none'}}" id="promo-field">
										<span class="input-group-text bg-light" id="promo_price">RM</span>
										<input type="text" class="form-control text-primary border-start-0 text-end format_money" wire:model="form.promo_price" id="promo_price" value="{{old('promo_price')}}" oninput="validate(this)" placeholder="0.00" maxlength="7">
									</div>
									@error('promo_price') <span class="text-danger">{{ $message }}</span> @enderror
									<div id="promo_price" class="form-text">Remain unchecked is product have no promotional price</div>
								</div>

								<div class="col-12 mb-3">
									<label for="quantity">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" wire:model="form.stockable" id="stockable" value="1">
											<label class="custom-control-label" for="stockable">Check this to manage stock</label>
										</div>
									</label>
									<input type="number" class="form-control text-primary text-end {{$form['stockable']?'':'d-none'}}" wire:model="form.quantity" id="quantity" min="1" value="{{old('quantity')}}" placeholder="0">
									@error('quantity') <span class="text-danger">{{ $message }}</span> @enderror
									<div id="quantity" class="form-text">Default availability is Pre-Order</div>
								</div>
								<div class="col-12 mb-3">
									<label for="weight">Set product weight</label>
									<div class="input-group">
										<input type="number" class="form-control text-primary border-end-0" min="0.1" step="0.1" wire:model="form.weight" id="weight" value="{{old('weight')}}" placeholder="0" aria-describedby="weight">
										<span class="input-group-text bg-light" id="price">KG</span>
									</div>
									<div id="weight" class="form-text">Auto calculate delivery fee using EasyParcel.</div>
									<div id="weight" class="form-text">Manage delivery, go to Settings > <a href="{{url('/delivery')}}">Delivery</a></div>
								</div>
							</div>
							<div class="tab-pane  {{$form['mode']=='VARIATION'?'show active':''}} pt-3" id="nav-variation" role="tabpanel" aria-labelledby="nav-variation-tab">
								<div class="col-12 col-sm-12 col-md-12 mb-3 py-5">
									<div class="d-grid gap-2">
										<button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<i class="fa-solid fa-plus"></i>
										Create Variation
									</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content shadow-lg">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Create Variations</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									sasa
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">
						<i class="fas fa-circle-notch fa-spin d-none mr-2" id="icon-processing"></i>
						Save
					</button>
				</div>
			</form>
		</div>
	</div>

	<script>
	 	window.livewire.on('productCreated' => {
	     	$('#createModal').modal('hide');
		 })
	</script>
</div>
