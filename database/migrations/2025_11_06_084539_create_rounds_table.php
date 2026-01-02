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
       Schema::create('rounds', function (Blueprint $table) {
           $table->id();
           $table->timestamps();
           $table->softDeletes();
           $table->boolean('is_completed');
           $table->date('start_date');
           $table->integer('round_number');
          //removed for now, changed to below $table->foreignID('tournament_id')->nullable()->constrained('tournaments')->nullOnDelete();
          $table->foreignId('tournament_id')
      ->nullable()
      ->constrained('tournaments')
      ->nullOnDelete();

       });
   }


   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
       Schema::dropIfExists('rounds');
   }
};



