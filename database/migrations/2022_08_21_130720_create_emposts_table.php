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
        Schema::create('emposts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('companyname');
            $table->string('email');
            $table->string('phone');
            $table->string('house');
            $table->string('road');
            $table->string('thana');
            $table->string('district');
            $table->string('designation');
            $table->string('type');
            $table->string('parttime_or_fulltime');
            $table->string('salary');
            $table->string('r1');
            $table->string('r2');
            $table->string('r3');
            $table->string('hour');          
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
        Schema::dropIfExists('emposts');
    }
};
