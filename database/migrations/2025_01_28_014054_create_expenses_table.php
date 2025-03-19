<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('cash_transactions_id');
            $table->string('title');
            $table->integer('company_id');
            $table->integer('bags')->default(0);
            $table->decimal('cash_payment', 15, 2)->default(0);
            $table->string('vehicle_id');
            $table->enum('expense_type', ['diesel', 'misc', 'carriage', 'fare']);
            $table->decimal('amount', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
