<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urtas', function (Blueprint $table) {
            $table->id();
            $table->string('pin');
            $table->string('token_number');
            $table->string('number_saved');
            $table->string('contact_number');
            $table->string('registration_type');
            $table->string('submitted_to_account');
            $table->string('fee_submission_date');
            $table->string('transaction_verify');
            $table->string('requirement_completion_date');
            $table->string('forwarded_verification_date');
            $table->string('trx_id');
            $table->string('send_message_v_and_gr');
            $table->string('group_removal');
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
        Schema::dropIfExists('urtas');
    }
}
