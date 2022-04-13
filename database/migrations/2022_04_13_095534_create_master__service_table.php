<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_service', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('master_id');
            $table->unsignedBigInteger('service_id');

            $table->index('master_id', 'master_service_master_idx');
            $table->index('service_id', 'master_service_service_idx');

            $table->foreign('master_id', 'master_service_master_fk')->on('masters')->references('id');
            $table->foreign('service_id', 'master_service_service_fk')->on('services')->references('id');

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
        Schema::dropIfExists('master_service');
    }
}
