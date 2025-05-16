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
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var string
     */
    protected $shortIdentifier;
    /**
     * 
     *
     * @var string
     */
    protected $storageLocationId;
    /**
     * 
     *
     * @var list<NestedStoragePlace>
     */
    protected $storagePlaces;
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
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShortIdentifier(): string
    {
        return $this->shortIdentifier;
    }
    /**
     * 
     *
     * @param string $shortIdentifier
     *
     * @return self
     */
    public function setShortIdentifier(string $shortIdentifier): self
    {
        $this->initialized['shortIdentifier'] = true;
        $this->shortIdentifier = $shortIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStorageLocationId(): string
    {
        return $this->storageLocationId;
    }
    /**
     * 
     *
     * @param string $storageLocationId
     *
     * @return self
     */
    public function setStorageLocationId(string $storageLocationId): self
    {
        $this->initialized['storageLocationId'] = true;
        $this->storageLocationId = $storageLocationId;
        return $this;
    }
    /**
     * 
     *
     * @return list<NestedStoragePlace>
     */
    public function getStoragePlaces(): array
    {
        return $this->storagePlaces;
    }
    /**
     * 
     *
     * @param list<NestedStoragePlace> $storagePlaces
     *
     * @return self
     */
    public function setStoragePlaces(array $storagePlaces): self
    {
        $this->initialized['storagePlaces'] = true;
        $this->storagePlaces = $storagePlaces;
        return $this;
    }
}