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
        schema::create('person',function(Blueprint $table){
            $table->bigIncrements('personal_id');
            $table->string('FirstName',30);
            $table->string('LastName',30);
            $table->string('e_mail',30);
            $table->string('phone_number',10)->nullable();
            $table->string('user_name',50);
            $table->string('password',50);     
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
