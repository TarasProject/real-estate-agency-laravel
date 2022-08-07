<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {

            $table->increments('id');
            $table->string('type_object')->nullable();
            $table->integer('price')->nullable();
            $table->string('type_currency')->nullable();
            $table->string('type_wolls')->nullable();
            $table->integer('room_number')->nullable();
//          $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('more_information')->nullable();
            $table->string('remember')->default(App\Models\Offer::REMEMBER_FALSE);
            $table->unsignedInteger('user_id')->nullable();
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
        Schema::dropIfExists('offers');
    }
}
