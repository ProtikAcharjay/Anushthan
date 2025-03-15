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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manager_id')->constrained('users');
            $table->string('theme')->default('basic');
            $table->boolean('adult_flag')->default(false);
            $table->string('event_name');
            $table->text('event_title');
            $table->text('event_description');
            $table->string('image')->nullable();
            $table->enum('status', ['pending', 'active'])->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
