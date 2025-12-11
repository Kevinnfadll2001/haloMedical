<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('applications', function (Blueprint $table) {
        $table->dropColumn([
            'job1_company', 'job1_phone', 'job1_address', 'job1_supervisor', 'job1_title',
            'job1_start_salary', 'job1_end_salary', 'job1_responsibilities', 'job1_from', 'job1_to', 'job1_reason', 'job1_contact_supervisor',
            'job2_company', 'job2_phone', 'job2_address', 'job2_supervisor', 'job2_title',
            'job2_start_salary', 'job2_end_salary', 'job2_responsibilities', 'job2_from', 'job2_to', 'job2_reason', 'job2_contact_supervisor',
            'job3_company', 'job3_phone', 'job3_address', 'job3_supervisor', 'job3_title',
            'job3_start_salary', 'job3_end_salary', 'job3_responsibilities', 'job3_from', 'job3_to', 'job3_reason', 'job3_contact_supervisor',
            'ref1_name', 'ref1_relationship', 'ref1_company', 'ref1_phone', 'ref1_address',
            'ref2_name', 'ref2_relationship', 'ref2_company', 'ref2_phone', 'ref2_address',
            'ref3_name', 'ref3_relationship', 'ref3_company', 'ref3_phone', 'ref3_address',
        ]);
    });
}

public function down()
{
    Schema::table('applications', function (Blueprint $table) {
        // re-add columns if rolled back
        $table->string('job1_company')->nullable();
        // (and so on for the rest if rollback is needed)
    });
}

};
