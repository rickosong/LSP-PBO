<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbtransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtransaksi', function (Blueprint $table) {
            $table->id();
            $table->date('tgltransaksi');
            $table->foreignId('user_id')->constrained('tbuser')->onDelete('cascade');
            $table->foreignId('paketcuci_id')->constrained('tbpaketcuci');
            $table->string('namapakettambahan', 100);
            $table->integer('totalharga');
            $table->integer('pembayaran');
            $table->integer('kembalian');
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
        Schema::dropIfExists('tbtransaksi');
    }
}
