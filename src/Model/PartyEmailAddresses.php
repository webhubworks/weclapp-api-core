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
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @var string|null
     */
    protected $bccAddresses;
    /**
     * 
     *
     * @var string|null
     */
    protected $ccAddresses;
    /**
     * 
     *
     * @var string|null
     */
    protected $toAddresses;
    /**
     * 
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int|null $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int|null $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBccAddresses(): ?string
    {
        return $this->bccAddresses;
    }
    /**
     * 
     *
     * @param string|null $bccAddresses
     *
     * @return self
     */
    public function setBccAddresses(?string $bccAddresses): self
    {
        $this->initialized['bccAddresses'] = true;
        $this->bccAddresses = $bccAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCcAddresses(): ?string
    {
        return $this->ccAddresses;
    }
    /**
     * 
     *
     * @param string|null $ccAddresses
     *
     * @return self
     */
    public function setCcAddresses(?string $ccAddresses): self
    {
        $this->initialized['ccAddresses'] = true;
        $this->ccAddresses = $ccAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getToAddresses(): ?string
    {
        return $this->toAddresses;
    }
    /**
     * 
     *
     * @param string|null $toAddresses
     *
     * @return self
     */
    public function setToAddresses(?string $toAddresses): self
    {
        $this->initialized['toAddresses'] = true;
        $this->toAddresses = $toAddresses;
        return $this;
    }
}