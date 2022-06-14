<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;

class Members extends Component
{
    public function index()
    {
        $merchant = Auth::user()->merchants->first();
        $users = $merchant->users;
        return $users;
    }

    public function render()
    {
        return view('livewire.members', [
            'users' => $this->index(),
        ]);
    }
}
