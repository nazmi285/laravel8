<?php

namespace App\Http\Livewire;
use App\Models\Order;
use Livewire\Component;

class Dashboard extends Component
{
	// protected $listeners = ['updateOrder' => 'render']; // untuk tujuan listener. <---from event

	public function index()
    {
        $orders = Order::all();
        // $this->dispatchBrowserEvent('order-updated');
        return $orders;
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'orders' => $this->index(),
        ]);
    }
}
