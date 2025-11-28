<div>
    <ul class="flex flex-col gap-2">
        @foreach ($importantDates as $date)
        <li class="border-b border-violet-900 pb-3">
            <a href="javascript:void"
                class="justify-between font-normal hover:text-[#7F3F80] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-purple-600 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">
                {{$date->title}} : {{
                $date->date_end
                ? \Carbon\Carbon::parse($date->date)->format('l, d F') . ' - ' .
                \Carbon\Carbon::parse($date->date_end)->format('l, d F, Y')
                : \Carbon\Carbon::parse($date->date)->format('l, d F, Y')
                }}
            </a>
        </li>
        @endforeach
    </ul>
</div>