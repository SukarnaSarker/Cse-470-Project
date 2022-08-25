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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('name');
            $table->string('fathername');
            $table->string('mothername');
            $table->text('presentaddress');
            $table->string('Village');
            $table->string('Thana');
            $table->string('Upazila');
            $table->string('District');
            $table->string('email');
            $table->string('phone');
            $table->string('school');
            $table->string('ssc');
            $table->string('college');
            $table->string('hsc');
            $table->string('university');
            $table->string('cgpa');
            $table->string('h1');
            $table->string('h2');
            $table->string('studying');
            $table->string('one');
            $table->string('two');
            $table->string('three');
            $table->string('four');
            $table->string('interest');
            $table->string('salaryinterest');
            $table->string('workinghourinterest');
            $table->string('workplaceinterest');
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
        Schema::dropIfExists('students');
    }
};
