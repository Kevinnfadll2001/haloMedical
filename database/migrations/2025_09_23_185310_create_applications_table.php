<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            // Applicant Info
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_initial')->nullable();
            $table->date('date_available')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('phone');
            $table->string('email');
            // $table->date('date_available')->nullable();
            $table->string('social_security_number')->nullable();
            $table->decimal('desired_salary', 12, 2)->nullable();
            $table->string('position_applied_for')->nullable();
            $table->boolean('is_us_citizen')->nullable();
            $table->boolean('is_authorized_to_work')->nullable();

            // Worked for company
            $table->boolean('worked_for_company')->nullable();
            $table->string('worked_for_company_when')->nullable();

            // Felony
            $table->boolean('felony_conviction')->nullable();
            $table->text('felony_explanation')->nullable();

            // Education
            $table->string('high_school')->nullable();
            $table->string('high_school_address')->nullable();
            $table->date('hs_from')->nullable();
            $table->date('hs_to')->nullable();
            $table->boolean('hs_graduated')->nullable();
            $table->string('hs_diploma')->nullable();

            $table->string('college')->nullable();
            $table->string('college_address')->nullable();
            $table->date('college_from')->nullable();
            $table->date('college_to')->nullable();
            $table->boolean('college_graduated')->nullable();
            $table->string('college_degree')->nullable();

            $table->string('other_school')->nullable();
            $table->string('other_address')->nullable();
            $table->date('other_from')->nullable();
            $table->date('other_to')->nullable();
            $table->boolean('other_graduated')->nullable();
            $table->string('other_degree')->nullable();

            // References
            for ($i = 1; $i <= 3; $i++) {
                $table->string("ref{$i}_name")->nullable();
                $table->string("ref{$i}_relationship")->nullable();
                $table->string("ref{$i}_company")->nullable();
                $table->string("ref{$i}_phone")->nullable();
                $table->string("ref{$i}_address")->nullable();
            }

            // Employment (3 jobs)
            for ($i = 1; $i <= 3; $i++) {
                $table->string("job{$i}_company")->nullable();
                $table->string("job{$i}_phone")->nullable();
                $table->string("job{$i}_address")->nullable();
                $table->string("job{$i}_supervisor")->nullable();
                $table->string("job{$i}_title")->nullable();
                $table->decimal("job{$i}_start_salary", 12, 2)->nullable();
                $table->decimal("job{$i}_end_salary", 12, 2)->nullable();
                $table->text("job{$i}_responsibilities")->nullable();
                $table->date("job{$i}_from")->nullable();
                $table->date("job{$i}_to")->nullable();
                $table->text("job{$i}_reason")->nullable();
                $table->boolean("job{$i}_contact_supervisor")->nullable();
            }

            // Military Service
            $table->string('military_branch')->nullable();
            $table->date('military_from')->nullable();
            $table->date('military_to')->nullable();
            $table->string('rank_at_discharge')->nullable();
            $table->string('type_of_discharge')->nullable();

            // Disclaimer & resume
            $table->boolean('agree_disclaimer')->default(false);
            $table->text('resume')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
