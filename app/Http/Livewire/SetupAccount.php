<?php

namespace App\Http\Livewire;
use App\Models\Member;
use Livewire\Component;

class SetupAccount extends Component
{
    public $mother_name;

    public function skip(){
        $user = Auth()->user();
        $user->is_activated = 'ACTIVE';
        $user->save();
        
        return redirect('home');
    }

    public function findMyMom(){
        $mothers = Member::all();
        return $mothers;
    }

    public function render()
    {
        return view('livewire.setup-account', [
            'mothers' => $this->findMyMom(),
        ]);
    }
}
