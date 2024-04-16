<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userid');
            $table->bigInteger('companyid');
            $table->string('costcenter');
            $table->text('desc_req');
            $table->string('request_type');
            $table->string('status');
            $table->bigInteger('accept_by')->nullable();
            $table->bigInteger('reject_by')->nullable();
            $table->dateTime('req_date');
            $table->integer('durasi_req');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('requests');
    }
}

