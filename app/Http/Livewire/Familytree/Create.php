<?php

namespace App\Http\Livewire\Familytree;

use Livewire\Component;
Use App\Models\Family;

class Create extends Component
{
    public $form,$person;
    protected $listeners = ['newRelatedMember' => 'registerNewMember'];

    // protected $rules = [
    //     'form.name' => 'required|string|min:6',
    //     'form.name' => 'required|string|max:500',
    // ];
    public function registerNewMember($person)
    {
        $this->person = $person;
    }

    public function store()
    {
        // $this->validate();

        $family = New Family;

        if (array_key_exists("relationship",$this->form)){
            if($this->form['relationship'] == 'child'){
                $family->parent_id = $this->person['id'];
            }elseif($this->form['relationship'] == 'sibling'){
                $family->parent_id = $this->person['parent_id'];
            }elseif($this->form['relationship'] == 'spouse'){
                $family->partner_id = $this->person['id'];
            }
        }
        $family->name = $this->form['name'];
        $family->gender = $this->form['gender'];
        $family->birthdate = $this->form['birthdate'];
        $family->status = 'ACTIVE';
        if($family->save()){
            if (array_key_exists("relationship",$this->form)){
                if($this->form['relationship'] == 'parent'){
                    if(!is_null($this->person['partner_id'])){
                        $child = Family::find($this->person['partner_id']);
                        $child->parent_id = $family->id;
                        $child->save();
                    }else{
                        $child = Family::find($this->person['id']);
                        $child->parent_id = $family->id;
                        $child->save();
                    }
                }
            }
        }

        $this->emit('familyChanges');

        // $this->dispatchBrowserEvent('closeModal'); 

        session()->flash('success', 'New family member successfully added.');

    }

    public function render()
    {
        return view('livewire.familytree.create');
    }
}
