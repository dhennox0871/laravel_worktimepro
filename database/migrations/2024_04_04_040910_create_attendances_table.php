<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userid');
            $table->bigInteger('companyid');
            $table->string('costcenter');
            $table->dateTime('jam_in');
            $table->dateTime('jam_out')->nullable();
            $table->decimal('latitude_in', 10, 8);
            $table->decimal('longitude_in', 11, 8);
            $table->decimal('latitude_out', 10, 8)->nullable();
            $table->decimal('longitude_out', 11, 8)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}

