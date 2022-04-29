<?php

namespace App\Http\Livewire;
use Auth;
use Livewire\Component;

class Profile extends Component
{
	public $image_url,$name;

	public function index()
	{
		$user = Auth::user();
		$name =  $user->name;
		return $user;
	}


	public function store()
    {
        $user = Auth::user();
        $user->name = $this->name;
        $user->image_url = $this->image_url;
        $user->save();
    }
    

    public function render()
    {
        return view('livewire.profile', [
            'user' => $this->index(),
        ]);
    }
}
