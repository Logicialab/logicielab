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
        Schema::create('config_sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table
                ->boolean('active')
                ->default(1)
                ->nullable();
            $table->string('url')->nullable();
            $table->unsignedBigInteger('config_key_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_sites');
    }
};
