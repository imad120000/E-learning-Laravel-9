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
        Schema::create('demandecours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etds_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('cours_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('status')->default('in Progress');;
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
        Schema::dropIfExists('demandecours');
    }
};
