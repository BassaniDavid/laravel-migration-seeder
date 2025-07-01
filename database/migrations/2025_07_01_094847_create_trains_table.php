<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->increments('id');
            $table->string("azienda", 50);
            $table->string("stazione di partenza", 50);
            $table->string("stazione di arrivo", 50);
            $table->dateTime("partenza");
            $table->dateTime("arrivo");
            $table->string("codice treno", 20);
            $table->string("numero carrozze", 4);
            $table->boolean("in orario");
            $table->boolean("cancellato");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
