<?php

declare(strict_types=1);

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price');
            $table->string('sku');
            $table->string('slug');
            $table->integer('stock');
            $table->enum('state', [
                Product::STATE_DRAFT,
                Product::STATE_PENDING,
                Product::STATE_PUBLISHED,
                Product::STATE_FINISHED,
            ])->default(Product::STATE_PENDING);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
