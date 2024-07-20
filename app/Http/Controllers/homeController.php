<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\JobListing;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {
        $employers = Employer::paginate(6);
        $job_listings = JobListing::paginate(6);
        return view('index', compact('employers', 'job_listings'));
    }
}
