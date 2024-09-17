<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemosTable extends Migration
{
    public function up()
    {
        Schema::create('demos', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->decimal('ExecutionTime', 8, 4); // Time in seconds, with 4 decimal places
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('demos');
    }
}
