<nav class="space-y-4">
    <ul class="flex flex-col gap-5">
        <li>
            <a href="/" wire:navigate
                class="{{ request()->is('inapras//') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Home
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="{{route('organizing-committee-apras')}}" wire:navigate
                class="{{ request()->is('inapras/organizing-committee') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Organizing
                Committee <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('inapras/faculties') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Faculties
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <!-- <li>
            <a href="#" wire:navigate
                class="{{ request()->is('inapras/topics') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Topics
                <i class="fa-solid fa-angle-right"></i></a>
        </li> -->
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('inapras/program-at-glance') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Program
                at Glance <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('inapras/scientific-schedule') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Scientific
                Schedule <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('inapras/registration') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Registration
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('inapras/accommodation') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Accommodation
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('inapras/submission') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Submission
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="{{route('visiting-apras')}}" wire:navigate
                class="{{ request()->is('inapras/visiting') ? 'text-purple-700' : 'text-gray-700' }} justify-between font-normal hover:text-purple-700 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Venue
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        
    </ul>
</nav>