<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clientfk');
            $table->unsignedBigInteger('coursefk');
            $table->date('fin');
            $table->integer('lapso');
            $table->date('fecha_pago_inicio');
            $table->string('estado');
            $table->foreign('clientfk')->references('id')->on('clients');
            $table->foreign('coursefk')->references('id')->on('courses');
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
        Schema::dropIfExists('subscriptions');
    }
}
