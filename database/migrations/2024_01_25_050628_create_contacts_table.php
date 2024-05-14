<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
Schema::create('contacts', function (Blueprint $table)
{
    $table->id();
    $table->string('name');
    $table->string('email');
     $table->string('phone');
     $table->longText('message');
    $table->timestamps();
});
}
public function down(): void
{
schema::dropIfExists('contacts');
}
};