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
    Schema::create('pertunjukans', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('location');
        $table->string('date');
        $table->string('time');
        $table->unsignedInteger('price_domestic');
        $table->unsignedInteger('price_foreign');
        $table->unsignedInteger('quota')->default(0);
        $table->text('description');
        $table->string('image')->nullable();
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
        Schema::dropIfExists('pertunjukans');
    }
};
