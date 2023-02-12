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
        Schema::create('_tamus', function (Blueprint $table) {
            $table->id();
            $table->string('Nama', 100);
            $table->string('No_kamar', 20);
            $table->string('jen_kmr', 100);
            $table->string('no_hp', 100);
            $table->string('jmlh', 20);
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
        Schema::dropIfExists('_tamus');
    }
};
