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
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"> Select All </label>
        </div>
        <button type="button" onclick="confirm('Are you sure');" class="mr-2 btn btn-light" wire:click="clearCart"><i class="fa fa-trash me-2"></i><label class="form-check-label"> Delete All </label></button>
    </div>
    <section class="section-products">
        @forelse($cartItems as $key => $item)
        <figure class="itemside item-cart">
            <div class="aside position-relative">
                <div class="position-absolute top-0 start-0">
                    <input class="form-check-input ms-1 mt-1 " type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
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

    <div class="col-12">
        <button type="submit" class="w-100 btn btn-primary btn-lg" wire:click="confirmOrder()">Confirm Order</button>
    </div>

    <div class="position-absolute top-50 start-50 translate-middle" wire:loading>
        <div class="spinner-border text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
          
</div>
