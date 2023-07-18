<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\EmbeddedDocument]
class Message
{
    #[MongoDB\Field(type: 'date')]
    private \DateTime $sentDate;

    #[MongoDB\Field(type: 'string')]
    private string $content;

    public function getSentDate(): \DateTime
    {
        return $this->sentDate;
    }

    public function setSentDate(\DateTime $sentDate): void
    {
        $this->sentDate = $sentDate;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}
