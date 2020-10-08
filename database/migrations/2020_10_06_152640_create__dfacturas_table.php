<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDfacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_dfacturas', function (Blueprint $table) {
            $table->bigIncrements('num_detalle');
            $table->unsignedBigInteger('id_factura');
            $table->foreign('id_factura')->references('num_fac')->on('facturas');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->integer('cantidad');
            $table->decimal('precio',2);
            $table->timestamps();
        });

        DB::unprepared('ALTER TABLE `_dfacturas` DROP PRIMARY KEY, ADD PRIMARY KEY (  `num_detalle` ,  `id_factura` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_dfacturas');
    }
}
