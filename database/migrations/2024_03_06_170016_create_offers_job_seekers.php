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
        Schema::create('offers_job_seekers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("job_seeker_id")->references("id")->on("job_seekers");
            $table->foreignId("offer_id")->references("id")->on("offers");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers_job_seekers');
    }
};
