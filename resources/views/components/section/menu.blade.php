<ul class="flex gap-6 uppercase">
    <li>
        <a href="/" wire:navigate
            class="{{ request()->is('/') ? 'text-[#c01e8f]' : 'text-white' }} hover:text-violet-700 hover:underline ">Home
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('organizing-committee') || request()->is('faculties') || request()->is('welcome-messages') ? 'text-[#c01e8f]' : 'text-white' }} hover:cursor-pointer hover:text-violet-700">
            Congress Information <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/welcome-messages" wire:navigate
                    class="{{ request()->is('welcome-messages') ? 'text-[#c01e8f]' : '' }} justify-between hover:text-violet-900 ">Welcome Messages <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/organizing-committee" wire:navigate
                    class="{{ request()->is('organizing-committee') ? 'text-[#c01e8f]' : '' }} justify-between hover:text-violet-900 ">Organizing
                    Committee <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('faculties') ? 'text-[#c01e8f]' : '' }} justify-between hover:text-violet-900 ">Faculties
                    <i class="fa-solid fa-angle-right"></i></a>
            </li>
        </ul>
    </div>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('program-at-glance') || request()->is('scientific-schedule') ? 'text-[#c01e8f]' : 'text-white' }} hover:cursor-pointer hover:text-violet-700">
            Scientific Program <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/program-at-glance" wire:navigate
                    class="{{ request()->is('program-at-glance') ? 'text-[#c01e8f]' : '' }} justify-between hover:text-violet-900">Program
                    at Glance <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('scientific-schedule') ? 'text-[#c01e8f]' : '' }} justify-between hover:text-violet-900">Scientific
                    Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>


    <li>
        <a href="/registration" wire:navigate
            class="{{ request()->is('registration') ? 'text-[#c01e8f]' : 'text-white' }} hover:text-violet-700 hover:underline">Registration
        </a>
    </li>
    <li>
        <a href="#" wire:navigate
            class="{{ request()->is('accommodation') ? 'text-[#c01e8f]' : 'text-white' }} hover:text-violet-700 hover:underline">Accommodation
        </a>
    </li>
    <li>
        <a href="#" wire:navigate
            class="{{ request()->is('submission') ? 'text-[#c01e8f]' : 'text-white' }} hover:text-violet-700 hover:underline">Submission
        </a>
    </li>
    <li>
        <a href="/visiting" wire:navigate
            class="{{ request()->is('visiting') ? 'text-[#c01e8f]' : 'text-white' }} hover:text-violet-700 hover:underline">Venue
        </a>
    </li>
</ul>