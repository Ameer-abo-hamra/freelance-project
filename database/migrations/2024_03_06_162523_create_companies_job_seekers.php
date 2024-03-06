<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies_job_seekers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("job_seekers_id")->nullable()->references("id")->on("job_seekers");
            $table->foreignId("company_id")->nullable()->references("id")->on("companies");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies_job_seekers');
    }
};
