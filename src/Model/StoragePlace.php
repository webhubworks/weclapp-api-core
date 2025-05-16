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
     * @var list<mixed>|null
     */
    protected $customAttributes;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var bool|null
     */
    protected $active;

    /**
     * @var string|null
     */
    protected $barcode;

    /**
     * @var bool|null
     */
    protected $blockedForResupply;

    /**
     * @var string|null
     */
    protected $blockedForResupplyReasonId;

    /**
     * @var string|null
     */
    protected $customerId;

    /**
     * @var int|null
     */
    protected $fieldNumber;

    /**
     * @var int|null
     */
    protected $levelNumber;

    /**
     * @var string|null
     */
    protected $storagePlaceSizeId;

    /**
     * @var string|null
     */
    protected $storagePlaceType;

    /**
     * @var string|null
     */
    protected $currentInventoryId;

    /**
     * @var string|null
     */
    protected $shelfId;

    /**
     * @var string|null
     */
    protected $shelfStorageLocationId;

    /**
     * @var string|null
     */
    protected $storageLocationId;

    /**
     * @var string|null
     */
    protected $warehouseId;

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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>|null  $customAttributes
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(?string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;

        return $this;
    }

    public function getBlockedForResupply(): ?bool
    {
        return $this->blockedForResupply;
    }

    public function setBlockedForResupply(?bool $blockedForResupply): self
    {
        $this->initialized['blockedForResupply'] = true;
        $this->blockedForResupply = $blockedForResupply;

        return $this;
    }

    public function getBlockedForResupplyReasonId(): ?string
    {
        return $this->blockedForResupplyReasonId;
    }

    public function setBlockedForResupplyReasonId(?string $blockedForResupplyReasonId): self
    {
        $this->initialized['blockedForResupplyReasonId'] = true;
        $this->blockedForResupplyReasonId = $blockedForResupplyReasonId;

        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;

        return $this;
    }

    public function getFieldNumber(): ?int
    {
        return $this->fieldNumber;
    }

    public function setFieldNumber(?int $fieldNumber): self
    {
        $this->initialized['fieldNumber'] = true;
        $this->fieldNumber = $fieldNumber;

        return $this;
    }

    public function getLevelNumber(): ?int
    {
        return $this->levelNumber;
    }

    public function setLevelNumber(?int $levelNumber): self
    {
        $this->initialized['levelNumber'] = true;
        $this->levelNumber = $levelNumber;

        return $this;
    }

    public function getStoragePlaceSizeId(): ?string
    {
        return $this->storagePlaceSizeId;
    }

    public function setStoragePlaceSizeId(?string $storagePlaceSizeId): self
    {
        $this->initialized['storagePlaceSizeId'] = true;
        $this->storagePlaceSizeId = $storagePlaceSizeId;

        return $this;
    }

    public function getStoragePlaceType(): ?string
    {
        return $this->storagePlaceType;
    }

    public function setStoragePlaceType(?string $storagePlaceType): self
    {
        $this->initialized['storagePlaceType'] = true;
        $this->storagePlaceType = $storagePlaceType;

        return $this;
    }

    public function getCurrentInventoryId(): ?string
    {
        return $this->currentInventoryId;
    }

    public function setCurrentInventoryId(?string $currentInventoryId): self
    {
        $this->initialized['currentInventoryId'] = true;
        $this->currentInventoryId = $currentInventoryId;

        return $this;
    }

    public function getShelfId(): ?string
    {
        return $this->shelfId;
    }

    public function setShelfId(?string $shelfId): self
    {
        $this->initialized['shelfId'] = true;
        $this->shelfId = $shelfId;

        return $this;
    }

    public function getShelfStorageLocationId(): ?string
    {
        return $this->shelfStorageLocationId;
    }

    public function setShelfStorageLocationId(?string $shelfStorageLocationId): self
    {
        $this->initialized['shelfStorageLocationId'] = true;
        $this->shelfStorageLocationId = $shelfStorageLocationId;

        return $this;
    }

    public function getStorageLocationId(): ?string
    {
        return $this->storageLocationId;
    }

    public function setStorageLocationId(?string $storageLocationId): self
    {
        $this->initialized['storageLocationId'] = true;
        $this->storageLocationId = $storageLocationId;

        return $this;
    }

    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(?string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
