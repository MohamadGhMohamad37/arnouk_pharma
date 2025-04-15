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
        Schema::create('category_arnouk_pharma', function (Blueprint $table) {
            $table->id();
            $table->string('name_en'); // اسم باللغة الإنجليزية
            $table->string('name_ar'); // اسم باللغة العربية
            $table->text('description_en'); // وصف باللغة الإنجليزية
            $table->text('description_ar'); // وصف باللغة العربية
            $table->string('image')->nullable(); // صورة واحدة يمكن أن تكون فارغة
            $table->json('gallery_images')->nullable(); // مجموعة صور يمكن أن تكون فارغة
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_arnouk_pharma');
    }

};
