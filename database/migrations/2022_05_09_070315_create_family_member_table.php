<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_member', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('family_id')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('partner_id')->nullable();
            $table->string('relationship',10)->nullable();
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
        Schema::dropIfExists('family_member');
    }
}
