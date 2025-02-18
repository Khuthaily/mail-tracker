<?php

namespace Khuthaily\MailTracker\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Khuthaily\MailTracker\Concerns\IsSentEmailModel;
use Khuthaily\MailTracker\Contracts\SentEmailModel;

/**
 * @property string $hash
 * @property string $headers
 * @property string $sender
 * @property string $recipient
 * @property string $subject
 * @property string $content
 * @property int $opens
 * @property int $clicks
 * @property int|null $message_id
 * @property Collection $meta
 */
class SentEmail extends Model implements SentEmailModel
{
    use IsSentEmailModel;

    protected $fillable = [
        'hash',
        'headers',
        'sender_name',
        'sender_email',
        'recipient_name',
        'recipient_email',
        'subject',
        'content',
        'opens',
        'clicks',
        'message_id',
        'meta',
        'opened_at',
        'clicked_at',
    ];

    protected $casts = [
        'meta' => 'collection'
    ];
}
