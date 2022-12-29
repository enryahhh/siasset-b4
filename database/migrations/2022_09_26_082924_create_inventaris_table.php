<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->string('id_inventaris',5)->primary();
            $table->string('id_kategori',5);
            $table->string('id_merek',5);
            $table->string('nama_produk');
            $table->string('foto')->nullable();
            $table->smallInteger('jumlah');
            $table->string('satuan',20);
            $table->date('tanggal_register');
            // $table->boolean('kondisi');
            $table->softDeletes($column = 'deleted_at');
            $table->timestamps();
        });

        Schema::table('inventaris', function(Blueprint $table){
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')
                    ->onDelete('cascade');
            $table->foreign('id_merek')->references('id_merek')->on('merek')
                    ->onDelete('cascade');
            $table->foreignId('id_user')->after("id_merek")->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
}
