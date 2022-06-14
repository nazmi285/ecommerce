<?php

namespace App\Http\Livewire;
use Auth;
use App\Models\User;
use App\Models\Merchant;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class Company extends Component
{
    use WithFileUploads;

    public $form,$photo;

    public function update()
    {

        $this->user->image_url = $this->photo->store('product/photos','public');
        $merchant = Auth::user()->merchants()->first();
        $merchant->name = $this->form['name'];
        if($merchant->save()){
            // Auth::user()->merchants()->attach($merchant->id);
        }
    }

    public function mount()
    {
        $merchant = Auth::user()->merchants->first();
        $this->form = ([
            'name'=>$merchant->name,
            'email'=>$merchant->email,
            'contact_no'=>$merchant->contact_no,
            'address'=>$merchant->address,
            'city'=>$merchant->city,
            'postcode'=>$merchant->postcode,
            'state'=>$merchant->state,
            'country'=>$merchant->country,
        ]);
    }

    public function render()
    {
        return view('livewire.company');
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        ]);
    }
}
