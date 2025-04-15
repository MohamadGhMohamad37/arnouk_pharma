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
    Schema::create('service_arnouk_pharmas', function (Blueprint $table) {
        $table->id();
        $table->string('name_en');
        $table->string('name_ar');
        $table->text('description_en');
        $table->text('description_ar');
        $table->string('main_image')->nullable();
        $table->text('images')->nullable(); // سيتم حفظها بصيغة JSON
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_arnouk_pharmas');
    }
};
