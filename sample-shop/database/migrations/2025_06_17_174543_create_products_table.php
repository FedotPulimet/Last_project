<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
{

    Schema::table('products', function (Blueprint $table) {
        $table->string('name')->after('id'); 
        $table->text('description')->nullable();
        $table->decimal('leght');
        $table->decimal('price', 15, 2);
        $table->string('image');
        $table->text('author')->nullable();
        
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn(['name', 'description', 'price', 'image']);
    });
}

};

