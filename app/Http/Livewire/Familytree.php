<?php

namespace App\Http\Livewire;

use Livewire\Component;
Use App\Models\Family;

class Familytree extends Component
{
    protected $listeners = ['familyChanges' => 'index'];
    public $isModalOpen = 0;
    
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    public function index()
    {
        $families = Family::with('childParents')
                    ->whereNull('parent_id')
                    ->whereNull('partner_id')
                    ->orderBy('created_at','desc')
                    ->get();

        return $families;
    }

    public function newRelatedMember($id)
    {
        $person = Family::find($id);
        $this->emit('newRelatedMember', $person);
    }

    public function show($id)
    {
        $this->emit('showMember', $id);
        $this->openModalPopover();
    }

    public function render()
    {
        return view('livewire.familytree', [
            'families' => $this->index(),
        ]);
    }
}
