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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('tenant_name');
            $table->string('pic_name');
            $table->string('pic_telp');
            $table->string('tenant_floor');
            $table->string('tenant_lot');
            $table->string('tenant_logo');
            $table->string('tenant_category');
            $table->string('tenant_status');
            $table->string('participant_evoucher');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
