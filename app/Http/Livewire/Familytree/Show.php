<?php

namespace App\Http\Livewire\Familytree;

use Livewire\Component;
Use App\Models\Family;

class Show extends Component
{
    public $person;
    protected $listeners = ['showMember' => 'showDetailMember'];

    public function showDetailMember($id)
    {
        $person = Family::find($id);
        $this->person = $person;
    }

    public function render()
    {
        return view('livewire.familytree.show');
    }
}
