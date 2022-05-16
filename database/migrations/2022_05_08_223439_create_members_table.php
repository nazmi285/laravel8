<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('shortname')->nullable();
            $table->string('nickname',20)->nullable();
            $table->string('fullname')->nullable();
            $table->string('gender',10)->nullable();
            $table->date('birthdate')->nullable();
            $table->date('deathdate')->nullable();
            $table->string('phone_no',20)->nullable();
            $table->string('email',30)->nullable();
            $table->text('image_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
