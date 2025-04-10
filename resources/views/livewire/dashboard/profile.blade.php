<div class="w-full lg:w-11/12">
    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="w-full flex justify-center items-center">
            <x-section.menu-dashboard />
        </div>
        <fieldset class="fieldset w-full bg-base-100 border border-base-300 p-4 rounded-box">
            <form wire:submit.prevent="save">
                <div class="toast toast-top toast-center">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        <span>{{ session('message') }}</span>
                    </div>
                    @endif
                </div>
                <legend class="fieldset-legend"><span class="badge badge-warning badge-xs">{{$email}}</span> Profile
                </legend>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">First Name</label>
                        <input type="text" class="input" placeholder="John" wire:model="name" />
                        <p class="text-error">@error('name')
                            {{$message}}
                            @enderror</p>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">Last Name</label>
                        <input type="text" class="input" placeholder="doe" wire:model="last_name" />
                        <p class="text-error">@error('last_name')
                            {{$message}}
                            @enderror</p>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">NIK</label>
                        <input type="text" class="input" placeholder="NIK" wire:model="nik" />
                        <p class="text-error">@error('nik')
                            {{$message}}
                            @enderror</p>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">Type</label>
                        <select class="select" wire:model="type">
                            <option selected></option>
                            <option value="Specialist">Specialist</option>
                            <option value="Resident">Resident</option>
                            <option value="General Practitioner">General Practitioner</option>
                            <option value="Student">Student</option>
                        </select>
                        <p class="text-error">@error('type')
                            {{$message}}
                            @enderror</p>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">Title</label>
                        <div class="flex flex-wrap gap-1">
                            <input type="radio" name="title" class="radio radio-primary radio-xs" value="Prof."
                                wire:model="title" />
                            <label class="fieldset-label">Prof.</label>
                            <input type="radio" name="title" class="radio radio-primary radio-xs" value="Dr."
                                wire:model="title" />
                            <label class="fieldset-label">Dr.</label>
                            <input type="radio" name="title" class="radio radio-primary radio-xs" value="dr."
                                wire:model="title" />
                            <label class="fieldset-label">dr.</label>
                            <input type="radio" name="title" class="radio radio-primary radio-xs" value="MD."
                                wire:model="title" />
                            <label class="fieldset-label">MD.</label>
                            <input type="radio" name="title" class="radio radio-primary radio-xs" value="Mr."
                                wire:model="title" />
                            <label class="fieldset-label">Mr.</label>
                            <input type="radio" name="title" class="radio radio-primary radio-xs" value="Mrs."
                                wire:model="title" />
                            <label class="fieldset-label">Mrs.</label>
                            <input type="radio" name="title" class="radio radio-primary radio-xs" value="Ms."
                                wire:model="title" />
                            <label class="fieldset-label">Ms.</label>
                        </div>
                        <p class="text-error">@error('title')
                            {{$message}}
                            @enderror</p>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">Title Specialist</label>
                        <input type="text" class="input" placeholder="ex SpU, SpBS, SpBP"
                            wire:model="title_specialist" />
                        <p class="text-error">@error('title_specialist')
                            {{$message}}
                            @enderror</p>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">Name on Certificate</label>
                        <input type="text" class="input" placeholder="" wire:model="name_on_certificate" />
                        <p class="text-error">@error('name_on_certificate')
                            {{$message}}
                            @enderror</p>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">Institution</label>
                        <input type="text" class="input" placeholder="" wire:model="institution" />
                        <p class="text-error">@error('institution')
                            {{$message}}
                            @enderror</p>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">Address</label>
                        <textarea class="textarea" placeholder="" wire:model="address"></textarea>
                        <p class="text-error">@error('address')
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
                        <label class="fieldset-label">Province</label>
                        <input type="text" class="input" placeholder="" wire:model="province" />
                        <p class="text-error">@error('province')
                            {{$message}}
                            @enderror</p>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">City</label>
                        <input type="text" class="input" placeholder="" wire:model="city" />
                        <p class="text-error">@error('city')
                            {{$message}}
                            @enderror</p>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">Postal Code</label>
                        <input type="text" class="input" placeholder="" wire:model="postal_code" />
                        <p class="text-error">@error('postal_code')
                            {{$message}}
                            @enderror</p>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <label class="fieldset-label">Phone Number</label>
                        <input type="text" class="input" placeholder="" wire:model="phone_number" />
                        <p class="text-error">@error('phone_number')
                            {{$message}}
                            @enderror</p>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary mt-4">
                    <span wire:loading.remove wire:target="save">Save</span>
                    <span wire:loading wire:target="save"
                        class="loading loading-spinner loading-md"></span>
                </button>
                <a href="/dashboard" wire:navigate class="btn btn-neutral mt-4">Cancel</a>
            </form>
        </fieldset>
    </section>
</div>