<div>
    <div>
        {{-- simple getter and setter --}}
        This is Helloworld Livewire
        <br>
        <h2>{{ $name }}</h2>
        <input type="text" wire:model="name">
        {{-- <input type="text" wire:model="name" wire:keydown='refresh'> --}}
        <button wire:click='refresh' >Get Name</button>
        <button wire:click='$set("name","Kyaw Kyaw")' >Set as Kyaw Kyaw</button>
        <button wire:click='namefrommethod("Name from method")'>Name from method</button>
        <br>
        <form action="#" wire:submit.prevent='namefrommethod("Name from Form")'>
            <button>Submit to Form</button>
        </form>
    </div>
    <div>
        {{-- use checkbox --}}
        <input type="checkbox" wire:model='checked' wire:change='refresh'>
        @if ($checked)
            <p>This is checked</p>
        @else
            <p>This is not checked</p>
        @endif
    </div>
    <div>
        {{-- use simple select  --}}

        {{-- <select wire:model='simpleselect' wire:change='refresh'>
            <option>one</option>
            <option>two</option>
            <option>three</option>
        </select> --}}

        <select wire:model='simpleselect' wire:change='refresh'>
            <option value="one">one is one</option>
            <option value="two">two is two</option>
            <option value="three">three is three</option>
        </select>

        {{$simpleselect}}
        {{-- for multiple select --}}
        {{-- {{implode(' and ',$multipleselect)}} --}}
    </div>
    <div>
        
    </div>
</div>
