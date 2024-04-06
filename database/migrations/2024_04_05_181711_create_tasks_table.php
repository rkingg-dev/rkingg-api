<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('website_id'); 
            $table->foreign('website_id')->references('id')->on('websites')->onDelete('cascade');
            $table->string('task_title');
            $table->text('task_description');
            $table->timestamp('task_created')->useCurrent();
            $table->timestamp('task_last_edit')->useCurrent();
            $table->enum('status', ['To Do', 'In Progress', 'Waiting', 'Review Request', 'Done'])->default('To Do');
            $table->unsignedBigInteger('task_author');
            $table->foreign('task_author')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
}
