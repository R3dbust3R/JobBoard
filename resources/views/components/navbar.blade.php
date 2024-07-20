@props(['page'])

<nav class="py-3">
    <div class="container m-auto flex justify-between items-center">
        <a class="font-bold tracking-tighter text-2xl" href="{{ route('home.index') }}">Job<span class="text-amber-500">Board</span></a>
        <ul class="flex list-none">
            <li><a class="{{ $page == 'home' ? 'text-amber-500' : 'text-gray-400' }} block tracking-tight text-lg px-2 py-3" href="{{ route('home.index') }}">Home</a></li>
            <li><a class="{{ $page == 'latest-jobs' ? 'text-amber-500' : 'text-gray-400' }} block tracking-tight text-lg px-2 py-3" href="{{ route('job-listing.index') }}">Latest Jobs</a></li>
            <li><a class="{{ $page == 'employers' ? 'text-amber-500' : 'text-gray-400' }} block tracking-tight text-lg px-2 py-3" href="{{ route('employer.index') }}">Employers</a></li>
            <li><a class="{{ $page == 'profile' ? 'text-amber-500' : 'text-gray-400' }} block tracking-tight text-lg px-2 py-3" href="{{ route('user.profile') }}">Profile</a></li>
            <li><a class="{{ $page == 'settings' ? 'text-amber-500' : 'text-gray-400' }} block tracking-tight text-lg px-2 py-3" href="{{ route('user.settings') }}">Settings</a></li>
            {{-- <li><a class="block tracking-tight text-lg px-2 py-3" href="{{ route('auth.login') }}">Login</a></li>
            <li><a class="block tracking-tight text-lg px-2 py-3" href="{{ route('auth.logout') }}">Logout</a></li> --}}
        </ul>
    </div>
</nav>