<?php

namespace Khuthaily\MailTracker\Concerns;

use Khuthaily\MailTracker\MailTracker;

trait IsSentEmailUrlClickedModel
{

    public function getConnectionName()
    {
        $connName = config('mail-tracker.connection');
        return $connName ?: config('database.default');
    }

    public function email()
    {
        return $this->belongsTo(MailTracker::$sentEmailModel, 'sent_email_id');
    }
}
