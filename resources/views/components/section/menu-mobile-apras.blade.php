<nav class="space-y-4">
    <ul class="flex flex-col gap-5">
        <li>
            <a href="{{route('home-apras')}}" wire:navigate
                class="{{ request()->is('/') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Home
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="{{route('organizing-committee-apras')}}" wire:navigate
                class="{{ request()->is('organizing-committee') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Organizing
                Committee <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('faculties') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Faculties
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <!-- <li>
            <a href="#" wire:navigate
                class="{{ request()->is('topics') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Topics
                <i class="fa-solid fa-angle-right"></i></a>
        </li> -->
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('program-at-glance') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Program
                at Glance <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('scientific-schedule') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Scientific
                Schedule <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="{{route('registration-apras')}}" wire:navigate
                class="{{ request()->is('registration') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Registration
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('accommodation') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Accommodation
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('submission') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Submission
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="{{route('visiting-apras')}}" wire:navigate
                class="{{ request()->is('visiting') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Venue
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="{{route('tour-apras')}}" wire:navigate
                class="{{ request()->is('apras/social-program') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Tour
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        
    </ul>
</nav>