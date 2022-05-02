<?php

namespace App\Http\Livewire\Familytree;

use Livewire\Component;
Use App\Models\Family;

class Show extends Component
{
    public $member,$gender='male';
    
    protected $listeners = ['showMember'=>'show'];

    public function mount() {

    }

    public function show($id) {
        $member = Family::where('id',$id)->first();
        $this->member = $member;
        $this->member->short_name = $member->short_name;
    }

    public function render()
    {
        return view('livewire.familytree.show');
    }
}
