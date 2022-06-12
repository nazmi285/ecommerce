<div>
    @section('title')
        <h4 class="fw-bold p-2 mb-0">Company</h4>
    @endsection

    <div class="row justify-content-center">
        <div class="col-12 col-md-8 mb-3">
            
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <h4>Company Profile</h4>
                                <p>Update your company's profile information.</p>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <form wire:submit.prevent="update">
                                    <div class="mb-3">
                                        @if (isset($photo))
                                            <img class="img-fluid " src="{{ $photo->temporaryUrl() }}" width="78px" alt="...">
                                        @else
                                            @if(isset($merchant->image_url))
                                                <img class="img-fluid" src="{{asset('storage/'.$user->image_url)}}" width="78px" alt="...">
                                            @else
                                                <img class="img-fluid" src="https://github.com/mdo.png" width="78px" alt="...">
                                            @endif
                                        @endif
                                        <input type="file" class="form-control mt-3" wire:model="photo" id="photo">
                                        @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Company Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="form.name" id="name">
                                        @error('name') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Company Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" wire:model="form.email" id="email">
                                        @error('email') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact_no" class="form-label">Company Contact No.</label>
                                        <input type="text" class="form-control @error('contact_no') is-invalid @enderror" wire:model="form.contact_no" id="contact_no">
                                        @error('contact_no') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="address_1" class="form-label">Company Address</label>
                                        <textarea class="form-control mb-3 @error('address_1') is-invalid @enderror" rows="3" wire:model="form.address_1" id="address_1"></textarea>
                                        @error('address_1') <span class="error">{{ $message }}</span> @enderror

                                        {{-- <input type="text" class="form-control mb-3 @error('address_1') is-invalid @enderror" wire:model="form.address_1" id="address_1" placeholder="Address 1"> --}}

                                        {{-- <input type="text" class="form-control mb-3" wire:model="form.address_2" id="address_2" placeholder="Address 2">

                                        <input type="text" class="form-control mb-3" wire:model="form.address_3" id="address_3" placeholder="Address 3"> --}}

                                        <input type="number" class="form-control mb-3 @error('postcode') is-invalid @enderror" wire:model="form.postcode" id="postcode" placeholder="Postcode">

                                        <input type="text" class="form-control mb-3 @error('city') is-invalid @enderror" wire:model="form.city" id="city" placeholder="City">

                                        <input type="text" class="form-control mb-3 @error('state') is-invalid @enderror" wire:model="form.state" id="state" placeholder="State">

                                        <input type="text" class="form-control mb-3 @error('country') is-invalid @enderror" wire:model="form.country" id="country" placeholder="Country">

                                    </div>
                                    <button type="submit" class="btn btn-primary float-end">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
