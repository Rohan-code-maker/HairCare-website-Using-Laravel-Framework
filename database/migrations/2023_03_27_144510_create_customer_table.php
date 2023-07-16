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
        Schema::create('customer', function (Blueprint $table) {
            $table->id(); //primary key for creating table
            $table->string('name',100);
            $table->string('email',50);
            $table->date('date');
            $table->time('time');
            $table->enum('work',["Professional Makeup","Manicure Pedicure","Body Treatment","Haircut and Coloring"]);
            $table->string('phone',10);
            $table->text('message');
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
        Schema::dropIfExists('customer');
    }
};
