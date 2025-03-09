<!-- Mobile Header -->
<div class="lg:hidden bg-white flex justify-between items-center p-4 shadow-md sticky top-0 z-50">
    <img src="assets/images/logo/logo-event.png" class="w-full max-w-52" />
    <button id="hamburger" class="text-gray-700 focus:outline-none">
        <i class="fa-solid fa-bars text-2xl hover:text-purple-700 hover:scale-110"></i>
    </button>
</div>
<!-- Offcanvas Menu -->
<div id="offcanvas-menu" class="fixed bg-white top-0 left-0 w-4/5 h-full p-8 offcanvas lg:hidden z-50">
    <button id="close-menu" class="text-gray-700 focus:outline-none mb-4">
        <i class="fa-solid fa-x text-2xl hover:text-purple-700 hover:scale-110"></i>
    </button>
    <div class="mb-8">
        <img src="assets/images/logo/logo-event.png" class="w-full max-w-xs" />
    </div>
    <x-section.menu />
    <h4 class="mt-8 mb-2 text-gray-500 text-base font-normal">Get in touch with us</h4>
    <x-section.contact-icon-m />
</div>
<!-- Sidebar -->
<div class="w-1/5 bg-white shadow-lg border-r-2 p-8 hidden lg:block sticky top-0 h-screen">
    <div class="mb-10">
        <img src="assets/images/logo/logo-event.png" class="w-full max-w-sm" />
    </div>
    <x-section.menu />
    <h4 class="mt-8 mb-2 text-gray-500 text-base font-normal">Get in touch with us</h4>
    <x-section.contact-icon />
</div>