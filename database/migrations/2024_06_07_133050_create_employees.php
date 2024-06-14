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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string("gender");
            $table->string("number", 20);
            $table->date("date_of_birth");
            $table->unsignedBigInteger('role_id');
            $table->foreign("role_id")
                  ->references('id')->on('roles')
                  ->onUpdate('cascade')->onUpdate('cascade');
            $table->longText("address");
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")
                  ->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
