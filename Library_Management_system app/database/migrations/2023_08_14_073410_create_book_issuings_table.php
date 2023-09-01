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
        Schema::create('book_issuings', function (Blueprint $table) {

            Schema::disableForeignKeyConstraints();

            $table->ulid('id')->primary();
            $table->foreignUlid('User_id')->references('user_id')->on('users');
            $table->foreignId('Book_id')->references('id')->on('books');
            

            $table->enum('Book_status',['Returned','Lost','Borrowed','Requested']);

            $table->date('Return_date');

            #date borrowed will use the create_at timestamp
            $table->timestamps();
        });


        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_issuings');
    }
};
