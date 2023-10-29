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
        Schema::create('inputs_froms', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->string('placeholder');
            $table->foreignId('recruitment_id')->constrained('recruitments')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inputs_froms');
    }
};
