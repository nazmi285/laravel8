<?php

namespace App\Http\Livewire;
use App\Models\Product;

use Livewire\Component;

class Products extends Component
{
	public function index()
    {
        $products = Product::orderBy('created_at','desc')->get();
        return $products;
    }

    public function render()
    {
        return view('livewire.products', [
            'products' => $this->index(),
        ]);
    }
}
