<?php

namespace App\Http\Livewire;

use Livewire\Component;
Use App\Models\Family;

class Familytree extends Component
{
    protected $listeners = ['familyChanges' => 'index'];
    public $showModal = false;

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
        $member = Family::find($id);
        $this->emit('newRelatedMember', $member);
    }

    public function showMember($id)
    {
        $member = Family::find($id);
        $this->emit('showMember', $member);
        // $this->showModal = true;
    }

    public function render()
    {
        return view('livewire.familytree', [
            'families' => $this->index(),
        ]);
    }
}
