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
        Schema::table('config_sites', function (Blueprint $table) {
            $table
                ->foreign('config_key_id')
                ->references('id')
                ->on('config_keys')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('config_sites', function (Blueprint $table) {
            $table->dropForeign(['config_key_id']);
        });
    }
};
