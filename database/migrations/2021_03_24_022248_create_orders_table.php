<?php

declare(strict_types=1);

use App\Models\Order;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateOrdersTable extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->enum('state', [
                Order::STATUS_OPEN,
                Order::STATUS_CLOSED,
                Order::STATUS_CANCELED,
            ])->default(Order::STATUS_OPEN);
            $table->foreignId('cart_id')->constrained();
            $table->decimal('total');
            $table->text('notes')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
}
