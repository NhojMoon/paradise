<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cottages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('cottage_or_lodge');
            $table->string('status');
            $table->string('price_for_rent');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('cottages');
    }
};