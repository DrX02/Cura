<?php

namespace App\Livewire;

use App\Models\DoctorSchedule;
use Livewire\Component;

class SchedulesComponent extends Component
{

    public $daysOfweek;

    public function mount(){
        $this->daysOfweek = [
            '0' => 'Dimanche',
            '1' => 'Lundi',
            '2' => 'Mardi',
            '3' => 'Mercredi',
            '4' => 'Jeudi',
            '5' => 'Vendredi',
            '6' => 'Samedi',
        ];

    }

    public function delete($id){
        $data = DoctorSchedule::find($id);

        $data->delete();

        session()->flash('message','Planification supprimée avec succès');

        return $this->redirect('/doctor/schedules',navigate: true);
    }
    public function render()
    {
        $user_id = auth()->user()->id;

        return view('livewire.schedules-component',[
            'schedules' => DoctorSchedule::with('doctor')
            ->whereHas('doctor', function ($query) use ($user_id) {
                    $query->where('doctors.user_id', $user_id);
                })->get()

        ]);
    }
}
