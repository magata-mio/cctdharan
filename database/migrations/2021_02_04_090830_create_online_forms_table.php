<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_forms', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('pradesh');
            $table->string('district');
            $table->string('municipality');
            $table->string('ward');
            $table->string('block');
            $table->string('tole');
            $table->string('relation')->nullable();
            $table->string('occupation')->nullable();
            $table->string('mobile')->nullable();
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->string('e');
            $table->string('f');
            $table->string('g');
            $table->string('h');
            $table->string('i');
            $table->string('j');
            $table->string('k');
            $table->string('l');
            $table->string('m');
            $table->string('n');
            $table->string('o');
            $table->string('p');
            $table->string('slcmarksheet');
            $table->string('slccharacter');
            $table->string('ptranscript')->nullable();
            $table->string('pcharacter')->nullable();
            $table->string('citizenship');
            $table->string('ppphoto');
            $table->string('bankslip');
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
        Schema::dropIfExists('online_forms');
    }
}
