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
        echo "hello";
        Schema::create('likeables', function (Blueprint $table) {
            $table->primary(['user_id', 'likeable_id', 'likeable_type']);
            $table->unsignedInteger('likeable_id');
            $table->unsignedInteger('user_id');
            $table->string('likeable_type');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likeables');
    }
};
