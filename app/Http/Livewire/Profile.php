<?php

namespace App\Http\Livewire;
use Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
	use WithFileUploads;

	public $photo;

	public function index()
	{
		return Auth::user();
	}

	public function update()
	{
		$user = Auth::user();
		$user->image_url = $this->photo->store('product/photos','public');
		$user->save();
	}

    public function render()
    {
        return view('livewire.profile', [
            'user' => $this->index(),
        ]);
    }
}
