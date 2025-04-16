<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('product_arnouk_pharmas', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable(); 
            $table->string('main_image')->nullable();   // صورة واحدة
            $table->json('images')->nullable();         // مجموعة صور
            $table->foreignId('category_arnouk_pharma_id')->constrained('category_arnouk_pharma')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_arnouk_pharmas');
    }
};
