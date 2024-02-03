<?php

namespace App\Livewire;

use App\Models\TodoList as ModelsTodoList;
use App\Models\User;
use Livewire\Component;

class Todolist extends Component
{

    public $todos = [];
    public $task = "";

    function mount(){
        $this->fetchTodos();
    }

    public function fetchTodos(){
        $this->todos = ModelsTodoList::all()->reverse();
    }

    public function add(){
        if($this->task != ""){
          $todo = new ModelsTodoList();
          $todo->task = $this->task;
          $todo->save();
          $this->task = "";
          $this->fetchTodos();
        }
    }

    public function done($id){
        $todo = ModelsTodoList::find($id);
        if($todo->status == 'open'){
            $todo->status = "done";;
        }else{
            $todo->status = "open";
        }
        $todo->save();
        $this->fetchTodos();
    }

    public function delete($id){
        $todo = ModelsTodoList::find($id);
        $todo->delete();
        $this->fetchTodos();
    }

    public function render()
    {
        return view('livewire.todolist');
    }
}
