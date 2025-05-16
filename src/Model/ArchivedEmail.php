<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArchivedEmail extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var list<string>|null
     */
    protected $bccAddresses;

    /**
     * @var string|null
     */
    protected $body;

    /**
     * @var list<string>|null
     */
    protected $ccAddresses;

    /**
     * @var string|null
     */
    protected $fromAddress;

    /**
     * @var string|null
     */
    protected $messageIdentifier;

    /**
     * @var int|null
     */
    protected $receivedDate;

    /**
     * @var list<string>|null
     */
    protected $replyToAddress;

    /**
     * @var string|null
     */
    protected $subject;

    /**
     * @var list<string>|null
     */
    protected $toAddresses;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getBccAddresses(): ?array
    {
        return $this->bccAddresses;
    }

    /**
     * @param  list<string>|null  $bccAddresses
     */
    public function setBccAddresses(?array $bccAddresses): self
    {
        $this->initialized['bccAddresses'] = true;
        $this->bccAddresses = $bccAddresses;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getCcAddresses(): ?array
    {
        return $this->ccAddresses;
    }

    /**
     * @param  list<string>|null  $ccAddresses
     */
    public function setCcAddresses(?array $ccAddresses): self
    {
        $this->initialized['ccAddresses'] = true;
        $this->ccAddresses = $ccAddresses;

        return $this;
    }

    public function getFromAddress(): ?string
    {
        return $this->fromAddress;
    }

    public function setFromAddress(?string $fromAddress): self
    {
        $this->initialized['fromAddress'] = true;
        $this->fromAddress = $fromAddress;

        return $this;
    }

    public function getMessageIdentifier(): ?string
    {
        return $this->messageIdentifier;
    }

    public function setMessageIdentifier(?string $messageIdentifier): self
    {
        $this->initialized['messageIdentifier'] = true;
        $this->messageIdentifier = $messageIdentifier;

        return $this;
    }

    public function getReceivedDate(): ?int
    {
        return $this->receivedDate;
    }

    public function setReceivedDate(?int $receivedDate): self
    {
        $this->initialized['receivedDate'] = true;
        $this->receivedDate = $receivedDate;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getReplyToAddress(): ?array
    {
        return $this->replyToAddress;
    }

    /**
     * @param  list<string>|null  $replyToAddress
     */
    public function setReplyToAddress(?array $replyToAddress): self
    {
        $this->initialized['replyToAddress'] = true;
        $this->replyToAddress = $replyToAddress;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getToAddresses(): ?array
    {
        return $this->toAddresses;
    }

    /**
     * @param  list<string>|null  $toAddresses
     */
    public function setToAddresses(?array $toAddresses): self
    {
        $this->initialized['toAddresses'] = true;
        $this->toAddresses = $toAddresses;

        return $this;
    }
}
