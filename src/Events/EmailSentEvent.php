<?php

namespace Khuthaily\MailTracker\Events;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\SerializesModels;
use Khuthaily\MailTracker\Contracts\SentEmailModel;

class EmailSentEvent implements ShouldQueue
{
    use SerializesModels;

    public $sent_email;

    /**
     * Create a new event instance.
     *
     * @param  Model|SentEmailModel  $sent_email
     * @return void
     */
    public function __construct(Model|SentEmailModel $sent_email)
    {
        $this->sent_email = $sent_email;
    }
}
