<?php

namespace App\Livewire;

use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class StoreStudent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $image;
    public $students = [];
    public $formstate = True;
    public $tempstudentid;

    public function mount()
    {
        $this->fetchAllStudent();
    }

    public function render()
    {
        return view('livewire.store-student');
    }

    public function savedata()
    {
        $student = new Student();
        $student->name = $this->name;
        $student->email = $this->email;
        if ($this->image) {
            $imagefile = $this->image;
            $getImageName =  $imagefile->hashName();
            $imagefile->storeAs("public/student-photos", $getImageName);
            $student->image = $getImageName;
        }
        $student->save();
        $this->resetdata();
        $this->fetchAllStudent();
    }

    public function editstudent($id)
    {
        $this->tempstudentid = $id;
        $this->formstate = False;
        $student = Student::find($id);
        $this->name = $student->name;
        $this->email = $student->email;
    }

    public function updatestudent()
    {
        $student = Student::find($this->tempstudentid);
        $student->name = $this->name;
        $student->email = $this->email;

        if (isset($student->image) && $this->image) {
            //delete the previous image storage
            Storage::delete("public/student-photos/" . $student->image);
            $image = $this->image;
            $imgName = $image->hashName();
            $image->storeAs("public/student-photos", $imgName);
            $student->image = $imgName;
        } elseif ($this->image) {
            $imagefile = $this->image;
            $getImageName = $imagefile->hashName();
            $imagefile->storeAs("public/student-photos", $getImageName);
            $student->image = $getImageName;
        }
        $student->save();
        $this->formstate = True;
        $this->fetchAllStudent();
        $this->resetdata();
    }

    public function fetchAllStudent()
    {
        $this->students = Student::all()->reverse();
    }

    public function deletestudent($id)
    {
        $student = Student::find($id);
        Storage::delete("public/student-photos/" . $student->image);
        $student->delete();
        $this->fetchAllStudent();
    }

    public function resetdata()
    {
        $this->reset(['name', 'email', 'image']);
    }
}
