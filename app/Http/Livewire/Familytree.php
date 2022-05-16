<?php

namespace App\Http\Livewire;

use Livewire\Component;
Use App\Models\Family;

class Familytree extends Component
{
    protected $listeners = ['familyChanges' => 'index'];
    public $showModal = false;
    public $upd_name, $upd_short_name, $upd_gender,$upd_birthdate,$upd_relationship,$upd_relationto,$member,$filter;

    public function index()
    {
        $families = Family::with('childParents');
        if(!empty($this->filter)){
            $families = $families->where('id',$this->filter);
        }else{
            $families = $families->whereNull('parent_id')
                        ->whereNull('partner_id');
        }

        $families = $families->orderBy('created_at','desc')
                    ->get();

        return $families;
    }

    public function family_rs()
    {
        $family_rs = Family::orderBy('short_name','asc')->get();

        return $family_rs;
    }

    public function newRelatedMember($id)
    {
        $member = Family::find($id);
        $this->emit('newRelatedMember', $member);
    }

    public function showMember(int $id)
    {
        $member = Family::where('id',$id)->first();

        if($member->relationship == 'spouse'){
            $this->upd_relationto = $member->partner_id;
        }elseif($member->relationship == 'child'){
            $this->upd_relationto = $member->parent_id;
        }elseif($member->relationship == 'parent'){
        }elseif($member->relationship == 'sibling'){
            $this->upd_relationto = $member->parent_id;
        }else{
            $this->upd_relationto = '';
        }

        $this->member = $member;
        $this->upd_name = $member->name;
        $this->upd_name = $member->name;
        $this->upd_short_name = $member->short_name;
        $this->upd_gender = $member->gender;
        $this->upd_birthdate = dateConvertDMY1($member->birthdate);
        $this->upd_relationship = $member->relationship;

        $this->dispatchBrowserEvent('show-modal');
        // $this->emit('showMember', $member);
        // $this->showModal = true;
    }

    public function updateMember()
    {
        $this->member->name = $this->upd_name;
        $this->member->short_name = $this->upd_short_name;
        $this->member->gender = $this->upd_gender;
        // $this->member->birthdate = $this->birthdate;
        $this->member->relationship = $this->upd_relationship;


            if($this->upd_relationship == 'child'){
                $this->member->parent_id = $this->upd_relationto;
                $this->member->partner_id = null;
            }elseif($this->upd_relationship == 'sibling'){
                $sibling = Family::where('id',$this->upd_relationto)->first();
                $this->member->parent_id = $sibling->parent_id;
                $this->member->relationship = $sibling->relationship;
                $this->member->partner_id = null;
            }elseif($this->upd_relationship == 'spouse'){
                $this->member->partner_id = $this->upd_relationto;
                $this->member->parent_id = null;
            }
        

        $this->member->save();

        $this->emit('familyChanges');
        session()->flash('success', 'Member information successfully updated.');
    }

    public function render()
    {
        return view('livewire.familytree', [
            'families' => $this->index(),
            'family_rs' => $this->family_rs(),
        ]);
    }
}
