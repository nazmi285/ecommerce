<?php

namespace App\Http\Livewire;
use Auth;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class Profile extends Component
{
	use WithFileUploads;

	public $photo,$user,$form=[];

	public function mount(){
		$this->user = Auth()->user();
		$this->form['name'] = $this->user->name;
	}

	public function update()
	{
		$this->user = Auth::user();
		// $this->user->image_url = $this->photo->store('product/photos','public');
		$this->user->name = $this->form['name'];
		$this->user->save();
	}

	public function changePassword()
    {
        $validatedData = Validator::make($this->form, [
            'current_password' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ])->validate();

        if (!\Hash::check($this->form['current_password'], $this->user->password)) {
            $this->addError('current_password', 'The provided password does not match your current password.');
        }else{
            $this->user->password = \Hash::make($this->form['password']);
            $this->user->save();

            session()->flash('success', 'Password updated successfully.');
        }
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
