<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('app_employments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained('applications')->onDelete('cascade');
            $table->string('company')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('title')->nullable();
            $table->decimal('start_salary', 12, 2)->nullable();
            $table->decimal('end_salary', 12, 2)->nullable();
            $table->text('responsibilities')->nullable();
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->text('reason')->nullable();
            $table->boolean('contact_supervisor')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('app_employments');
    }
};
