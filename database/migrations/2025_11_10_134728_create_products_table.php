<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pdescription');
            $table->decimal('price', total: 10, places: 2);
            $table->integer('stock');
            $table->string('others');

            /*Relacionar las tablas categoria, marca */
            $table->foreignId('categories_id')
                  ->constrained('categories')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();

            $table->foreignId(column: 'brands_id')
                  ->constrained('brands')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
