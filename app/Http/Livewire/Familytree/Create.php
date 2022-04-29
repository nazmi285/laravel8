<?php

namespace App\Http\Livewire\Familytree;

use Livewire\Component;
Use App\Models\Family;

class Create extends Component
{
    public $form,$family;
    protected $listeners = ['newRelatedMember' => 'registerNewMember'];

    // protected $rules = [
    //     'form.name' => 'required|string|min:6',
    //     'form.name' => 'required|string|max:500',
    // ];
    public function registerNewMember($family)
    {
        $this->family = $family;
    }

    public function store()
    {
        // $this->validate();

        $family = New Family;

        if($this->form['relationship'] == 'child'){
            $family->parent_id = $this->family['id'];
        }elseif($this->form['relationship'] == 'sibling'){
            $family->parent_id = $this->family['parent_id'];
        }elseif($this->form['relationship'] == 'spouse'){
            $family->partner_id = $this->family['id'];
        }
        $family->name = $this->form['name'];
        $family->gender = $this->form['gender'];
        $family->birthdate = $this->form['birthdate'];
        $family->status = 'ACTIVE';
        $family->save();

        $this->emit('familyChanges');

        // $this->dispatchBrowserEvent('closeModal'); 

        session()->flash('success', 'New family member successfully added.');

    }

    public function render()
    {
        return view('livewire.familytree.create');
    }
}
