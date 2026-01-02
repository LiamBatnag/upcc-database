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
       Schema::create('pairings', function (Blueprint $table) {
           $table->id();
           $table->timestamps();
           $table->softDeletes();
           $table->integer('board_number');
           $table->string('result');
           $table->text('game_pgn');
           $table->foreignID('player_id_white')->constrained('players');
           $table->foreignID('player_id_black')->constrained('players');
           $table->foreignId('round_id')->nullable()->constrained('rounds');
       });
   }


   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
       Schema::dropIfExists('pairings');
   }
};



