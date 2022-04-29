<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

	public $image_url,$name;

	public function index()
	{
		$user = Auth::user();
		$name =  $user->name;
		return $user;
	}


	public function store()
    {
        $this->image_url->store('image_url');
        
        $user = Auth::user();
        $user->name = $this->name;
        // $user->image_url = $this->image_url;
        $user->save();
    }
    

    public function render()
    {
        return view('livewire.profile', [
            'user' => $this->index(),
        ]);
    }
}
