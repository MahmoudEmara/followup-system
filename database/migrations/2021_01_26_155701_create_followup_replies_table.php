<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowupRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followup_replies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('followup_id')->index();
            $table->unsignedBigInteger('from_id')->index();
            $table->string('message', 255);
            $table->timestamps();

            $table->foreign('from_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('followup_id')->references('id')->on('followups')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followup_replies');
    }
}
