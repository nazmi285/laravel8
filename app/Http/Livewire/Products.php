<?php

namespace App\Http\Livewire;
use App\Models\Product;

use Livewire\Component;

class Products extends Component
{
    public $keyword;
    public $openModal = false;
    public $product_id, $name, $description, $price, $promoable, $promo_price, $stockable, $quantity, $weight;
    
    protected $listeners = ['productChanges' => 'index'];

    public function index()
    {
        $products = Product::orderBy('created_at','desc');

        $products = $products->when($this->keyword, function($query){
            $query->where('name','like','%'.$this->keyword.'%');
        });

        $products = $products->get();

        return $products;
    }

    public function edit($id)
    {
        // dd($id);
        $this->openModal = true;

        $product = Product::where('id',$id)->first();
        $this->product_id = $id;
        $this->name = $product->name;
        $this->description = $product->description;
    }

    public function render()
    {
        return view('livewire.products', [
            'products' => $this->index(),
        ]);
    }
}
