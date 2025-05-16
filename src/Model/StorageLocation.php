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
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var list<mixed>
     */
    protected $customAttributes;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var list<NestedStoragePlace>
     */
    protected $blockStoragePlaces;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var list<OnlyId>
     */
    protected $shelves;

    /**
     * @var string
     */
    protected $shortIdentifier;

    /**
     * @var StoragePlaceTypeSettings
     */
    protected $storagePlaceTypeSettingsBlocked;

    /**
     * @var StoragePlaceTypeSettings
     */
    protected $storagePlaceTypeSettingsPicking;

    /**
     * @var StoragePlaceTypeSettings
     */
    protected $storagePlaceTypeSettingsStock;

    /**
     * @var string
     */
    protected $warehouseId;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>  $customAttributes
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * @return list<NestedStoragePlace>
     */
    public function getBlockStoragePlaces(): array
    {
        return $this->blockStoragePlaces;
    }

    /**
     * @param  list<NestedStoragePlace>  $blockStoragePlaces
     */
    public function setBlockStoragePlaces(array $blockStoragePlaces): self
    {
        $this->initialized['blockStoragePlaces'] = true;
        $this->blockStoragePlaces = $blockStoragePlaces;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return list<OnlyId>
     */
    public function getShelves(): array
    {
        return $this->shelves;
    }

    /**
     * @param  list<OnlyId>  $shelves
     */
    public function setShelves(array $shelves): self
    {
        $this->initialized['shelves'] = true;
        $this->shelves = $shelves;

        return $this;
    }

    public function getShortIdentifier(): string
    {
        return $this->shortIdentifier;
    }

    public function setShortIdentifier(string $shortIdentifier): self
    {
        $this->initialized['shortIdentifier'] = true;
        $this->shortIdentifier = $shortIdentifier;

        return $this;
    }

    public function getStoragePlaceTypeSettingsBlocked(): StoragePlaceTypeSettings
    {
        return $this->storagePlaceTypeSettingsBlocked;
    }

    public function setStoragePlaceTypeSettingsBlocked(StoragePlaceTypeSettings $storagePlaceTypeSettingsBlocked): self
    {
        $this->initialized['storagePlaceTypeSettingsBlocked'] = true;
        $this->storagePlaceTypeSettingsBlocked = $storagePlaceTypeSettingsBlocked;

        return $this;
    }

    public function getStoragePlaceTypeSettingsPicking(): StoragePlaceTypeSettings
    {
        return $this->storagePlaceTypeSettingsPicking;
    }

    public function setStoragePlaceTypeSettingsPicking(StoragePlaceTypeSettings $storagePlaceTypeSettingsPicking): self
    {
        $this->initialized['storagePlaceTypeSettingsPicking'] = true;
        $this->storagePlaceTypeSettingsPicking = $storagePlaceTypeSettingsPicking;

        return $this;
    }

    public function getStoragePlaceTypeSettingsStock(): StoragePlaceTypeSettings
    {
        return $this->storagePlaceTypeSettingsStock;
    }

    public function setStoragePlaceTypeSettingsStock(StoragePlaceTypeSettings $storagePlaceTypeSettingsStock): self
    {
        $this->initialized['storagePlaceTypeSettingsStock'] = true;
        $this->storagePlaceTypeSettingsStock = $storagePlaceTypeSettingsStock;

        return $this;
    }

    public function getWarehouseId(): string
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
