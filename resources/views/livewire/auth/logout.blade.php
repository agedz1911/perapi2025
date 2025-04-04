<div>
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
    <button class="btn uppercase btn-neutral btn-xs" wire:click="logout">Logout</button>
</div>