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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // customer_id, status, subtotal,discount_total,tax_total, shipping_total,grand_total,placed_at
            $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
            $table->enum('status', ['pending', 'processing', 'shipped', 'delivered', 'cancelled']);
            $table->decimal('subtotal', 10, 2);
            $table->decimal('discount_total', 10, 2);
            $table->decimal('tax_total', 10, 2);
            $table->decimal('shipping_total', 10, 2);
            $table->decimal('grand_total', 10, 2);
            $table->timestamp('placed_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
