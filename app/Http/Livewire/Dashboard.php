<?php

namespace App\Http\Livewire;
use Auth;
// use App\Models\Order;
Use App\Models\Family;

use Livewire\Component;
use Carbon\Carbon;

class Dashboard extends Component
{       
	// public function index()
 //    {
 //        $orders = Order::orderBy('created_at','desc')->get();
 //        $orders =   $orders->groupBy(function($val) {
 //                        return Carbon::parse($val->created_at)->format('Y-m-d');
 //                    });
 //        // dd($orders);
 //        // foreach ($orders as $key => $value) {
 //        //     dd($key,$value);
 //        // }
 //        return $orders;
 //    }
    public function index()
    {
        $families = Family::with('childParents')
                    // ->where('user_id',Auth::id())
                    ->orderBy('created_at','desc')
                    ->get();

        return $families;
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'families' => $this->index(),
        ]);
    }
}
