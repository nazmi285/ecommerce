<?php

namespace App\Http\Livewire;
use Auth;
use App\Models\Product;
use Livewire\Component;

class Store extends Component
{
    public $count_cart = 0;


	public function index()
    {
        $products = Product::orderBy('created_at','desc')->get();
        return $products;
    }
    
    public function render()
    {
        return view('livewire.store', [
            'products' => $this->index(),
        ]);
    }
}
