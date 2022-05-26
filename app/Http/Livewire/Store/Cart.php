<?php

namespace App\Http\Livewire\Store;

use App\Models\Order;
use App\Models\Payment;
use Livewire\Component;

class Cart extends Component
{
    public $count_cart = 0,$cartItems=[];

    protected $listeners = ['refreshComponent' => '$refresh'];

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

    public function clearCart()
    {
        session()->forget('cartItems');  

        $this->cartItems = []; 

        $this->emit('productAdded');
    }

    public function confirmOrder()
    {
        $quantity = array_sum(array_column($this->cartItems, 'quantity'));
        // $total = array_sum(array_column($this->cartItems, 'total_amount'));
        
        $order = Order::orderNo();
        $order->amount = 100;
        $order->status = 'New';
        $order->quantity = $quantity;
        $order->save();

        $payment = Payment::paymentNo();
        $payment->title = 'Order Title';
        $payment->description = 'Order Description';
        $payment->amount = $order->amount;
        $payment->status = 'New';

        $order->payments()->save($payment);

        session()->flash('success', 'Your order has been confirm. Please wait..');
        
        $this->emit('newOrder');  
    }

    public function render()
    {
        return view('livewire.store.cart');
    }
}
