<?php

namespace App\Http\Livewire;
use Auth;
use Livewire\Component;

class Profile extends Component
{

	public function index()
	{
		$user = Auth::user();

		return $user;
	}



    

    public function render()
    {
        return view('livewire.profile', [
            'user' => $this->index(),
        ]);
    }
}
