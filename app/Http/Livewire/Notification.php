<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Events\PublicNotification;

class Notification extends Component
{
	public function notify(){
		event(new PublicNotification('hello world'));
	}
    public function render()
    {
        return view('livewire.notification');
    }
}
