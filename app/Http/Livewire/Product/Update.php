<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Update extends Component
{
	public $product,$name,$description,$price,$promoable,$promo_price,$stockable,$quantity,$weight;


    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $this->product->name = $this->name;
        $this->product->description = $this->description;
        $this->product->price = $this->price;
        $this->product->save();

        $this->emit('productChanges');

        session()->flash('success', 'Product successfully updated.');

    }

	public function mount($product)
    {
    	$this->name = $product->name;
    	$this->description = $product->description;
    	$this->price = $product->price;
    	$this->promoable = $product->promoable;
    	$this->promo_price = $product->promo_price;
    	$this->stockable = $product->stockable;
    	$this->quantity = $product->quantity;
    	$this->weight = $product->weight;
    }

    public function render()
    {
        return view('livewire.product.update', [
            'product' => $this->product,
        ]);
    }
}
