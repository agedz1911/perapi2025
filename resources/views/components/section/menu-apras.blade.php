<ul class="flex gap-6 uppercase">
    <li>
        <a href="{{route('home-apras')}}" wire:navigate
            class="{{ request()->is('apras/home') ? 'text-[#F9C20A]' : 'text-white' }} hover:text-amber-500 hover:underline ">Home
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('apras/organizing-committee') || request()->is('apras/faculties') || request()->is('apras/welcome-messages') ? 'text-[#F9C20A]' : 'text-white' }} hover:cursor-pointer hover:text-amber-500">
            Congress Information <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <!-- <li>
                <a href="/welcome-messages" wire:navigate
                    class="{{ request()->is('apras/welcome-messages') ? 'text-[#F9C20A]' : '' }} justify-between hover:text-amber-500 ">Welcome Messages <i class="fa-solid fa-angle-right"></i></a>
            </li> -->
            <li>
                <a href="{{route('organizing-committee-apras')}}" wire:navigate
                    class="{{ request()->is('apras/organizing-committee') ? 'text-[#F9C20A]' : '' }} justify-between hover:text-amber-500 ">Organizing
                    Committee <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('apras/faculties') ? 'text-[#F9C20A]' : '' }} justify-between hover:text-amber-500 ">Faculties
                    <i class="fa-solid fa-angle-right"></i></a>
            </li>
        </ul>
    </div>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('apras/program-at-glance') || request()->is('apras/scientific-schedule') ? 'text-[#F9C20A]' : 'text-white' }} hover:cursor-pointer hover:text-amber-500">
            Scientific Program <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="{{route('program-at-glance-apras')}}" wire:navigate
                    class="{{ request()->is('apras/program-at-glance') ? 'text-[#F9C20A]' : '' }} justify-between hover:text-amber-500">Program
                    at Glance <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('apras/scientific-schedule') ? 'text-[#F9C20A]' : '' }} justify-between hover:text-amber-500">Scientific
                    Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>


    <li>
        <a href="{{route('registration-apras')}}" wire:navigate
            class="{{ request()->is('apras/registration') ? 'text-[#F9C20A]' : 'text-white' }} hover:text-amber-500 hover:underline">Registration
        </a>
    </li>
    <li>
        <a href="{{route('accommodation-apras')}}" wire:navigate
            class="{{ request()->is('apras/accommodation') ? 'text-[#F9C20A]' : 'text-white' }} hover:text-amber-500 hover:underline">Accommodation
        </a>
    </li>
    <li>
        <a href="{{route('submission-apras')}}" wire:navigate
            class="{{ request()->is('apras/submission') ? 'text-[#F9C20A]' : 'text-white' }} hover:text-amber-500 hover:underline">Submission
        </a>
    </li>
    
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('apras/visiting')  || request()->is('apras/social-program')  ? 'text-[#F9C20A]' : 'text-white' }} hover:cursor-pointer hover:text-amber-500">
            Visiting <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="{{route('visiting-apras')}}" wire:navigate
                    class="{{ request()->is('visiting') ? 'text-[#F9C20A]' : '' }} justify-between hover:text-amber-500">
                    Venue <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="{{route('tour-apras')}}" wire:navigate
                    class="{{ request()->is('apras/social-program') ? 'text-[#F9C20A]' : '' }} justify-between hover:text-amber-500">Tour <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>
</ul>