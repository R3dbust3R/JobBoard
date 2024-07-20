@props(['job_listing'])

<div class="relative px-8 py-6 rounded-2xl bg-gray-800 border border-gray-700">
    <div class="flex gap-3 items-center mb-2">
        <div class="image w-14 h-14 rounded-full bg-gray-900 border border-gray-700"></div>
        <a class="font-semibold capitalize tracking-tight text-xl text-gray-200 transition-all duration-200 hover:text-amber-500" href="#">
            {{$job_listing->title}}
        </a>
    </div>
    <p class="text-gray-400">
        {{ Str::words($job_listing->description, 24) }}
    </p>
    <hr class="border-gray-600 my-3">
    <p class="text-gray-400">
        <span class="block">{{ $job_listing->location }}</span>
        <span class="block text-amber-500 text-3xl tracking-tighter">${{ $job_listing->salary }}</span>
    </p>
    <span class="px-3 py-[3px] text-xs uppercase absolute right-0 bottom-0 m-1 bg-gray-900 rounded-full">
        {{ $job_listing->created_at->DiffForHumans() }}
    </span>
</div>