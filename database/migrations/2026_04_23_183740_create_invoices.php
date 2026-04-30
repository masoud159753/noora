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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('sales_rep_id')->nullable()->constrained('sales_representatives');
            $table->foreignId('created_by')->constrained('users');
        
            $table->string('invoice_number')->unique();
            $table->decimal('total', 12, 2)->default(0);
        
            $table->enum('status', ['draft', 'paid', 'unpaid', 'partial']);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
