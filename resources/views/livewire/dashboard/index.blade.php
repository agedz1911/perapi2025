<div class="w-full lg:w-11/12">
    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="w-full flex justify-center items-center">
            <x-section.menu-dashboard />
        </div>
        
        <div class="flex items-center gap-1 hover:cursor-pointer">
            <div class="avatar">
                <div class="w-10 rounded-full">
                    <img src="https://ui-avatars.com/api/?name={{$user->name}}" />
                </div>
            </div>
            <p class="font-semibold">{{$user->name}}</p>
            <p class="font-semibold">{{$user->email}}</p>
        </div>
        <p>
            Title: 
            {{$profile->title ?? ''}}
        </p>
    </section>
</div>