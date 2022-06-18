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

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        ]);
    }

    public function update()
    {
        if($this->photo){
            $image_url = $this->photo->store('product/photos','public');
        }

        $merchant = Auth::user()->merchants()->first();
        $merchant->name = $this->form['name'];
        $merchant->email = $this->form['email'];
        $merchant->contact_no = $this->form['contact_no'];
        $merchant->address = $this->form['address'];
        $merchant->city = $this->form['city'];
        $merchant->postcode = $this->form['postcode'];
        $merchant->state = $this->form['state'];
        $merchant->country = $this->form['country'];
        $merchant->image_url = isset($image_url)?$image_url:null;
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
            'image_url'=>$merchant->image_url,
        ]);
    }

    public function render()
    {
        return view('livewire.company');
    }
}
