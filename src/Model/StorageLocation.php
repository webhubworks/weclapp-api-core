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
     * @var list<mixed>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var list<NestedStoragePlace>|null
     */
    protected $blockStoragePlaces;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $shelves;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortIdentifier;
    /**
     * 
     *
     * @var StoragePlaceTypeSettings|null
     */
    protected $storagePlaceTypeSettingsBlocked;
    /**
     * 
     *
     * @var StoragePlaceTypeSettings|null
     */
    protected $storagePlaceTypeSettingsPicking;
    /**
     * 
     *
     * @var StoragePlaceTypeSettings|null
     */
    protected $storagePlaceTypeSettingsStock;
    /**
     * 
     *
     * @var string|null
     */
    protected $warehouseId;
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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed>|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
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
     * @return list<NestedStoragePlace>|null
     */
    public function getBlockStoragePlaces(): ?array
    {
        return $this->blockStoragePlaces;
    }
    /**
     * 
     *
     * @param list<NestedStoragePlace>|null $blockStoragePlaces
     *
     * @return self
     */
    public function setBlockStoragePlaces(?array $blockStoragePlaces): self
    {
        $this->initialized['blockStoragePlaces'] = true;
        $this->blockStoragePlaces = $blockStoragePlaces;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getShelves(): ?array
    {
        return $this->shelves;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $shelves
     *
     * @return self
     */
    public function setShelves(?array $shelves): self
    {
        $this->initialized['shelves'] = true;
        $this->shelves = $shelves;
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
     * @return StoragePlaceTypeSettings|null
     */
    public function getStoragePlaceTypeSettingsBlocked(): ?StoragePlaceTypeSettings
    {
        return $this->storagePlaceTypeSettingsBlocked;
    }
    /**
     * 
     *
     * @param StoragePlaceTypeSettings|null $storagePlaceTypeSettingsBlocked
     *
     * @return self
     */
    public function setStoragePlaceTypeSettingsBlocked(?StoragePlaceTypeSettings $storagePlaceTypeSettingsBlocked): self
    {
        $this->initialized['storagePlaceTypeSettingsBlocked'] = true;
        $this->storagePlaceTypeSettingsBlocked = $storagePlaceTypeSettingsBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return StoragePlaceTypeSettings|null
     */
    public function getStoragePlaceTypeSettingsPicking(): ?StoragePlaceTypeSettings
    {
        return $this->storagePlaceTypeSettingsPicking;
    }
    /**
     * 
     *
     * @param StoragePlaceTypeSettings|null $storagePlaceTypeSettingsPicking
     *
     * @return self
     */
    public function setStoragePlaceTypeSettingsPicking(?StoragePlaceTypeSettings $storagePlaceTypeSettingsPicking): self
    {
        $this->initialized['storagePlaceTypeSettingsPicking'] = true;
        $this->storagePlaceTypeSettingsPicking = $storagePlaceTypeSettingsPicking;
        return $this;
    }
    /**
     * 
     *
     * @return StoragePlaceTypeSettings|null
     */
    public function getStoragePlaceTypeSettingsStock(): ?StoragePlaceTypeSettings
    {
        return $this->storagePlaceTypeSettingsStock;
    }
    /**
     * 
     *
     * @param StoragePlaceTypeSettings|null $storagePlaceTypeSettingsStock
     *
     * @return self
     */
    public function setStoragePlaceTypeSettingsStock(?StoragePlaceTypeSettings $storagePlaceTypeSettingsStock): self
    {
        $this->initialized['storagePlaceTypeSettingsStock'] = true;
        $this->storagePlaceTypeSettingsStock = $storagePlaceTypeSettingsStock;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }
    /**
     * 
     *
     * @param string|null $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(?string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;
        return $this;
    }
}