<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Company;
use App\Models\JobSeeker;
use App\Models\Offer;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Company::create([
            "companyName" => "google",
            "companySpecialization" => "internet",
            "incorporationDate" => "2024-03-12",
            "employeeNumber" => 10,
        ]);
        JobSeeker::Create([
            "fullName" => "Ameer",
            "username" => "Ameer",
            "password" => "12345678",
            "email" => "a@a.com",
            "gender" => "male",
            "age" => 20

        ]);

        Post::create([
            "jobSeeker_id" => 1,
            "category" => "science",
            "body" => "this is just for testing "

        ]);
        Post::create([
            "companies_id" => 1,
            "category" => "math",
            "body" => "this is just for testing "
        ]);

        Offer::create([
            "company_id" => 1,
            "category" => "IT",
            "requirements" => "HTML & JS & CSS",
            "deadline_Date" => "2024-03-12",
        ]);
        Comment::create([
            "post_id" => 1,
            "body" => "this post was very interesting"
        ]);


        $job_seekers = JobSeeker::all();
        $companies = Company::all();
        $offers = Offer::all();
        foreach ($job_seekers as $job) {

            foreach ($companies as $com) {
                $job->companies()->attach($com->id);
            }
        }
        foreach ($job_seekers as $job) {

            foreach ($offers as $off) {
                $job->offers()->attach($off->id);
            }
        }
    }
}
