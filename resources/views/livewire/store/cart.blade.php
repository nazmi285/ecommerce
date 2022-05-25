<div>
    
            
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
    <section class="section-products">
        @forelse($cartItems as $key => $item)
        <figure class="itemside item-cart">
            <div class="aside"><img src="{{asset('images/items/item.jpg')}}" class="rounded img-md"></div>
            <figcaption class="info">
                <div class="fw-bold">Great product name</div>
                <span class="price">RM44.20</span>
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
          
</div>
