<div class=" container p-3 ">
    {{-- String --}}
<div class=" row d-flex">
    <input type="text" wire:model='data' wire:keydown='added()'>
{{$data}}
</div>
{{-- Checkbox --}}
<div class=" row">
<input type="checkbox" wire:model='checkBox' wire:change='added()'>
@if ($checkBox)
    Good
@else
    Not
@endif
</div>
{{-- Selection --}}
<div class=" row">
    <select wire:model='select' wire:change='added()'>
        <option value="one ha">One</option>
        <option value="two ha">Two</option>
        <option value="three ha">Three</option>
    </select>
    {{$select}}
</div>
{{--Form --}}
<div class="row">
    <form action="#" wire:submit.prevent='formData("Zaw Zaw")'>
        <button type="submit">Post as Zaw Zaw</button>
    </form>
    <form action="#" wire:submit.prevent="$set('form','Aun Aung')">
        <button type="submit">Post as Aung Aung</button>
    </form>
    <span>
        <button wire:click="$set('form','HLa Hla')">Click As Hla Hla</button>
    </span>
    {{$form}}
</div>
</div>
