<?php

declare(strict_types=1);

namespace Embaya\Models;

use Embaya\Infrastructure\RegisterRequest;

class Provider
{
    protected $id = null;

    public function __construct()
    {
        $this->id = uniqid("_PROVIDER_");
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function register(Ticket $ticket): void
    {
        RegisterRequest::send($ticket->getCode(), $this->getId());
    }
}
