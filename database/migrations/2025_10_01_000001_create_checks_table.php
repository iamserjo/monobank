<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->string('string_id', 50)->unique();
            $table->string('sender');
            $table->string('recipient');
            $table->integer('amount');
            $table->dateTime('date');
            $table->text('description');
            $table->string('pdf_uuid', 50)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('checks');
    }
};



