<?php

namespace Webhubworks\WeclappApiCore\Model;

class StorageLocation extends \ArrayObject
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
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var list<NestedStoragePlace>
     */
    protected $blockStoragePlaces;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $shelves;
    /**
     * 
     *
     * @var string
     */
    protected $shortIdentifier;
    /**
     * 
     *
     * @var StoragePlaceTypeSettings
     */
    protected $storagePlaceTypeSettingsBlocked;
    /**
     * 
     *
     * @var StoragePlaceTypeSettings
     */
    protected $storagePlaceTypeSettingsPicking;
    /**
     * 
     *
     * @var StoragePlaceTypeSettings
     */
    protected $storagePlaceTypeSettingsStock;
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
     * @return list<NestedStoragePlace>
     */
    public function getBlockStoragePlaces(): array
    {
        return $this->blockStoragePlaces;
    }
    /**
     * 
     *
     * @param list<NestedStoragePlace> $blockStoragePlaces
     *
     * @return self
     */
    public function setBlockStoragePlaces(array $blockStoragePlaces): self
    {
        $this->initialized['blockStoragePlaces'] = true;
        $this->blockStoragePlaces = $blockStoragePlaces;
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
     * @return list<OnlyId>
     */
    public function getShelves(): array
    {
        return $this->shelves;
    }
    /**
     * 
     *
     * @param list<OnlyId> $shelves
     *
     * @return self
     */
    public function setShelves(array $shelves): self
    {
        $this->initialized['shelves'] = true;
        $this->shelves = $shelves;
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
     * @return StoragePlaceTypeSettings
     */
    public function getStoragePlaceTypeSettingsBlocked(): StoragePlaceTypeSettings
    {
        return $this->storagePlaceTypeSettingsBlocked;
    }
    /**
     * 
     *
     * @param StoragePlaceTypeSettings $storagePlaceTypeSettingsBlocked
     *
     * @return self
     */
    public function setStoragePlaceTypeSettingsBlocked(StoragePlaceTypeSettings $storagePlaceTypeSettingsBlocked): self
    {
        $this->initialized['storagePlaceTypeSettingsBlocked'] = true;
        $this->storagePlaceTypeSettingsBlocked = $storagePlaceTypeSettingsBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return StoragePlaceTypeSettings
     */
    public function getStoragePlaceTypeSettingsPicking(): StoragePlaceTypeSettings
    {
        return $this->storagePlaceTypeSettingsPicking;
    }
    /**
     * 
     *
     * @param StoragePlaceTypeSettings $storagePlaceTypeSettingsPicking
     *
     * @return self
     */
    public function setStoragePlaceTypeSettingsPicking(StoragePlaceTypeSettings $storagePlaceTypeSettingsPicking): self
    {
        $this->initialized['storagePlaceTypeSettingsPicking'] = true;
        $this->storagePlaceTypeSettingsPicking = $storagePlaceTypeSettingsPicking;
        return $this;
    }
    /**
     * 
     *
     * @return StoragePlaceTypeSettings
     */
    public function getStoragePlaceTypeSettingsStock(): StoragePlaceTypeSettings
    {
        return $this->storagePlaceTypeSettingsStock;
    }
    /**
     * 
     *
     * @param StoragePlaceTypeSettings $storagePlaceTypeSettingsStock
     *
     * @return self
     */
    public function setStoragePlaceTypeSettingsStock(StoragePlaceTypeSettings $storagePlaceTypeSettingsStock): self
    {
        $this->initialized['storagePlaceTypeSettingsStock'] = true;
        $this->storagePlaceTypeSettingsStock = $storagePlaceTypeSettingsStock;
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