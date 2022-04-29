<?php

namespace App\Http\Livewire;
use Auth;
use App\Models\Product;
use Livewire\Component;

class Store extends Component
{
    public $showModal = false;
    public $count_cart = 0, $product_id;

     public function openModal()
     {
        dd("yes");
        $this->showModal = true;
        // $this->emit('show');
     }

    public function addCart()
    {
        dd("$id");
        $product = Product::find($product_id);
    }

    public function deleteCart()
    {
    }

    public function updateCart()
    {
    }
    public function close()
    {
        $this->showModal = false;
    }

	public function index()
    {
        $products = Product::orderBy('created_at','desc')->get();
        return $products;
    }
    
    public function render()
    {
        return view('livewire.store', [
            'products' => $this->index(),
        ]);
    }
}
