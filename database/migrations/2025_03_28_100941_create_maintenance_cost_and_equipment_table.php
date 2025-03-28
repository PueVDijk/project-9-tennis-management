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
        Schema::create('maintenance_cost_and_equipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maintenance_activity_idz')->constrained('maintenance_activities')->onDelete('cascade');
            $table->string('used_equipment');
            $table->decimal('cost', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_cost_and_equipment');
    }
};
