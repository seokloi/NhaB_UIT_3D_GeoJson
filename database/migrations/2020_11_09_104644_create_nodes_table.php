<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->string('id');
            $table->string('name')->nullable();
            $table->string('desc')->nullable();
            $table->string('body_id')->nullable();
            $table->string('innerface_id')->nullable();
            $table->string('seq_inner')->nullable();
            $table->string('seq_face')->nullable();
            $table->string('seq_line')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodes');
    }
}
