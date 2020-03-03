<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('store_hash');
            $table->integer('admin_id')->index();
            $table->string('admin_email')->index();
            $table->unsignedBigInteger('role_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('store_hash')
                ->references('store_hash')
                ->on('stores')
                ->onDelete('CASCADE');

            $table->foreign('role_id')
                ->references('id')
                ->on('admin_roles')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_admins');
    }
}
