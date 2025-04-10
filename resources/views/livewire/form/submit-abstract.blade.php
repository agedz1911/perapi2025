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
                    <input type="text" class="input" placeholder="" />
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Last Name</label>
                    <input type="text" class="input" placeholder="" />
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Phone Number</label>
                    <input type="text" class="input" placeholder="" />
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Institution</label>
                    <input type="text" class="input" placeholder="" />
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Country</label>
                    <input type="text" class="input" placeholder="" />
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">City</label>
                    <input type="text" class="input" placeholder="" />
                </div>
            </div>
            <div class="flex justify-end gap-3">
                <a wire:navigate href="#" class="btn btn-outline btn-error">Cancel</a>
                <button class="btn btn-primary">Next</button>
            </div>
        </fieldset>
    </form>
    @elseif ($currentStep == 2)
    <form wire:submit.prevent="save">
        <fieldset class="fieldset bg-base-200 border border-base-300 p-4 rounded-box">
            <legend class="fieldset-legend">Choose Abstract</legend>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Presenter Type</label>
                    <select class="select">
                        <option disabled selected>Pick a Type</option>
                        <option>Specialist</option>
                        <option>Resident</option>
                        <option>GP</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Presentation Title</label>
                    <textarea class="textarea" placeholder=""></textarea>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Session Type</label>
                    <select class="select">
                        <option disabled selected>Pick a Type</option>
                        <option>E-Poster</option>
                        <option>Oral Presentation</option>
                    </select>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Abstract Type</label>
                    <select class="select">
                        <option disabled selected>Pick a Type</option>
                        <option>Free Paper</option>
                        <option>Research Proposal</option>
                    </select>
                </div>
                <div class="w-full lg:w-1/2 p-2">
                    <label class="fieldset-label">Choose File</label>
                    <input type="file" class="file-input file-input-primary" />
                    <label class="fieldset-label">Max size 2MB</label>
                </div>

            </div>
            <div class="flex justify-end gap-3">
                <button wire:click="previousStep" class="btn btn-outline btn-error">Cancel</button>
                <button class="btn btn-primary">Submit</button>
            </div>
        </fieldset>
    </form>
    @elseif ($currentStep == 3)
    <fieldset class="fieldset bg-base-200 border border-base-300 p-4 rounded-box">
        <legend class="fieldset-legend">Finish</legend>
        <div class="flex justify-center">
            <div class="w-full p-2 text-center">
                <h1>Submit Successfully,</h1>
                <h1>Thank You</h1>
            </div>
        </div>
    </fieldset>
    @endif
</div>