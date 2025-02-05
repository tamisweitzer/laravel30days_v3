<?php

use App\Models\Venue;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('hours', function (Blueprint $table) {
            $table->id();
            $table->time('testtime');
            $table->foreignIdFor(Venue::class);
            $table->string('sun_start');
            $table->string('sun_end');
            $table->boolean('sun_closed');
            $table->string('mon_start');
            $table->string('mon_end');
            $table->boolean('mon_closed');
            $table->string('tue_start');
            $table->string('tue_end');
            $table->boolean('tue_closed');
            $table->string('wed_start');
            $table->string('wed_end');
            $table->boolean('wed_closed');
            $table->string('thu_start');
            $table->string('thu_end');
            $table->boolean('thu_closed');
            $table->string('fri_start');
            $table->string('fri_end');
            $table->boolean('fri_closed');
            $table->string('sat_start');
            $table->string('sat_end');
            $table->boolean('sat_closed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('hours');
    }
};
