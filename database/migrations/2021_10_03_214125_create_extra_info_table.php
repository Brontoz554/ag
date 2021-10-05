<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('agitator_id')->nullable();
            $table->unsignedBigInteger('coordinator_id')->nullable();
            $table->string('chief', 100)->nullable();
            $table->string('referral_link', 100)->nullable();
            $table->string('lawyer', 100)->nullable();
            $table->string('lawyer_phone', 30)->nullable();
            $table->string('country', 40)->nullable();
            $table->string('region', 100)->nullable();
            $table->string('TIK', 100)->nullable();
            $table->string('YIK', 100)->nullable();
            $table->string('INN', 30)->nullable();
            $table->string('passport_number', 30)->nullable();
            $table->string('passport_date', 30)->nullable();
            $table->string('passport_series', 30)->nullable();
            $table->string('passport_face_photo', 200)->nullable();
            $table->string('passport_residence_address', 200)->nullable();
            $table->string('chief_address', 100)->nullable();
            $table->string('residence_address', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('headquarters_address', 100)->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('agitator_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('coordinator_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extra_info');
    }
}
