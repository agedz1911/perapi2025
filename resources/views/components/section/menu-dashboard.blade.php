<ul class="menu w-full menu-horizontal rounded-box border border-gray-400">
    <li>
        <a wire:navigate href="/dashboard" class="{{ request()->is('dashboard') ? 'text-purple-700' : 'text-gray-700' }}">
            <i class="fa fa-home"></i>
            Home Dashboard
        </a>
    </li>
    <li>
        <a wire:navigate href="/profile" class="{{ request()->is('profile') ? 'bg-purple-700 text-white' : 'text-gray-700' }}">
            <i class="fa fa-user"></i>
            Profile
        </a>
    </li>
    <li>
        <a>
            Registration
            <span class="badge badge-xs badge-warning">NEW</span>
        </a>
    </li>
    <li>
        <a>
            Abstracts
            <span class="badge badge-xs badge-info">tes</span>
        </a>
    </li>
</ul>