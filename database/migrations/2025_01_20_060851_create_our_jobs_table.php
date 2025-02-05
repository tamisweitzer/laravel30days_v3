<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('our_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('salary');
            // Establish a relationship from job to employer.
            // One way to do it.
            // $table->unsignedBigInteger('employer_id');
            // Perhaps a better way to do it.
            $table->foreignIdFor(\App\Models\Employer::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('our_jobs');
    }
};
