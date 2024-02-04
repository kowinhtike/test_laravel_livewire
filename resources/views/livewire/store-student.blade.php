<div>
   @if ($formstate)
       <form wire:submit.prevent='savedata'>
        <input type="name" wire:model='name'>
        <input type="email" wire:model='email'>
        <input type="file" wire:model='image'>
        <button type="submit">Submit</button>
       </form>
       @foreach ($students as $student)
           <h1> {{$student->name}} </h1>
           <p> {{$student->email}} </p>
           <img src="/storage/student-photos/{{$student->image}}" height="300px" alt="{{$student->image}}">
           <div>
            <button wire:click='deletestudent({{$student->id}})'>Delete</button>
            <button wire:click='editstudent({{$student->id}})'>Update</button>
           </div>
       @endforeach
   @else
   <form wire:submit.prevent='updatestudent'>
    <input type="name" wire:model='name'>
    <input type="email" wire:model='email'>
    <input type="file" wire:model='image'>
    <button type="submit">Submit</button>
   </form>
   @endif
</div>
