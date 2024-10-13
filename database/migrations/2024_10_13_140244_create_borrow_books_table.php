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
        Schema::create('borrow_books', function (Blueprint $table) {
            $table->foreignId('borrow_id')->constrained(
                table: 'borrows',
                indexName: 'bb_borrow_id',
            );
            $table->foreignId('book_id')->constrained(
                table: 'books',
                indexName: 'bb_book_id',
            );
            $table->date('return_date');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrow_books');
    }
};
