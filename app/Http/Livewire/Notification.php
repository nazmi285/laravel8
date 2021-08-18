<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Events\PublicNotification;

class Notification extends Component
{
	public $stringtest = "test";


	public function notify(){
		$this->stringtest = "ok";
		event(new PublicNotification('hello world'));
	}
    public function render()
    {
        return view('livewire.notification');
    }
}
