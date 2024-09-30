<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // String type, required
            $table->decimal('price', 10, 2); // Decimal type, required with precision
            $table->text('description')->nullable(); // Optional text field
            $table->boolean('status')->default(true); // Boolean status, defaults to true
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('products'); // Drop the products table if the migration is rolled back
    }
}
