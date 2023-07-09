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
        Schema::create('meets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profs_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('meet_title');
            $table->string('target_niveau');
            $table->string('target_cours');
            $table->date('meet_date');
            $table->string('jitsi_meet_url');
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
        Schema::dropIfExists('meets');
    }
};
