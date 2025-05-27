<?php

namespace App\Livewire;

use App\Models\DoctorSchedule;
use Livewire\Component;

class SchedulesEditForm extends Component
{

    public $daysOfweek = [
            '0' => 'Dimanche',
            '1' => 'Lundi',
            '2' => 'Mardi',
            '3' => 'Mercredi',
            '4' => 'Jeudi',
            '5' => 'Vendredi',
            '6' => 'Samedi',
        ];

    public $schedules;
    public $available_day;
    public $from;
    public $to;

    public function update(){
        $this->validate([
            'available_day' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);

        DoctorSchedule::where('id',$this->schedules->id)->update([
           'available_day' => $this->available_day,
            'from' => $this->from,
            'to' => $this->to,
        ]);

        session()->flash('message','horaire mis à jour');

        return $this->redirect('/doctor/schedules', navigate: true);
    }
    public function mount($schedule_id){
        $this->schedules = DoctorSchedule::find($schedule_id);

        $this->from = $this->schedules->from;
        $this->to = $this->schedules->to;
    }

    public function render()
    {
        return view('livewire.schedules-edit-form');
    }
}
