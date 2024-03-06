<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    public function get($id)
    {
        $user = JobSeeker::find($id);
        return $user->posts;
    }
}
