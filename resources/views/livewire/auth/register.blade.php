<div class="w-full lg:w-11/12 h-screen flex justify-center items-center px-2">
    <div class="card w-full max-w-xl bg-base-100 card-md shadow-sm pt-2 pb-8 px-0 lg:px-10">
        <div class="card-body">
            <h2 class="text-center text-xl font-semibold uppercase">Register</h2>
            <h2 class="text-center text-xl font-semibold">PIT PERAPI 2025</h2>
            <p class="text-center">Have Account? Please <a href="/login"
                    class="text-blue-600  underline hover:text-amber-400" wire:navigate> Sign In </a></p>
            <form wire:submit.prevent='register'>
                <div class="toast toast-top toast-center">
                    @if (session()->has('error'))
                    <div class="alert alert-error">
                        <span>{{ session('error') }}</span>
                    </div>
                    @endif
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        <span>{{ session('message') }}</span>
                    </div>
                    @endif
                </div>

                <fieldset class="fieldset w-full bg-base-200 border border-base-300 p-4 rounded-box">
                    <label class="fieldset-label">Name</label>
                    <input wire:model='name' type="text" class="input w-full" placeholder="Name" />
                    <div class="text-error">@error('name')
                        {{$message}}
                        @enderror</div>

                    <label class="fieldset-label">Email</label>
                    <input wire:model.defer='email' type="email" class="input w-full" placeholder="Email" />
                    <div class="text-error">@error('email')
                        {{$message}}
                        @enderror</div>

                    <label class="fieldset-label">Password</label>
                    <input wire:model='password' type="password" class="input w-full" placeholder="Password" />
                    <div class="text-error">@error('password')
                        {{$message}}
                        @enderror</div>
                    {{-- <label class="fieldset-label">Confirm Password</label>
                    <input wire:model='confirm_password' type="password" class="input w-full"
                        placeholder="Confirm Password" />
                    <div class="text-error">@error('confirm_password')
                        {{$message}}
                        @enderror</div> --}}

                    <button type="submit" class="btn btn-primary uppercase mt-4">
                        <span wire:loading.remove wire:target='save'>Register</span>
                        <span wire:loading wire:target='save'>Saving...</span>
                    </button>
                </fieldset>
            </form>
        </div>
    </div>

</div>