<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Doctor;
use Livewire\Component;
use App\Models\Specialities;
use Illuminate\Support\Facades\Hash;

class DoctorCreate extends Component
{

    public $name = '';
    public $hospital_name = '';
    public $email = '';
    public $bio = '';
    public $speciality_id = '';
    public $password = '';
    public $whatsapp = '';
    public $facebook = '';
    public $price = '';
    public $experience = '';
    public $specialities;

    public function mount(){
        $this->specialities = Specialities::all();
    }

    public function register(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'bio' => 'required',
            'hospital_name' => 'required',
            'speciality_id' => 'required',
            'password' => 'required|min:4',
            'whatsapp' => 'string',
            'facebook' => 'string',
            'experience' => 'required',
            'price' => 'required',
        ]);

        // user table
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->role = 1;
        $user->password = Hash::make($this->password);
        $user->save();

        // doctors table

        $doctor = new Doctor;
        $doctor->bio = $this->bio;
        $doctor->hospital_name = $this->hospital_name;
        $doctor->speciality_id = $this->speciality_id;
        $doctor->user_id = $user->id;
        $doctor->experience = $this->experience;
        $doctor->price = $this->price;
        $doctor->whatsapp = $this->whatsapp;
        $doctor->facebook = $this->facebook;
        $doctor->save();

        session()->flash('message','Docteur créé avec succès');
        return $this->redirect('/admin/doctors', navigate: true);

    }
    public function render()
    {
        return view('livewire.doctor-create');
    }
    public $showModal = false;

}
