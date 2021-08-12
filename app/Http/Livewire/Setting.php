<?php

namespace App\Http\Livewire;
use App\Models\Order;
use Livewire\Component;

class Setting extends Component
{
	public $order_no;

	public function store()
    {
        $this->validate([
            'order_no' => 'required',
        ]);

        $order = new Order;
        $order->order_no = $this->order_no;
        $order->save();

        // $this->emit('updateOrder'); // untuk tujuan event. --->to listener
    }

    public function render()
    {
        return view('livewire.setting');
    }
}