<?php

namespace App\Http\Livewire\Store\Product;

use App\Models\Product;
use Livewire\Component;

class Detail extends Component
{
    public $product,$name,$description,$price,$promoable,$promo_price,$stockable,$quantity,$weight,$count_cart,$cartItems=[];

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

    public function addToCart($id)
    {
        // if(session()->has('count_cart')){
        //     $count = session()->get('count_cart')+1;
        //     session()->put('count_cart',$count);
        // }else{
        //     session()->put('count_cart',1);
        // }

        // session()->forget('cartItems');
        // dd(session()->get('cartItems'),$id);
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

    public function render()
    {
        return view('livewire.store.product.detail', [
            'product' => $this->product,
        ]);
    }
}
