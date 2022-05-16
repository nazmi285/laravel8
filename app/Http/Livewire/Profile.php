<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

	public $image_url,$state = [],$photo,$user,$image;

    public function mount(){
        $this->user = Auth()->user();
        $this->state = $this->user->attributesToArray();
    }

    public function store()
    {
        $validatedData = Validator::make($this->state, [
            'name' => 'required|max:12',
        ])->validate();

        $this->user->name = $this->state['name'];
        $this->user->save();

        session()->flash('success', 'User updated successfully.');
    }
    
    public function changePassword()
    {
        $validatedData = Validator::make($this->state, [
            'current_password' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ])->validate();

        if (!\Hash::check($this->state['current_password'], $this->user->password)) {
            $this->addError('current_password', 'The provided password does not match your current password.');
        }else{
            $this->user->password = \Hash::make($this->state['password']);
            $this->user->save();

            session()->flash('success', 'Password updated successfully.');
        }
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
