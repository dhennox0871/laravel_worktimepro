<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('jkelamin')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('departmen')->nullable();
            $table->string('role')->nullable();
            $table->string('photo')->nullable();
            $table->string('status')->nullable();
            $table->integer('companyid')->nullable();
            $table->string('costcenter')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
