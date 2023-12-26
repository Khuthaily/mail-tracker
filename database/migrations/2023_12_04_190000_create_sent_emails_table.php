<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentEmailsTable extends Migration
{
    public function up(): void
    {
        Schema::create('sent_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('message_id')->nullable()->index();
            $table->string('subject')->nullable();
            $table->text('meta')->nullable();
            $table->char('hash', 32)->unique();
            $table->text('headers')->nullable();
            $table->string('recipient_email')->nullable()->index();
            $table->string('sender_email')->nullable();
            $table->string('sender_name')->nullable();
            $table->integer('opens')->nullable();
            $table->datetime('opened_at')->nullable();
            $table->integer('clicks')->nullable();
            $table->datetime('clicked_at')->nullable();
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->onUpdate(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sent_emails');
    }
};
