<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;

    protected $fillable = ["id", "fullName", "username", "password", "email", "age", "gender"];


    public function posts()
    {

        return $this->hasMany(Post::class, "jobSeeker_id");
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class, "companies_job_seekers", "job_seekers_id", "company_id");
    }

    public function offers()
    {

        return $this->belongsToMany(Offer::Class, "offers_job_seekers", "job_seeker_id", "offer_id");
    }
}
