<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqOrgansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req_organs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ic');
            $table->string('organ_name');
            $table->string('hospital_name');
            $table->string('health_condition');
            $table->string('diseases');
            $table->string('transplant_before');
            $table->string('condition');
            $table->string('Blood_Group');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('req_organs');
    }
}
