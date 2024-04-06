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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->string('website_url');
            $table->unsignedBigInteger('website_owner_id')->nullable(); 
            $table->foreign('website_owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('status', ['Planning', 'Design', 'Staging Development', 'Testing', 'Deployment', 'Production'])->default('Planning');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
