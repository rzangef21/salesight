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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();

            $table->string('invoice_no', 10);
            $table->string('customer_id', 10);
            $table->string('gender', 10);
            $table->unsignedTinyInteger('age');
            $table->string('category', 30);
            $table->unsignedTinyInteger('quantity');
            $table->decimal('price', 8, 2);
            $table->string('payment_method', 20);
            $table->date('invoice_date');
            $table->string('shopping_mall', 30);
            $table->decimal('total_sales', 10, 2);

            $table->timestamps();

            $table->index('invoice_date');
            $table->index('shopping_mall');
            $table->index('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
