<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Details extends Component
{
    public $order;

    public function mount($order)
    {
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.order.details', [
            'order' => $this->order,
        ]);
    }
}
