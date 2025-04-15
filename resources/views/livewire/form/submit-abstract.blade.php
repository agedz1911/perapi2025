<div class="w-full px-5">
    <div class="flex justify-center">
        <ul class="steps">
            <li class="step {{ $currentStep == 1 ? 'step-primary' : '' }}">Fill Data</li>
            <li class="step {{ $currentStep == 2 ? 'step-primary' : '' }}">Choose Abstract</li>
            <li class="step {{ $currentStep == 3 ? 'step-primary' : '' }}">Finish</li>
        </ul>
    </div>
    @if ($currentStep == 1)
    <form wire:submit.prevent="nextStep">
        <fieldset class="fieldset bg-base-200 border border-base-300 p-4 rounded-box">
            <legend class="fieldset-legend">details</legend>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">First Name</label>
                    <input wire:model='name' type="text" class="input" placeholder="" />
                    <p class="text-error">@error('name')
                        {{$message}}
                        @enderror</p>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Last Name</label>
                    <input wire:model='last_name' type="text" class="input" placeholder="" />
                    <p class="text-error">@error('last_name')
                        {{$message}}
                        @enderror</p>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Phone Number</label>
                    <input wire:model='phone_number' type="text" class="input" placeholder="" />
                    <p class="text-error">@error('phone_number')
                        {{$message}}
                        @enderror</p>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Institution</label>
                    <input wire:model='institution' type="text" class="input" placeholder="" />
                    <p class="text-error">@error('institution')
                        {{$message}}
                        @enderror</p>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Country</label>
                    <select class="select" wire:model="country">
                        <option disabled selected>Choose Country</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country['name'] }}">{{$country['name']}}</option>
                        @endforeach
                    </select>
                    <p class="text-error">@error('country')
                        {{$message}}
                        @enderror</p>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">City</label>
                    <input wire:model='city' type="text" class="input" placeholder="" />
                    <p class="text-error">@error('city')
                        {{$message}}
                        @enderror</p>
                </div>
            </div>
            <div class="flex justify-end gap-3">
                <a wire:navigate href="#" class="btn btn-outline btn-error">Cancel</a>
                <button class="btn btn-primary">
                    <span wire:loading.remove wire:target="nextStep">Next</span>
                    <span wire:loading wire:target="nextStep"
                        class="loading loading-spinner loading-md"></span>
                </button>
            </div>
        </fieldset>
    </form>
    @elseif ($currentStep == 2)
    <form>
        <fieldset class="fieldset bg-base-200 border border-base-300 p-4 rounded-box">
            <legend class="fieldset-legend">Choose Abstract</legend>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Presenter Type</label>
                    <select class="select" wire:model='presenter_type'>
                        <option disabled selected>Pick a Type</option>
                        <option>Specialist</option>
                        <option>Resident</option>
                        <option>GP</option>
                        <option>Other</option>
                    </select>
                    <p class="text-error">@error('presenter_type')
                        {{$message}}
                        @enderror</p>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Presentation Title</label>
                    <textarea wire:model='presentation_title' class="textarea" placeholder=""></textarea>
                    <p class="text-error">@error('presentation_title')
                        {{$message}}
                        @enderror</p>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Session Type</label>
                    <select class="select" wire:model='session_type'>
                        <option disabled selected>Pick a Type</option>
                        <option>E-Poster</option>
                        <option>Oral Presentation</option>
                    </select>
                    <p class="text-error">@error('session_type')
                        {{$message}}
                        @enderror</p>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Abstract Type</label>
                    <select class="select" wire:model='abstract_type'>
                        <option disabled selected>Pick a Type</option>
                        <option>Free Paper</option>
                        <option>Research Proposal</option>
                    </select>
                    <p class="text-error">@error('abstract_type')
                        {{$message}}
                        @enderror</p>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Choose File</label>
                    <input wire:model='file' type="file" class="file-input file-input-primary" />
                    <label class="fieldset-label">Max size 2MB</label>
                    <p class="text-error">@error('file')
                        {{$message}}
                        @enderror</p>
                </div>

            </div>
            <div class="flex justify-end gap-3">
                <button wire:click="previousStep" class="btn btn-outline btn-error">Previous</button>
                <button wire:click="save" class="btn btn-primary">Submit</button>
            </div>
        </fieldset>
    </form>
    @elseif ($currentStep == 3)
    <fieldset class="fieldset bg-base-200 border border-base-300 p-4 rounded-box">
        <legend class="fieldset-legend">Finish</legend>
        <div class="flex justify-center">
            <div class="w-full p-2 text-center">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <span>{{ session('message') }}</span>
                </div>
                @endif
                <h1>Thank You</h1>
            </div>
        </div>
    </fieldset>
    @endif
</div>