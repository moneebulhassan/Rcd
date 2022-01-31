<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name', 250);
            $table->string('last_name', 250);
            $table->string('sex');
            $table->date('dob');
            $table->json('phone');
            $table->string('address', 50);
            $table->string('email');
            $table->date('date_of_join');
            $table->string('blood_group');

            $table->string('guardian_name');
            $table->string('guardian_address');
            $table->json('guardian_number');

            $table->string('education');
            $table->string('aos'); // area of speacialization
            $table->string('id_num');

            $table->unsignedBigInteger('link_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}
