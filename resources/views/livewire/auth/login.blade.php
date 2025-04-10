<div class="w-full lg:w-11/12 h-screen flex justify-center items-center px-2">
    <div class="card w-full max-w-xl bg-base-100 card-md shadow-sm pt-2 pb-8 px-0 lg:px-10">
        <div class="card-body">
            <h2 class="text-center text-xl font-semibold uppercase">Sign In</h2>
            <h2 class="text-center text-xl font-semibold">PIT PERAPI 2025</h2>
            <p class="text-center">Don't Have Account? Please <a href="/register"
                    class="text-blue-600 underline hover:text-amber-400" wire:navigate> Register </a></p>
            <form wire:submit.prevent='login'>
                <div class="toast toast-top toast-center">
                    @if (session()->has('error'))
                    <div class="alert alert-error">
                        <span>{{ session('error') }}</span>
                    </div>
                    @endif
                    @if (session()->has('message'))
                    <!-- Tampilkan pesan sukses jika ada -->
                    <div class="alert alert-success">
                        <span>{{ session('message') }}</span>
                    </div>
                    @endif
                </div>
                <fieldset class="fieldset w-full bg-base-200 border border-base-300 p-4 rounded-box">
                    <legend class="fieldset-legend">Login</legend>
                    <label class="fieldset-label">Email</label>
                    <input type="email" wire:model='email' class="input w-full" placeholder="Email" />
                    <div class="text-error">@error('email')
                        {{$message}}
                        @enderror</div>
                    <label class="fieldset-label">Password</label>
                    <input type="password" wire:model='password' class="input w-full" placeholder="Password" />
                    <div class="text-error">@error('password')
                        {{$message}}
                        @enderror</div>
                    <div class="flex justify-between items-end">
                        <label class="fieldset-label mt-2">
                            <input type="checkbox" wire:model.defer='remember' id="remember" class="checkbox" />
                            Remember me
                        </label>
                        <a href="#" class="underline hover:text-amber-400 text-blue-600">Forgot Password?</a>
                    </div>
                    @if (!Auth::check())
                    <button wire:click='$refresh' type="submit" class="btn btn-neutral uppercase mt-4">Login
                        <span wire:loading wire:target="login">Please Wait...</span>
                    </button>
                    @else
                    <button class="btn btn-neutral uppercase mt-4" wire:click="logout">Logout</button>
                    @endif
                </fieldset>
            </form>
        </div>
    </div>
</div>