<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Crud extends Component
{

    public $students, $firstName, $lastName, $Score1, $Score2, $Score3, $Sum , $student_id;
    public $updateMode = false;
    public $isOpen = 1;
    public $isOpenEdit = 0;
    public function openModal(){
        $this->isOpen = true;
    }
    public function openModalEdit(){
        $this->isOpenEdit = true;
    }
    public function closeModal(){
        $this->isOpen = false;
    }
    public function closeModalEdit(){
        $this->isOpenEdit = false;
    }

    public function render()
    {
        $this -> students = Student::all();
        return view('livewire.crud');
    }

    public function create(){
        $this->openModal();
    }


    private function resetInputFields(){
        $this -> firstName = '';
        $this -> lastName = '';
        $this -> Score1 = '';
        $this -> Score2 = '';
        $this -> Score3 = '';
        $this -> Sum = '';

    }

    public function store(){
        $dataStudents = $this->validate([
        'firstName'=>'required',
        'lastName'=>'required',
        'Score1'=>'required',
        'Score2'=>'required',
        'Score3'=>'required',
        'Sum'=>'required'
        ]);
    

    //Guardar o actualizar 

    Student::create($dataStudents);
    session()->flash('message', 'Estudiante agregado correctamente');
    $this ->resetInputFields();


    

    
    }

    public function edit($id) {
        $this->updateMode = true;
        
        $student = Student::where('id', $id)->first();
        $this->student_id= $id;
        $this->firstName = $student->firstName;
        $this->lastName=$student->lastName;
        $this->Score1=$student->Score1;
        $this->Score2=$student->Score2;
        $this->Score3=$student->Score3;
        $this->Sum=$student->Sum;
       

    }

    public function cancel(){

        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update() {
        $dataStudents = $this -> validate([
            'firstName'=>'required',
        'lastName'=>'required',
        'Score1'=>'required',
        'Score2'=>'required',
        'Score3'=>'required',
        'Sum'=>'required'
        ]);

        if ($this->student_id) {
            $students = Student::find($this->student_id);
            $students -> update([
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'Score1' => $this->Score1,
                'Score2' => $this->Score2,
                'Score3' => $this->Score3,
                'Sum' => $this->Sum


            ]);

            $this->updateMode = false;
            session()->flash('message', 'Estudiante editado correctamente');
            $this->resetInputFields();

        }
    }


    public function delete($id) {
        Student::find($id)->delete();
        session()->flash('message', 'Registro Eliminado');
    }
}

//01110100 01100101 
