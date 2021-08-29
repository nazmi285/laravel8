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
        // session()->flash('success', 'New product successfully added.');
        
        // return $product;
    }

	public function mount($product)
    {
    	$this->product = Product::find($product->id);
    	$this->name = $this->product->name;
    	$this->description = $this->product->description;
    	$this->price = $this->product->price;
    	$this->promoable = $this->product->promoable;
    	$this->promo_price = $this->product->promo_price;
    	$this->stockable = $this->product->stockable;
    	$this->quantity = $this->product->quantity;
    	$this->weight = $this->product->weight;
        // $this->product = Product::find($product_id);
    }

    public function render()
    {
        return view('livewire.product.update', [
            'product' => $this->product,
        ]);
    }
}
