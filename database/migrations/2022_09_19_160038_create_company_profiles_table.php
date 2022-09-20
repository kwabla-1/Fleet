<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_profiles', function (Blueprint $table) {
            $table->string('company_name');
            $table->string('postal_address');
            $table->string('telephone_no');
            $table->string('contact_person');
            $table->string('company_url');
            $table->string('tax_no')->nullable();
            $table->string('corperate_email')->nullable();
            $table->number('no_years_in_business');
            $table->number('permanent_workers');
            $table->number('estimated_annual_revenue');
            $table->number('year_established');
            $table->string('type_of_organization');
            $table->string('type_of_business');
            $table->string('inhouse_languages');
            $table->string('licence_image');
            $table->string('company_size');
            $table->string('specilaization');
            $table->text('summary_of_business_activities');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_profiles', function (Blueprint $table) {
            //
        });
    }
};
