<?php

namespace App\Http\Livewire;
use App\Models\Bill;
use App\Models\Order;
use App\Models\Payment;
use Livewire\Component;

class Setting extends Component
{
	public $order_no,$price,$bill_no,$bill_price;

	public function store()
    {
        $this->validate([
            'order_no'  => 'required',
            'price'     => 'required',
        ]);

        $order = new Order;
        $order->order_no = $this->order_no;
        $order->amount = $this->price;
        $order->status = 'New';
        $order->save();

        $payment = Payment::paymentNo();
        $payment->title = 'Order Title';
        $payment->description = 'Order Description';
        $payment->amount = $order->amount;
        $payment->status = 'New';

        $order->payments()->save($payment);



        // $this->emit('updateOrder'); // untuk tujuan event. --->to listener
    }

    public function store2()
    {
        $this->validate([
            'bill_no'       => 'required',
            'bill_price'    => 'required',
        ]);

        $bill = new Bill;
        $bill->bill_no = $this->bill_no;
        $bill->amount = $this->bill_price;
        $bill->status = 'New';
        $bill->save();

        $payment = Payment::paymentNo();
        $payment->title = 'Bill Title';
        $payment->description = 'Bill Description';
        $payment->amount = $bill->amount;
        $payment->status = 'New';

        $bill->payments()->save($payment);


    }

    public function render()
    {
        return view('livewire.setting');
    }
}