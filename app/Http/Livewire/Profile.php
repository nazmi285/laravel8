<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

	public $image_url,$name;
    public User $user;

	public function index()
	{
		$this->user = Auth::user();
		return $this->user;
	}


	public function store()
    {
        $this->user->name = $user->name;
        $this->user->save();

        return $this->user;
    }
    

    public function render()
    {
        return view('livewire.profile', [
            'user' => $this->index(),
        ]);
    }
}
