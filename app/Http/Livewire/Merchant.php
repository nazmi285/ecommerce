<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Merchant extends Component
{
    public $form,$photo;
    
    public function render()
    {
        return view('livewire.merchant');
    }
}
