<?php

namespace App\Http\Livewire;
use App\Models\Product;

use Livewire\Component;

class Products extends Component
{
    public $keyword,$product_id = null;
    
    protected $listeners = ['productChanges' => 'index'];

    public function index()
    {
        $products = Product::orderBy('created_at','desc');

        $products = $products->when($this->keyword, function($query){
            $query->where('name','like','%'.$this->keyword.'%');
        });

        $products = $products->get();

        return $products;
    }

    public function render()
    {
        return view('livewire.products', [
            'products' => $this->index(),
        ]);
    }
}
