<?php

namespace Webhubworks\WeclappApiCore\Model;

class PartyEmailAddresses extends \ArrayObject
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
    protected $bccAddresses;

    /**
     * @var string|null
     */
    protected $ccAddresses;

    /**
     * @var string|null
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

    public function getBccAddresses(): ?string
    {
        return $this->bccAddresses;
    }

    public function setBccAddresses(?string $bccAddresses): self
    {
        $this->initialized['bccAddresses'] = true;
        $this->bccAddresses = $bccAddresses;

        return $this;
    }

    public function getCcAddresses(): ?string
    {
        return $this->ccAddresses;
    }

    public function setCcAddresses(?string $ccAddresses): self
    {
        $this->initialized['ccAddresses'] = true;
        $this->ccAddresses = $ccAddresses;

        return $this;
    }

    public function getToAddresses(): ?string
    {
        return $this->toAddresses;
    }

    public function setToAddresses(?string $toAddresses): self
    {
        $this->initialized['toAddresses'] = true;
        $this->toAddresses = $toAddresses;

        return $this;
    }
}
