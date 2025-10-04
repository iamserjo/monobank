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
        Schema::table('checks', function (Blueprint $table) {
            $table->string('recipient_taxid', 65)->nullable()->after('recipient');
            $table->string('recipient_account', 1000)->nullable()->after('recipient_taxid');
            $table->string('recipient_bankname', 64)->nullable()->after('recipient_account');
            $table->date('execution_date')->nullable()->after('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('checks', function (Blueprint $table) {
            $table->dropColumn(['recipient_taxid', 'recipient_account', 'recipient_bankname', 'execution_date']);
        });
    }
};
