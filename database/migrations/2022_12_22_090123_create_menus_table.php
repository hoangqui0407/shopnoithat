<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->integer('parent_id');
            $table->text('description'); //mô tả 
            $table->longText('content');
            $table->string('slug',255)->unique();// kiểm tra đường dẫn có bị trùng không
            $table->integer('active');
            $table->timestamps(); //
            $table->engine = 'InnoDB';
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};
