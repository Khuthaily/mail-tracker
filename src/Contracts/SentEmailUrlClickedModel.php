<?php

namespace Khuthaily\MailTracker\Contracts;

interface SentEmailUrlClickedModel
{
    public function getConnectionName();
    public function email();
}
