<!-- Mobile Header -->
<div class="lg:hidden bg-white flex justify-between items-center p-4 shadow-md sticky top-0 z-50">
    <img src="assets/images/logo/logo-event.png" class="w-full max-w-52" />
    <div class="flex items-center gap-2">
        @if (Auth::check())
        <div class="avatar">
            <div class="w-10 rounded-full">
                <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" />
            </div>
        </div>
        @else
        <a href="/login" wire:navigate class="btn btn-primary btn-sm">Sign In</a>
        @endif
        <button id="hamburger" class="text-gray-700 focus:outline-none">
            <i class="fa-solid fa-bars text-2xl hover:text-purple-700 hover:scale-110"></i>
        </button>
    </div>
</div>
<!-- Offcanvas Menu -->
<div id="offcanvas-menu" class="fixed bg-white top-0 left-0 w-4/5 h-full p-8 offcanvas lg:hidden z-50">
    <button id="close-menu" class="text-gray-700 focus:outline-none mb-4">
        <i class="fa-solid fa-x text-2xl hover:text-purple-700 hover:scale-110"></i>
    </button>
    <div class="mb-8">
        <img src="assets/images/logo/logo-event.png" class="w-full max-w-xs" />
    </div>
    <x-section.menu-mobile />
    <h4 class="mt-8 mb-2 text-gray-600 text-base font-normal">Get in touch with us</h4>
    <x-section.contact-icon-m />
</div>
<!-- Sidebar -->
<div class="w-1/5 bg-white shadow-lg border-r border-purple-50 p-8 hidden lg:block sticky top-0 h-screen">
    <div class="mb-10">
        <img src="assets/images/logo/logo-event.png" class="w-full max-w-sm" />
    </div>
    <x-section.menu />
    <div class="flex justify-start items-center gap-1 mt-5">
        @if (Auth::check())
        <div class="avatar">
            <div class="w-10 rounded-full">
                <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" />
            </div>
        </div>
        <div class="collapse">
            <input type="checkbox" />
            <div class="collapse-title">
                <p class="text-sm">Menu</p>
                <p class="text-xs text-gray-500">{{Auth::user()->email}}</p>
            </div>
            <div class="collapse-content text-sm">
                <livewire:auth.logout />
            </div>
        </div>
        @else
        <a href="/login" wire:navigate class="btn btn-primary w-full">Sign In</a>
        @endif
    </div>
    <h4 class="mt-5 mb-2 text-gray-600 text-base font-normal">Get in touch with us</h4>
    <x-section.contact-icon />
</div>