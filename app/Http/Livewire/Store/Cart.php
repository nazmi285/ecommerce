<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;

class Cart extends Component
{
    public $count_cart = 0,$cartItems=[];

    public function mount()
    {
        if(session()->has('cartItems')){
            $this->cartItems = session()->get('cartItems');
        }
    }

    public function deleteFromCart($id)
    {
        unset($this->cartItems[$id]);
        session()->put('cartItems', $this->cartItems);

        $this->emit('productAdded');    
    }

    public function render()
    {
        return view('livewire.store.cart');
    }
}
