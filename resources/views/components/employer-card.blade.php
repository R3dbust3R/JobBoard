@props(['employer'])

<div class="relative px-8 py-6 rounded-2xl bg-gray-800 border border-gray-700">
    <div class="flex gap-3 items-center mb-2">
        <div class="image w-14 h-14 rounded-full bg-gray-900 border border-gray-700"></div>
        <a class="font-semibold capitalize tracking-tight text-xl text-gray-200 transition-all duration-200 hover:text-amber-500" href="#">
            {{$employer->company_name}}
        </a>
    </div>
    <p class="text-gray-400">
        {{ Str::words($employer->description, 24) }}
    </p>
    <span class="px-3 py-[3px] text-xs uppercase absolute right-0 bottom-0 m-1 bg-gray-900 rounded-full">
        {{ $employer->created_at->DiffForHumans() }}
    </span>
</div>