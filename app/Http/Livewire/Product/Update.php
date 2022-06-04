<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

	public $product,$name,$description,$price,$promoable=false,$promo_price,$stockable=false,$quantity,$weight,$photo;

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        if($this->photo){
            $photo_url = $this->photo->store('photos','public');
            $this->product->image_url = isset($photo_url)?$photo_url:null;
        }

        if($this->promoable){
            $this->product->promo_price = $this->promo_price;
        }else{
            $this->product->promo_price = null;
        }

        if($this->stockable){
            $this->product->stockable = true;
            $this->product->quantity = $this->quantity;
        }else{
            $this->product->stockable = false;
            $this->product->quantity = null;
        }

        $this->product->name = $this->name;
        $this->product->description = $this->description;
        $this->product->price = $this->price;
        $this->product->weight = $this->weight;
        $this->product->save();

        $this->emit('productChanges');

        session()->flash('success', 'Product successfully updated.');

    }

	public function mount($product)
    {
    	$this->name = $product->name;
    	$this->description = $product->description;
    	$this->price = $product->price;
        if($product->promo_price){
            $this->promoable = true; 
        }
    	$this->promo_price = $product->promo_price;
        if($product->stockable){
            $this->stockable = true; 
        }
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
