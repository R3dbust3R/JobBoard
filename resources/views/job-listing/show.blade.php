<x-layout :title="$jobListing->title" page="home">
    
{{-- jobListing --}}
<section class="job-listing section-padding">
    <div class="container mx-auto bg-gray-800 p-6 rounded-xl">

        <x-section-title>{{ $jobListing->title }}</x-section-title>

        <p class="text-gray-400 tracking-tight">
            {{ $jobListing->description }}
        </p>

        <ul class="list-none text-gray-400 font-semibold tracking-tight my-4">
            <li>Type: {{ $jobListing->job_type }}</li>
            <li>Location: {{ $jobListing->location }}</li>
        </ul>

        <span class="block text-5xl tracking-tighter text-amber-500 font-bold">
            ${{ $jobListing->salary }}
        </span>

    </div>  
</section>
{{-- jobListing --}}

</x-layout>