<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Smartosc\LaraBig\Helper\LaraBig;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (LaraBig::isEnabledMultiUser()) {
            Schema::create('admins', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('store_hash');
                $table->integer('bc_id')->index();
                $table->string('email')->index();
                $table->rememberToken();
                $table->timestamps();

                $table->foreign('store_hash')
                    ->references('store_hash')
                    ->on('stores')
                    ->onDelete('CASCADE');

                $table->unique(['store_hash', 'email']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
