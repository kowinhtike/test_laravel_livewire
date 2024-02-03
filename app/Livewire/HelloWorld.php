<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "Zaw Zaw";
    public $checked = False;
    public $simpleselect = "two";
    public $multipleselect = ["three"];

    public function refresh(){

    }

    public function namefrommethod($name){
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
