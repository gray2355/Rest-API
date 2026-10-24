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
    public function up(): void
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->foreignId('pertunjukan_id')
              ->constrained('pertunjukans')
              ->cascadeOnDelete();
        $table->string('ticket_category');
        $table->unsignedInteger('quantity');
        $table->decimal('ticket_price', 12, 2);
        $table->decimal('total_price', 12, 2);
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
        Schema::dropIfExists('bookings');
    }
};
