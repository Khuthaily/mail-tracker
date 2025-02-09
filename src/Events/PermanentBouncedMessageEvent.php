<?php

namespace Khuthaily\MailTracker\Events;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\SerializesModels;
use Khuthaily\MailTracker\Contracts\SentEmailModel;

class PermanentBouncedMessageEvent implements ShouldQueue
{
    use SerializesModels;

    public $email_address;
    public $sent_email;

    /**
     * Create a new event instance.
     *
     * @param string $email_address
     * @param Model|SentEmailModel|null $sent_email
     */
    public function __construct(string $email_address, Model|SentEmailModel|null $sent_email = null)
    {
        $this->email_address = $email_address;
        $this->sent_email = $sent_email;
    }
}
