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
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @var list<string>
     */
    protected $bccAddresses;
    /**
     * 
     *
     * @var string
     */
    protected $body;
    /**
     * 
     *
     * @var list<string>
     */
    protected $ccAddresses;
    /**
     * 
     *
     * @var string
     */
    protected $fromAddress;
    /**
     * 
     *
     * @var string
     */
    protected $messageIdentifier;
    /**
     * 
     *
     * @var int
     */
    protected $receivedDate;
    /**
     * 
     *
     * @var list<string>
     */
    protected $replyToAddress;
    /**
     * 
     *
     * @var string
     */
    protected $subject;
    /**
     * 
     *
     * @var list<string>
     */
    protected $toAddresses;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getBccAddresses(): array
    {
        return $this->bccAddresses;
    }
    /**
     * 
     *
     * @param list<string> $bccAddresses
     *
     * @return self
     */
    public function setBccAddresses(array $bccAddresses): self
    {
        $this->initialized['bccAddresses'] = true;
        $this->bccAddresses = $bccAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }
    /**
     * 
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getCcAddresses(): array
    {
        return $this->ccAddresses;
    }
    /**
     * 
     *
     * @param list<string> $ccAddresses
     *
     * @return self
     */
    public function setCcAddresses(array $ccAddresses): self
    {
        $this->initialized['ccAddresses'] = true;
        $this->ccAddresses = $ccAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFromAddress(): string
    {
        return $this->fromAddress;
    }
    /**
     * 
     *
     * @param string $fromAddress
     *
     * @return self
     */
    public function setFromAddress(string $fromAddress): self
    {
        $this->initialized['fromAddress'] = true;
        $this->fromAddress = $fromAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessageIdentifier(): string
    {
        return $this->messageIdentifier;
    }
    /**
     * 
     *
     * @param string $messageIdentifier
     *
     * @return self
     */
    public function setMessageIdentifier(string $messageIdentifier): self
    {
        $this->initialized['messageIdentifier'] = true;
        $this->messageIdentifier = $messageIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReceivedDate(): int
    {
        return $this->receivedDate;
    }
    /**
     * 
     *
     * @param int $receivedDate
     *
     * @return self
     */
    public function setReceivedDate(int $receivedDate): self
    {
        $this->initialized['receivedDate'] = true;
        $this->receivedDate = $receivedDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getReplyToAddress(): array
    {
        return $this->replyToAddress;
    }
    /**
     * 
     *
     * @param list<string> $replyToAddress
     *
     * @return self
     */
    public function setReplyToAddress(array $replyToAddress): self
    {
        $this->initialized['replyToAddress'] = true;
        $this->replyToAddress = $replyToAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getToAddresses(): array
    {
        return $this->toAddresses;
    }
    /**
     * 
     *
     * @param list<string> $toAddresses
     *
     * @return self
     */
    public function setToAddresses(array $toAddresses): self
    {
        $this->initialized['toAddresses'] = true;
        $this->toAddresses = $toAddresses;
        return $this;
    }
}