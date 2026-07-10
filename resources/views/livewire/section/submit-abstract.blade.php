<div>
    <form wire:submit="save">
        <fieldset class="fieldset rounded-box w-full max-w-4xl border border-primary p-4">
            <legend class="fieldset-legend">Submit Abstract</legend>

            <div class="mb-4">
                <label class="label font-bold">Faculty</label>
                <p class="text-gray-600">{{ $facultyName }}</p>
            </div>

            @foreach($abstracts as $index => $abstract)
            <div class="mb-6 @if($loop->last) @else border-b border-gray-200 pb-6 @endif">
                <div class="flex justify-between items-center mb-2">
                    <label class="label font-bold">Abstract #{{ $index + 1 }}</label>
                    @if($index > 0)
                    <button type="button" wire:click="removeAbstract({{ $index }})" class="btn btn-sm btn-error text-white">
                        <i class="fa fa-trash"></i> Remove
                    </button>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="label">Title</label>
                    <input type="text" wire:model="abstracts.{{ $index }}.title" class="input w-full max-w-4xl" placeholder="Title" />
                    @error('abstracts.'.$index.'.title')
                    <span class="text-error text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="label">Abstract File</label>
                    <input type="file"
                        wire:model="abstracts.{{ $index }}.file"
                        class="file-input w-full max-w-4xl"
                        accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                        @if(!$abstract['file_path']) required @endif />
                    <p class="text-xs text-gray-500 mt-1">Allowed formats: PDF, DOC, DOCX (Max 3MB)</p>

                    @if($abstract['file_path'])
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">Current file:
                            <a href="{{ asset('storage/' . $abstract['file_path']) }}" target="_blank" class="text-primary underline">
                                {{ basename($abstract['file_path']) }}
                            </a>
                        </p>
                    </div>
                    @endif

                    @error('abstracts.'.$index.'.file')
                    <span class="text-error text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            @endforeach

            <button type="button" wire:click="addAbstract" class="btn btn-warning mt-4">
                <i class="fa fa-add"></i> Add More Abstract
            </button>
        </fieldset>


        <div class="modal-action">
            <form method="dialog">
                <button type="button" class="btn text-white bg-purple-700 hover:bg-[#9E1F63]" wire:click="save">
                    <i class="fa fa-save"></i> Save
                </button>
                <button type="button" class="btn btn-error" onclick="this.closest('dialog').close()">
                    <i class="fa fa-xmark"></i> Close
                </button>
            </form>
        </div>
    </form>
</div>