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
        Schema::table('users',function (Blueprint $table)
        {
            $table->after('password',function ($table)
            {
                $table->string('location');
                $table->date('date_of_birth')->nullable();
                $table->string('address');
                $table->string('city');
                $table->string('country');
                $table->text('about_me');
                //EXPERIENC DETAILS
                $table->string('profession');
                $table->string('experience_level');
                $table->date('carrer_commence')->nullable();
                $table->string('language');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function (Blueprint $table)
        {
           $table->after('password',function ($table)
           {
                $table->dropColumn('location');
                $table->dropColumn('location');
                $table->dropColumn('date_of_birth');
                $table->dropColumn('address');
                $table->dropColumn('city');
                $table->dropColumn('country');
                $table->dropColumn('about_me');
                //EXPERIENC DETAILS
                $table->dropColumn('profession');
                $table->dropColumn('experience_level');
                $table->dropColumn('carrer_commence');
                $table->dropColumn('language');
           });
        });
    }
};
