<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_admissions', function (Blueprint $table) {
            $table->id();
            $table->string('faculty');
            $table->string('terms');
            $table->string('subject1');
            $table->string('subject2')->nullable();
            $table->string('subject3')->nullable();
            $table->string('subject4')->nullable();
            $table->string('name');
            $table->string('parmanent');
            $table->string('temporary');
            $table->string('mobile');
            $table->date('dob');
            $table->string('father');
            $table->string('fathermobile');
            $table->string('guardian');
            $table->string('contact');
            $table->string('photo');
            $table->string('slip');
            $table->string('documents');
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
        Schema::dropIfExists('online_admissions');
    }
}
