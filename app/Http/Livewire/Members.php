<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;

class Members extends Component
{
    public $keyword;

    public function index()
    {
        $merchant = Auth::user()->merchants->first();
        $users = $merchant->users->load('roles');
        if($this->keyword){
            $users = $users->where('name','like','%'.$this->keyword.'%');
        }

        return $users;
    }

    public function render()
    {
        return view('livewire.members', [
            'users' => $this->index(),
        ]);
    }
}
