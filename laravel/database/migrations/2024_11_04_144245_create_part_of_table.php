<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('part_of', function (Blueprint $table) {
            $table->foreign('volunteer_id')->references('id')->on('volunteers');
            $table->foreign('opportunity_id')->references('id')->on('vol_opportunity');
            $table->primary(['volunteer_id', 'opportunity_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_of');
    }
};
