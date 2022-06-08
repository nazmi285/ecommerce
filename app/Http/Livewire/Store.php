<?php

namespace App\Http\Livewire;
use Auth;
use App\Models\Product;
use Livewire\Component;

class Store extends Component
{
    public $perPage = 10;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore()
    {
        $this->perPage = $this->perPage + 3;
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        $this->cartItems = session()->get('cartItems');

        if(isset($this->cartItems[$id])){
            $this->cartItems[$id]['quantity']++;
            
            session()->put('cartItems',$this->cartItems);
        } else {
            $this->cartItems[$id]=[
                'quantity' => 1,
                'name' => $product->name,
                'price' => $product->price,
                'photo' => $product->image_url,
            ];
            session()->put('cartItems',$this->cartItems);
        }

        $this->emit('productAdded');
    }

    public function index()
    {
        return Product::orderBy('created_at','desc')->paginate($this->perPage);
    }
    
    public function render()
    {
        return view('livewire.store', [
            'products' => $this->index(),
        ]);
    }
}
