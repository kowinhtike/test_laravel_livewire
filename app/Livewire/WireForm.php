<?php

namespace App\Livewire;

use Livewire\Component;

class WireForm extends Component
{
    public $name = "";
    public $email = "";
    public $password = "";

    public function submit(){
        $this->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);
        // Show a success message
        session()->flash('true', $this->name." ".$this->email." ".$this->password);
    }

    public function render()
    {
        return view('livewire.wire-form');
    }
}
