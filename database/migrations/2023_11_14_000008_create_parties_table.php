<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('content')->nullable();
            $table->unsignedBigInteger('partie_tag_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parties');
    }
};
