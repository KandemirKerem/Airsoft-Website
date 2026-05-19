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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // Yorumu hangi kullanıcı yaptı?
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // Yorum hangi topluluk yazısına yapıldı?
            $table->foreignId('post_id')->constrained()->onDelete('cascade');

            $table->text('comment'); // Yorumun kendisi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
