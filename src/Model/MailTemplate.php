<?php

namespace Webhubworks\WeclappApiCore\Model;

class MailTemplate extends \ArrayObject
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
     * @var string|null
     */
    protected $bccEmailAddresses;

    /**
     * @var string|null
     */
    protected $ccEmailAddresses;

    /**
     * @var string|null
     */
    protected $creatorId;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $subject;

    /**
     * @var string|null
     */
    protected $text;

    /**
     * @var string|null
     */
    protected $toEmailAddresses;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var bool|null
     */
    protected $useAsDefault;

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

    public function getBccEmailAddresses(): ?string
    {
        return $this->bccEmailAddresses;
    }

    public function setBccEmailAddresses(?string $bccEmailAddresses): self
    {
        $this->initialized['bccEmailAddresses'] = true;
        $this->bccEmailAddresses = $bccEmailAddresses;

        return $this;
    }

    public function getCcEmailAddresses(): ?string
    {
        return $this->ccEmailAddresses;
    }

    public function setCcEmailAddresses(?string $ccEmailAddresses): self
    {
        $this->initialized['ccEmailAddresses'] = true;
        $this->ccEmailAddresses = $ccEmailAddresses;

        return $this;
    }

    public function getCreatorId(): ?string
    {
        return $this->creatorId;
    }

    public function setCreatorId(?string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    public function getToEmailAddresses(): ?string
    {
        return $this->toEmailAddresses;
    }

    public function setToEmailAddresses(?string $toEmailAddresses): self
    {
        $this->initialized['toEmailAddresses'] = true;
        $this->toEmailAddresses = $toEmailAddresses;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getUseAsDefault(): ?bool
    {
        return $this->useAsDefault;
    }

    public function setUseAsDefault(?bool $useAsDefault): self
    {
        $this->initialized['useAsDefault'] = true;
        $this->useAsDefault = $useAsDefault;

        return $this;
    }
}
