<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif    
    {{-- <ol class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-start bg-transparent">
            <img src="{{asset('images/items/item.jpg')}}" class="rounded img-md">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Great product name</div>
                <span>RM120.50</span>
            </div>
            <span class="badge bg-primary rounded-pill">14</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start bg-transparent">
            <img src="{{asset('images/items/item.jpg')}}" class="rounded img-md">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Wonderful item goes here</div>
                <span>RM120.50</span>
            </div>
            <span class="badge bg-primary rounded-pill">14</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start bg-transparent">
            <img src="{{asset('images/items/item.jpg')}}" class="rounded img-md">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Another product name</div>
                <span>RM120.50</span>
            </div>
            <span class="badge bg-primary rounded-pill">14</span>
        </li>
    </ol> --}}
    <div class="col d-flex justify-content-between mb-3">
        <div class="form-check ms-1 mt-1">
          <input class="form-check-input" type="checkbox" wire:model="selectAll" id="selectAllItem">
          <label class="form-check-label" for="selectAllItem"> Select All </label>
        </div>
        <button type="button" onclick="confirm('Are you sure');" class="mr-2 btn btn-light" wire:click="clearCart"><i class="fa fa-trash me-2"></i><label class="form-check-label"> Delete All </label></button>
    </div>
    <section class="section-products mb-3 border-bottom">
        @forelse($cartItems as $key => $item)
        <figure class="itemside item-cart">
            <div class="aside position-relative">
                <div class="position-absolute top-0 start-0">
                    <input class="form-check-input ms-1 mt-1 " type="checkbox" wire:model="selectItem" value="{{$key}}">
                </div>
                @if(Storage::disk('public')->exists($item['photo']))
                    <img src="{{ asset('storage/'.$item['photo']) }}" class="rounded img-md">
                @else
                    <img src="{{asset('images/items/item.jpg')}}" class="rounded img-md">
                @endif  
                {{-- <img src="{{asset('images/items/item.jpg')}}" class="rounded img-md"> --}}
            </div>
            <figcaption class="info">
                <div class="fw-bold">{{ $item['name'] }}</div>
                <span class="price">RM{{ number_format($item['price'],2) }}</span>
                <div class="form-inline mt-2">
                    <button type="button" onclick="confirm('Are you sure');" class="mr-2 btn-sm btn btn-light" wire:click="deleteFromCart({{$key}})"> <i class="fa fa-trash"></i>  Delete </button>
                    {{-- <a href="#" onclick="confirm('Are you sure');" class="mr-2 btn-sm btn btn-light"> <i class="fa fa-trash"></i>  Delete </a>
                    <div>
                        <select class="custom-select custom-select-sm">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div> --}}
                </div>
            </figcaption>
        </figure>
        @empty
        @endforelse
    </section> 
    <section class="section-customer">
        <div class="row">
            <div class="col-12 col-md-12 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="anonymous">
                    <label class="form-check-label" for="anonymous">
                        Remain Anonymous
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="contact_no" class="form-label">Contact No.</label>
                <input type="text" class="form-control" id="contact_no">
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="col-12 col-md-12 mb-3">
                <label for="note" class="form-label">Note</label>
                <textarea class="form-control" id="note" rows="3"></textarea>
            </div>
        </div>
    </section>
    <section class="section-payment">
        <div class="card rounded-3 mb-2">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="payment_method_1" value="1">
                    <label class="form-check-label" for="payment_method_1">
                        Billplz
                    </label>
                </div>
            </div>
        </div>
        <div class="card rounded-3 mb-2">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="payment_method_2" value="2">
                    <label class="form-check-label" for="payment_method_2">
                        Toyyibpay
                    </label>
                </div>
            </div>
        </div>
        <div class="card rounded-3 mb-2">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="payment_method_3" value="3">
                    <label class="form-check-label" for="payment_method_3">
                        Duit Now
                    </label>
                </div>
            </div>
        </div>
        <div class="card rounded-3 mb-2">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="payment_method_4" value="4">
                    <label class="form-check-label" for="payment_method_4">
                        Online Transfer
                    </label>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="w-100 btn btn-primary btn-lg" wire:click="confirmOrder()">Pay {{number_format($total,2)}}</button>
            </div>
        </div>
    </section>
    <div class="position-absolute top-50 start-50 translate-middle" wire:loading>
        <div class="spinner-border text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
          
</div>
