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
        Schema::create('individual_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('mobile_number');
            $table->date('date_of_birth');
            $table->text('profile_picture')->nullable();
            $table->text('about_me')->nullable();
            
            $table->string('country');
            $table->string('location');
            $table->string('address');
            $table->string('city');

            $table->string('school_name')->nullable();
            $table->date('completion_year')->nullable();
            $table->string('professsion');
            

            $table->string('certificates')->nullable();
            $table->date('carrer_commence');
            $table->string('experince_level');

            $table->text('fleet_id');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individuals_profile');
    }
};
