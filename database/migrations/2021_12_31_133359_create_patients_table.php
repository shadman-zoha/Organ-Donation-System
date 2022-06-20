<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->string('IC_Number')->primary();
            $table->integer('id')->unsigned()->unique();
            //$table->id();
            $table->string('name');
            // $table->string('email')->unique();
            //$table->string('IC_Number')->unique();
            $table->integer('Age');
            $table->date('Date_Of_Birth');
            $table->string('Phone_Number');
            $table->string('avatar')->default('./assets/dist/images/default.jpg');
            $table->string('Address');
            $table->string('Weight');
            $table->string('Blood_Group');
            $table->string('Secret_Question');
            $table->string('QuesAnswer');
            $table->string('Family_Contact');
            $table->string('Family_Contact_Name');
            $table->string('Gender');
        
            // $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
