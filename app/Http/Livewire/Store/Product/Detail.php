<?php

namespace App\Http\Livewire\Store\Product;

use Livewire\Component;

class Detail extends Component
{
    public $product,$name,$description,$price,$promoable,$promo_price,$stockable,$quantity,$weight,$count_cart;

    public function mount($product)
    {
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->promoable = $product->promoable;
        $this->promo_price = $product->promo_price;
        $this->stockable = $product->stockable;
        $this->quantity = $product->quantity;
        $this->weight = $product->weight;
    }

    public function addToCart()
    {
        if(session()->has('count_cart')){
            $count = session()->get('count_cart')+1;
            session()->put('count_cart',$count);
        }else{
            session()->put('count_cart',1);
        }

        $this->emit('productAdded');
    }

    public function render()
    {
        return view('livewire.store.product.detail', [
            'product' => $this->product,
        ]);
    }
}
