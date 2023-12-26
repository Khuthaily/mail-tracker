<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSentEmailsUrlClickedTable extends Migration
{
    public function up(): void
    {
        Schema::create('sent_emails_url_clicked', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sent_email_id')->unsigned();
            $table->foreign('sent_email_id')->references('id')->on('sent_emails')->onDelete('cascade');
            $table->string('url', 2083)->nullable()->index();
            $table->char('hash', 32);
            $table->integer('clicks')->default(1);
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->onUpdate(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sent_emails_url_clicked');
    }
};
