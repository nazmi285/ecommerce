<?php

namespace App\Http\Livewire;
use Auth;
use App\Models\Product;
use Livewire\Component;

class Store extends Component
{
    public $perPage = 10;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore()
    {
        $this->perPage = $this->perPage + 3;
    }

    public function index()
    {
        return Product::orderBy('created_at','desc')->paginate($this->perPage);
    }
    
    public function render()
    {
        return view('livewire.store', [
            'products' => $this->index(),
        ]);
    }
}
