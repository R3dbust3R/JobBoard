<x-layout title="Home" page="home">

{{-- search --}}
<section class="section-padding relative">
    <div class="container mx-auto">
        <form action="#" method="GET">
            <div class="max-w-2xl mx-auto flex justify-center">
                <input id="search-input" class="search-input" type="text" placeholder="Search For Jobs" name="query">
                <button class="search-btn" type="submit">
                    Search
                </button>
            </div>
        </form>
    </div>
    <div class="search-results" id="search-results"></div>
</section>
{{-- search --}}

{{-- latets employers --}}
<section class="latest-employers section-padding">
    <div class="container mx-auto">

        <x-section-title>the latest employers</x-section-title>

        <div class="grid grid-cols-3 gap-6">
            @foreach ($employers as $employer)
                <x-employer-card :employer="$employer"></x-employer-card>
            @endforeach
        </div>

    </div>  
</section>
{{-- latets employers --}}

{{-- latets job listings --}}
<section class="latest-jobs section-padding">
    <div class="container mx-auto">

        <x-section-title>the latest jobs</x-section-title>

        <div class="grid grid-cols-3 gap-6">
            @foreach ($job_listings as $job_listing)
                <x-job-listing-card :job_listing="$job_listing"></x-job-listing-card>
            @endforeach
        </div>

    </div>  
</section>
{{-- latets job listings --}}



</x-layout>