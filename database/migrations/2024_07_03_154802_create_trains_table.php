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
            /*  $table->id();
            $table->string('Azienda');
            $table->string('Stazione di partenza');
            $table->string('Stazione di arrivo');
            $table->string('orario di partenza');
            $table->timestamps('orario di arrivo');
            $table->id('codice treno');
            $table->timestamps('numero carrozze');
            $table->id('in orario');
            $table->timestamps('cancellato'); */

            $table->bigIncrements('id');
            $table->string('Azienda');
            $table->string('Stazione di partenza');
            $table->string('Stazione di arrivo');
            $table->timestamp('orario di partenza')->nullable();
            $table->timestamp('orario di arrivo')->nullable();
            $table->bigInteger('codice treno')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->bigInteger('numero carrozze')->unsigned();
            $table->bigInteger('in orario')->unsigned();
            $table->timestamp('cancellato')->nullable();
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
