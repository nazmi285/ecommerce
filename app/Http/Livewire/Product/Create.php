<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Create extends Component
{
	public $form;

	public function store()
    {
        $validatedData = $this->validate([
            'form.name' => 'required',
            'form.description' => 'required',
            'form.price' => 'required',
            'form.promo_price' => '',
            // 'form.stockable' => '',
            'form.quantity' => '',
            'form.weight' => '',
        ]);

        $product = Product::productNo();
        $product->name = $this->form['name'];
        $product->description = $this->form['description'];
        $product->price = $this->form['price'];
        $product->promo_price = $this->form['promo_price'];
        // $product->stockable = $this->form['stockable'];
        $product->save();

        session()->flash('success', 'New product successfully added.');
        
        // return $product;
        $this->emit('productChanges');
        // $this->dispatchBrowserEvent('productCreated');
    }

    public function render()
    {
        return view('livewire.product.create');
    }
}
