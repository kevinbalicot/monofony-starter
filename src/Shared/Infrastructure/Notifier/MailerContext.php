<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Notifier;

use Symfony\Component\Mime\Address;

final class MailerContext
{
    /** @var Address[] */
    private array $recipients;

    /**
     * @param array<string,string> $parameters
     */
    public function __construct(
        private string $subject,
        private array $parameters = [],
        Address ...$address,
    ) {
        $this->recipients = $address;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return Address[]
     */
    public function getRecipients(): array
    {
        return $this->recipients;
    }

    /**
     * @return array<string,string>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
}
