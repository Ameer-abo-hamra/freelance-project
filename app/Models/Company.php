<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ["companyName", "id", "companySpecialization", "incorporationDate", "employeeNumber"];

    public function posts()
    {

        return $this->hasMany(Post::class, "id");
    }

    public function offers()
    {

        return $this->hasMany(Offer::class, "id");
    }

    public function jobSeekers()
    {
        return $this->belongsToMany(JobSeeker::Class, "companies_job_seekers", "company_id", "job_seekers_id");
    }
}
