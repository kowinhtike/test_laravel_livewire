<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{

    public $data = "Button Naw";
    public $checkBox = True;
    public $select = "two ha";
    public $form = "early data";

    public function added(){
        
    }

    public function formData($name){
        $this->form = $name;
    }

    public function render()
    {
        return view('livewire.test');
    }
}
