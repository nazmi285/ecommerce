<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $keyword,$product_id = null,$merchant;
    
    protected $listeners = ['productChanges' => 'index'];

    public function index()
    {
        $products = Product::where('merchant_id',$this->merchant->id)->orderBy('created_at','desc');

        $products->when($this->keyword, function($query){
            $query->where('name','like','%'.$this->keyword.'%');
        });

        $products = $products->get();

        return $products;
    }

    public function mount()
    {
        $this->merchant = Auth::user()->merchant->first();
    }

    public function render()
    {
        return view('livewire.products', [
            'products' => $this->index(),
        ]);
    }
}
