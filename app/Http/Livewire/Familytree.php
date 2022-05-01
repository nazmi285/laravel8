<?php

namespace App\Http\Livewire;

use Livewire\Component;
Use App\Models\Family;

class Familytree extends Component
{
    protected $listeners = ['familyChanges' => 'index'];

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

    public function render()
    {
        return view('livewire.familytree', [
            'families' => $this->index(),
        ]);
    }
}
