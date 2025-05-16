<?php

namespace Webhubworks\WeclappApiCore\Model;

class StoragePlace extends \ArrayObject
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
     * @var list<mixed>
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string
     */
    protected $name;
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
    protected $barcode;
    /**
     * 
     *
     * @var bool
     */
    protected $blockedForResupply;
    /**
     * 
     *
     * @var string
     */
    protected $blockedForResupplyReasonId;
    /**
     * 
     *
     * @var string
     */
    protected $customerId;
    /**
     * 
     *
     * @var int
     */
    protected $fieldNumber;
    /**
     * 
     *
     * @var int
     */
    protected $levelNumber;
    /**
     * 
     *
     * @var string
     */
    protected $storagePlaceSizeId;
    /**
     * 
     *
     * @var string
     */
    protected $storagePlaceType;
    /**
     * 
     *
     * @var string
     */
    protected $currentInventoryId;
    /**
     * 
     *
     * @var string
     */
    protected $shelfId;
    /**
     * 
     *
     * @var string
     */
    protected $shelfStorageLocationId;
    /**
     * 
     *
     * @var string
     */
    protected $storageLocationId;
    /**
     * 
     *
     * @var string
     */
    protected $warehouseId;
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
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed> $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
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
    public function getBarcode(): string
    {
        return $this->barcode;
    }
    /**
     * 
     *
     * @param string $barcode
     *
     * @return self
     */
    public function setBarcode(string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBlockedForResupply(): bool
    {
        return $this->blockedForResupply;
    }
    /**
     * 
     *
     * @param bool $blockedForResupply
     *
     * @return self
     */
    public function setBlockedForResupply(bool $blockedForResupply): self
    {
        $this->initialized['blockedForResupply'] = true;
        $this->blockedForResupply = $blockedForResupply;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBlockedForResupplyReasonId(): string
    {
        return $this->blockedForResupplyReasonId;
    }
    /**
     * 
     *
     * @param string $blockedForResupplyReasonId
     *
     * @return self
     */
    public function setBlockedForResupplyReasonId(string $blockedForResupplyReasonId): self
    {
        $this->initialized['blockedForResupplyReasonId'] = true;
        $this->blockedForResupplyReasonId = $blockedForResupplyReasonId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string $customerId
     *
     * @return self
     */
    public function setCustomerId(string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFieldNumber(): int
    {
        return $this->fieldNumber;
    }
    /**
     * 
     *
     * @param int $fieldNumber
     *
     * @return self
     */
    public function setFieldNumber(int $fieldNumber): self
    {
        $this->initialized['fieldNumber'] = true;
        $this->fieldNumber = $fieldNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLevelNumber(): int
    {
        return $this->levelNumber;
    }
    /**
     * 
     *
     * @param int $levelNumber
     *
     * @return self
     */
    public function setLevelNumber(int $levelNumber): self
    {
        $this->initialized['levelNumber'] = true;
        $this->levelNumber = $levelNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStoragePlaceSizeId(): string
    {
        return $this->storagePlaceSizeId;
    }
    /**
     * 
     *
     * @param string $storagePlaceSizeId
     *
     * @return self
     */
    public function setStoragePlaceSizeId(string $storagePlaceSizeId): self
    {
        $this->initialized['storagePlaceSizeId'] = true;
        $this->storagePlaceSizeId = $storagePlaceSizeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStoragePlaceType(): string
    {
        return $this->storagePlaceType;
    }
    /**
     * 
     *
     * @param string $storagePlaceType
     *
     * @return self
     */
    public function setStoragePlaceType(string $storagePlaceType): self
    {
        $this->initialized['storagePlaceType'] = true;
        $this->storagePlaceType = $storagePlaceType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrentInventoryId(): string
    {
        return $this->currentInventoryId;
    }
    /**
     * 
     *
     * @param string $currentInventoryId
     *
     * @return self
     */
    public function setCurrentInventoryId(string $currentInventoryId): self
    {
        $this->initialized['currentInventoryId'] = true;
        $this->currentInventoryId = $currentInventoryId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShelfId(): string
    {
        return $this->shelfId;
    }
    /**
     * 
     *
     * @param string $shelfId
     *
     * @return self
     */
    public function setShelfId(string $shelfId): self
    {
        $this->initialized['shelfId'] = true;
        $this->shelfId = $shelfId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShelfStorageLocationId(): string
    {
        return $this->shelfStorageLocationId;
    }
    /**
     * 
     *
     * @param string $shelfStorageLocationId
     *
     * @return self
     */
    public function setShelfStorageLocationId(string $shelfStorageLocationId): self
    {
        $this->initialized['shelfStorageLocationId'] = true;
        $this->shelfStorageLocationId = $shelfStorageLocationId;
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
     * @return string
     */
    public function getWarehouseId(): string
    {
        return $this->warehouseId;
    }
    /**
     * 
     *
     * @param string $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;
        return $this;
    }
}