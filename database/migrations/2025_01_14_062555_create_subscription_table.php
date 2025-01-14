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
        Schema::create('subscription', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 255);
            $table->string('LastName', 255);
            $table->string('CorporateEmail', 255)->unique();
            $table->string('JobTitle', 255);
            $table->string('CompanyName', 255);
            $table->enum('Industry', ['IT', 'Computer', 'Network']);
            $table->string('PhoneNumber', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};
