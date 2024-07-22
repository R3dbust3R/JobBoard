<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobListingController extends Controller
{
    public function index() {
        return 1;
    }

    public function search($query) {
        $results = JobListing
            ::where('title', 'LIKE', '%'. $query .'%')
            ->orWhere('job_type', 'LIKE', '%'. $query .'%')
            ->orWhere('location', 'LIKE', '%'. $query .'%')
            ->OrderBy('id', 'desc')->take(10)->get();
        return $results;
    }

    public function show(JobListing $jobListing) {
        return view('job-listing.show', compact('jobListing'));
    }

}
