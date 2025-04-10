<!-- Mobile Header -->
<div class="lg:hidden bg-white flex justify-between items-center p-4 shadow-md sticky top-0 z-50">
    <img src="assets/images/logo/logo-event.png" class="w-full max-w-52" />
    <div class="flex items-center gap-2">
        @if (Auth::check())
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="">
                <div class="avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" />
                    </div>
                </div>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                <li><a>Dashboard</a></li>
                <li><a>
                        <livewire:auth.logout />
                    </a>
                </li>
            </ul>
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
    <div class="flex justify-between items-center border-t border-dashed border-gray-400 pt-2 gap-1 mt-5">
        @if (Auth::check())
        <a href="/dashboard" class="{{ request()->is('dashboard') || request()->is('profile') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full " wire:navigate>
            Dashboard
        </a>
        <livewire:auth.logout />
        @else
        <a href="/login" wire:navigate class="btn btn-primary w-full">Sign In</a>
        @endif
    </div>
    <h4 class="mt-5 mb-2 text-gray-600 text-base font-normal">Get in touch with us</h4>
    <x-section.contact-icon />
</div>