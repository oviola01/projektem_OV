<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Tabla1;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('tabla1s', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->longText('description');
            $table->date('start_date')->default('2023-01-01');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        // Tabla1::create(['position' => 'ügyintéző', 'description'=> 'végrehajtás', 'start_date'=>'2022-11-22', 'user_id'=> 1]);
        // Tabla1::create(['position' => 'csoportvezető', 'description'=> 'irányítás', 'start_date'=>'2020-09-01','user_id'=> 2]);
        // Tabla1::create(['position' => 'ügyintéző', 'description'=> 'végrehajtás', 'user_id'=> 3]);
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabla1s');
    }
};
