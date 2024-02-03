<div class="container">
    <div class="row justify-content-center ">
        <div class="col-sm-6 card ">
            <h2 class=" mt-3 ">Simple Live Wire Form</h2>
            @if (session()->has('true'))
                <p class=" alert alert-success ">{{ session('true') }} </p>
            @endif
            <form action="#" wire:submit.prevent='submit'>
                <div class="mb-3">
                    <label for="name">for name</label>
                    <input type="text" id="name" wire:model='name'
                        class="form-control @error('name')
                    is-invalid
                @enderror">
                </div>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="mb-3">
                    <label for="email">for email</label>
                    <input type="text" id="email" wire:model='email' class="form-control @error('email')
                    is-invalid
                @enderror">
                </div>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="mb-3">
                    <label for="password">for password</label>
                    <input type="text" id="password" wire:model='password' class="form-control @error('password')
                    is-invalid
                @enderror">
                </div>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="mb-3 d-flex justify-content-center ">
                    <button class=" btn btn-primary " type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
