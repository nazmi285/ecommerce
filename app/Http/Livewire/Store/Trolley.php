<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;

class Trolley extends Component
{
    public $count_cart = 0;

    protected $listeners = ['productAdded' => 'countCart'];

    public function mount()
    {
        if(session()->has('cartItems')){
            $this->count_cart = count(session()->get('cartItems'));
        }
    }

    public function countCart()
    {
        $this->count_cart = count(session()->get('cartItems'));
        // $this->count_cart = session()->get('count_cart');
    }
    
    public function render()
    {
        return view('livewire.store.trolley');
    }
}
