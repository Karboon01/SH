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
        Schema::create('events_person', function (Blueprint $table) {
            $table->id();
            $table->string('rap_name');
            $table->string('name');
            $table->string('surname');
            $table->string('date_of_birth');
            $table->string('email');
            $table->string('phone');
            $table->string('date');
            $table->string('zip');
            $table->string('address');
            $table->string('city');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
