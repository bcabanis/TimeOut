<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\EmbeddedDocument]
class ChatMessage
{
    #[MongoDB\Field(type: 'string')]
    private string $sender;

    #[MongoDB\Field(type: 'string')]
    private string $content;

    #[MongoDB\Field(type: 'date')]
    private \DateTime $sentDate;

    public function getSender(): string
    {
        return $this->sender;
    }

    public function setSender(string $sender): self
    {
        $this->sender = $sender;

        return $this;
    } 

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getSentDate(): \DateTime
    {
        return $this->sentDate;
    }

    public function setSentDate(\DateTime $sentDate): self
    {
        $this->sentDate = $sentDate;

        return $this;
    }
}
