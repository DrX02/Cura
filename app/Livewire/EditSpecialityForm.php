<?php

namespace App\Livewire;

use App\Models\Specialities;
use Livewire\Component;

class EditSpecialityForm extends Component
{

    public $speciality;
    public $name;

    public function mount($speciality_id){
        $this->speciality = Specialities::find($speciality_id);

        $this->name = $this->speciality->speciality_name;
    }

    public function update(){
        $this->validate(['name' => 'required']);
        // update
        $update = Specialities::find($this->speciality->id);
        $update->update([
            'speciality_name' => $this->name
        ]);

        session()->flash('message','Spécialité mise à jour avec succès');
        return $this->redirect('/admin/specialities', navigate: true);
    }
    public function render()
    {
        return view('livewire.edit-speciality-form');
    }
}
