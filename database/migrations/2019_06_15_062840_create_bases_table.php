<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bases', function (Blueprint $table) {
            $table->string('ssn')->unique();
            $table->string('email')->unique();
            
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('street');
            $table->string('city');
            $table->string('distric');

            $table->string('phone1');
            $table->string('phone2');
            $table->string('obranch');
            $table->string('department');
            $table->string('designation');
            $table->string('fixed_allowance');
            $table->string('fixed_deduction');
            $table->boolean('is_OT_allowed');
            $table->string('bank');
            $table->string('bbranch');
            $table->string('acc');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('bases');
    }
}
