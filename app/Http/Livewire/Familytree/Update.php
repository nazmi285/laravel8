<?php

namespace App\Http\Livewire\Familytree;

use Livewire\Component;

class Update extends Component
{
    public $person;

    protected $listeners = ['updatingMember' => 'updateMember'];

    public function updateMember($person)
    {
        $this->person = $person;
    }

    public function render()
    {
        return view('livewire.familytree.update');
    }
}
