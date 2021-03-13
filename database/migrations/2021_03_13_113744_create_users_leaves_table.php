<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_leaves', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->integer('number_of_leave_days');
            $table->integer('number_of_leave_days_used');
            $table->integer('number_of_leave_days_remaining');
            $table->integer('year');
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
        Schema::dropIfExists('users_leaves');
    }
}
