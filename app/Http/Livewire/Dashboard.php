<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\Order;
use Livewire\Component;
use Carbon\Carbon;

class Dashboard extends Component
{       
    public $merchant;
    protected $listeners = ['newOrder' => 'index'];

	public function index()
    {
        $orders =   $this->merchant->orders->sortByDesc('created_at');
        $orders =   $orders->groupBy(function($val) {
                        return Carbon::parse($val->created_at)->format('Y-m-d');
                    });

        return $orders;
    }

    public function mount()
    {
        $this->merchant = Auth::user()->merchant->first();
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'orders' => $this->index(),
        ]);
    }
}
