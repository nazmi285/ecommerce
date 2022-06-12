<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

	public $form = [
        'promoable'=>false,
        'stockable'=>false,
        'mode'=>'STANDART',
        'partial_payment'=>false,
    ],$hello;

    public function updatedPhoto()
    {
        $this->validate([
            'form.photo' => 'image|max:1024',
        ]);
    }
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

        $photo_url = $this->form['photo']->store('product/photos','public');

        $product = Product::productNo();
        $product->image_url = isset($photo_url)?$photo_url:null;
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
