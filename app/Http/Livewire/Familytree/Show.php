<?php

namespace App\Http\Livewire\Familytree;

use Livewire\Component;
Use App\Models\Family;

class Show extends Component
{
    public $person;
    protected $listeners = ['showMember' => 'showDetailMember'];
    public $isModalOpen = 0;

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

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
