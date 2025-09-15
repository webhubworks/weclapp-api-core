<?php

namespace Webhubworks\WeclappApiCore\Model;

class Shelf extends \ArrayObject
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
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortIdentifier;
    /**
     * 
     *
     * @var string|null
     */
    protected $storageLocationId;
    /**
     * 
     *
     * @var list<NestedStoragePlace>|null
     */
    protected $storagePlaces;
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
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShortIdentifier(): ?string
    {
        return $this->shortIdentifier;
    }
    /**
     * 
     *
     * @param string|null $shortIdentifier
     *
     * @return self
     */
    public function setShortIdentifier(?string $shortIdentifier): self
    {
        $this->initialized['shortIdentifier'] = true;
        $this->shortIdentifier = $shortIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStorageLocationId(): ?string
    {
        return $this->storageLocationId;
    }
    /**
     * 
     *
     * @param string|null $storageLocationId
     *
     * @return self
     */
    public function setStorageLocationId(?string $storageLocationId): self
    {
        $this->initialized['storageLocationId'] = true;
        $this->storageLocationId = $storageLocationId;
        return $this;
    }
    /**
     * 
     *
     * @return list<NestedStoragePlace>|null
     */
    public function getStoragePlaces(): ?array
    {
        return $this->storagePlaces;
    }
    /**
     * 
     *
     * @param list<NestedStoragePlace>|null $storagePlaces
     *
     * @return self
     */
    public function setStoragePlaces(?array $storagePlaces): self
    {
        $this->initialized['storagePlaces'] = true;
        $this->storagePlaces = $storagePlaces;
        return $this;
    }
}