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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('age');
            $table->text('bio');
            $table->timestamps();
        });
    }
    /** Untuk FK
     *  $table->unsignedBigInteger('user_id'); -> untuk users.id dia kan type id maka disini unsignedBigInteger kata chatgpt
     * $table->foreign('user_id')->references(nama kolom)->on(nama tabel)->onDelete('cascade')->onUpdate('cascade');
     * atau shortcutnya bisa gini katanya "$table->foreignId('user_id')->constrained()->onUpdate('cascade');
     * 
     * onDelte('cascade') dan onUpdate: misal ada update/delete di users -> id maka tabel ini juga bakal ikut keupdate/delete
     */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
