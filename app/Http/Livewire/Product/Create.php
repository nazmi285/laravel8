<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Create extends Component
{
	public $name,$description,$price,$promoable,$promo_price,$stockable,$quantity,$weight;

	public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'promo_price' => 'required',
            'stockable' => 'required',
            'quantity' => 'required',
            'weight' => 'required',
        ]);

        $product = Product::productNo();
        $product->name = $this->name;
        $product->description = $this->description;
        $product->save();
        
        return $product;

        session()->flash('success', 'New product successfully added.');
    }

    public function render()
    {
        return view('livewire.product.create');
    }
}
