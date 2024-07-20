<x-layout title="Home" page="home">

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