<?php

namespace App\Http\Livewire\Familytree;

use Livewire\Component;
Use App\Models\Family;

class Listing extends Component
{
    public function index()
    {
        $families = Family::all();

        return $families;
    }

    public function render()
    {
        return view('livewire.familytree.listing', [
            'families' => $this->index(),
        ]);
    }
}
