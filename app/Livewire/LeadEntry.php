<?php

namespace App\Livewire;

use App\Models\Student;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class LeadEntry extends Component
{
    public Student $student;

    public function submitForm()
    {
        Log::info('Form Save Invoked!');

        $this->student->update(['name' => 'XYZZ']);
//        dd('Save: ', $this->student);
    }

//    public function mount(Student $student)
//    {
//        $this->student = $student;
//    }

    public function render()
    {
//        dd($this->student);
        return view('livewire.lead-entry');
    }

    public function selectOption()
    {
        Log::info('Select Changed!');
    }

}
