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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('category');
            $table->text('brend');
            $table->text('images');
            $table->mediumText('description')->nullable()->default(null);
            $table->float('price');
            $table->string('zapremina0cm3')->nullable()->default(null);
            $table->string('snaga')->nullable()->default(null);
            $table->string('tezina')->nullable()->default(null);
            $table->string('napon')->nullable()->default(null);
            $table->string('aku0tehnologija')->nullable()->default(null);
            $table->string('rezna0dubina')->nullable()->default(null);
            $table->string('optimalna0povrsina0travnjaka')->nullable()->default(null);
            $table->string('sirina0kosnje')->nullable()->default(null);
            $table->string('visina0kosnje')->nullable()->default(null);
            $table->string('jacina0zvucnog0pritiska')->nullable()->default(null);
            $table->string('radni0pritisak')->nullable()->default(null);
            $table->string('maks0pritisak')->nullable()->default(null);
            $table->string('maks0temperatura0vode')->nullable()->default(null);
            $table->string('kolicina0usisanog0zraka')->nullable()->default(null);
            $table->string('duzina0usisnog0creva')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
