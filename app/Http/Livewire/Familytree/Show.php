<?php

namespace App\Http\Livewire\Familytree;

use Livewire\Component;
Use App\Models\Family;

class Show extends Component
{
    public $person,$show;
    
    protected $listeners = ['showModal' => 'showModal'];


    public function showModal($id) {
        $person = Family::find($id);
        $this->person = $person;

        $this->doShow();
    }
    public function doShow() {
        $this->show = true;
    }

    public function doClose() {
        $this->show = false;
    }
    public function doSomething() {
        // Do Something With Your Modal
        
        // Close Modal After Logic
        $this->doClose();
    }
    public function render()
    {
        return view('livewire.familytree.show');
    }
}
