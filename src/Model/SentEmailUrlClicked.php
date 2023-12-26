<?php

namespace Khuthaily\MailTracker\Model;

use Illuminate\Database\Eloquent\Model;
use Khuthaily\MailTracker\Concerns\IsSentEmailUrlClickedModel;
use Khuthaily\MailTracker\Contracts\SentEmailUrlClickedModel;


class SentEmailUrlClicked extends Model implements SentEmailUrlClickedModel
{
    use IsSentEmailUrlClickedModel;

    protected $table = 'sent_emails_url_clicked';

    protected $fillable = [
        'sent_email_id',
        'url',
        'hash',
        'clicks',
    ];
}
