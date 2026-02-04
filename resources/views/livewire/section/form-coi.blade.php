<div>
    <div class="float-end">
        @if (Auth::check())
        <button wire:click="exportToExcel" class="btn btn-sm btn-outline">Download Excel</button>
        @endif
    </div>
    <form wire:submit="save">
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-full border p-4">
            <legend class="fieldset-legend">Conflict of Interest / Disclosure Statement Form</legend>

            <label class="label font-bold">Name</label>
            <input type="text" wire:model="name" class="input mb-2 w-full" placeholder="Your full name" />
            @error('name')
            <span class="text-error text-sm">{{ $message }}</span>
            @enderror

            <label class="label font-bold">Institution / Affiliation</label>
            <input type="text" wire:model="institution" class="input mb-2 w-full" placeholder="Your institution" />
            @error('institution')
            <span class="text-error text-sm">{{ $message }}</span>
            @enderror

            <label class="label font-bold">Email</label>
            <input type="text" wire:model="email" class="input mb-2 w-full" placeholder="Your email" />
            @error('email')
            <span class="text-error text-sm">{{ $message }}</span>
            @enderror

            <div>
                <label class="label font-bold">Presentation title(s)</label>
                @foreach($presentation_titles as $index => $title)
                <input type="text" wire:model="presentation_titles.{{ $index }}" class="input mb-2 w-full" placeholder="Your presentation title" />
                @error('presentation_titles.' . $index)
                <span class="text-error text-sm">{{ $message }}</span>
                @enderror
                @endforeach
                <button type="button" wire:click="addTitle" class="btn btn-warning btn-sm float-right"><i class="fa fa-add"></i> Add Another Title</button>
            </div>

            <div class="mt-5">
                <p class="font-semibold">Disclosure of Conflict of Interest</p>
                <p class="text-gray-500">As a faculty member, speaker and or free paper presenter at APRAS Congress 2026 or/and 29th of InaPRAS 2026.
                    I declare the following information regarding any financial or other relationships that could be perceived as a potential conflict of interest related to my presentation(s). Please check (✓) the appropriate statement:
                </p>
                <div class="flex w-full flex-col lg:flex-row mt-5">
                    <div class="card bg-base-300 rounded-box grid grow place-items-center py-4">
                        <div class="px-3">
                            <label class="label text-black">
                                <input type="checkbox" wire:model="no_conflict" wire:click="toggleNoConflict" class="checkbox" />
                                I have no conflicts of interest to disclose
                            </label>
                            <p class="text-gray-500">If you have no conflict interest to disclose, please include following statement at your presentation slide right after the title slide Disclosure: The author(s) declare no conflict of interest related to the content of this presentation</p>
                        </div>
                    </div>
                    <div class="divider lg:divider-horizontal"></div>
                    <div class="card bg-base-300 rounded-box grid grow place-items-center py-4">
                        <div class="px-3 text-gray-500">
                            <label class="label text-black">
                                <input type="checkbox" wire:model="has_conflict" wire:click="toggleHasConflict" class="checkbox" />
                                I have the following conflicts of interest to disclose (please briefly describe):
                            </label>
                            <input type="text" wire:model="conflict_description" placeholder="describe here" class="input input-ghost w-full" />
                            @error('conflict_description')
                            <span class="text-error text-sm">{{ $message }}</span>
                            @enderror
                            <p>If you have conflict of interest to disclose please include following statement at your presentation slide right after the title slide Disclosure: The author(s) have the following conflict(s) of interest related to the content of this presentation: </p>
                            <div class="flex flex-wrap items-center">
                                <p>[e.g., Consultant for </p>
                                <input wire:model="have_consultant" type="text" placeholder="type here" class="input input-sm input-ghost w-20" />
                                @error('have_consultant')
                                <span class="text-error text-sm">{{ $message }}</span>
                                @enderror
                                <p>/ Research grant from </p>
                                <input wire:model="have_research_grant" type="text" placeholder="type here" class="input input-sm input-ghost w-20" />
                                @error('have_research_grant')
                                <span class="text-error text-sm">{{ $message }}</span>
                                @enderror
                                <p>/ Speaker honorarium from </p>
                                <input wire:model="have_speaker_honorarium" type="text" placeholder="type here" class="input input-sm input-ghost w-20" />
                                @error('have_speaker_honorarium')
                                <span class="text-error text-sm">{{ $message }}</span>
                                @enderror
                                <p>/ Stock ownership in </p>
                                <input wire:model="have_ownership" type="text" placeholder="type here" class="input input-sm input-ghost w-20" />
                                @error('have_ownership')
                                <span class="text-error text-sm">{{ $message }}</span>
                                @enderror
                                <p>] </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-gray-500">
                    <p class="font-bold text-black">Notes:</p>
                    <ul class="list-disc ml-4">
                        <li>This disclosure slide is required for all presentations at APRAS Congress 2026 and 29th of InaPRAS 2026 to ensure transparency and uphold scientific integrity</li>
                        <li>Please ensure the disclosure appears immediately after the title slide of your presentation</li>
                    </ul>
                    <p class="mt-2">I certify that the information provided above is accurate and complete to the best of my knowledge.</p>
                    <p> I understand that this disclosure will be used by the Organizing Committee to ensure transparency and maintain scientific integrity in all congress presentations.
                    </p>
                </div>
            </div>

            <button class="btn btn-warning" type="submit">Save</button>
        </fieldset>
    </form>

    <!-- Flash message untuk feedback -->
    @if(session()->has('message'))
    <div class="alert alert-success mt-4">{{ session('message') }}</div>
    @endif
</div>