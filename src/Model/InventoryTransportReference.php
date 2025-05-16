<?php

namespace Webhubworks\WeclappApiCore\Model;

class InventoryTransportReference extends \ArrayObject
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
     * @var string
     */
    protected $internalTransportNumber;

    /**
     * @var string
     */
    protected $inventoryId;

    /**
     * @var string
     */
    protected $loadingEquipmentArticleId;

    /**
     * @var string
     */
    protected $loadingEquipmentIdentifierId;

    /**
     * @var bool
     */
    protected $manualReference;

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

    public function getInternalTransportNumber(): string
    {
        return $this->internalTransportNumber;
    }

    public function setInternalTransportNumber(string $internalTransportNumber): self
    {
        $this->initialized['internalTransportNumber'] = true;
        $this->internalTransportNumber = $internalTransportNumber;

        return $this;
    }

    public function getInventoryId(): string
    {
        return $this->inventoryId;
    }

    public function setInventoryId(string $inventoryId): self
    {
        $this->initialized['inventoryId'] = true;
        $this->inventoryId = $inventoryId;

        return $this;
    }

    public function getLoadingEquipmentArticleId(): string
    {
        return $this->loadingEquipmentArticleId;
    }

    public function setLoadingEquipmentArticleId(string $loadingEquipmentArticleId): self
    {
        $this->initialized['loadingEquipmentArticleId'] = true;
        $this->loadingEquipmentArticleId = $loadingEquipmentArticleId;

        return $this;
    }

    public function getLoadingEquipmentIdentifierId(): string
    {
        return $this->loadingEquipmentIdentifierId;
    }

    public function setLoadingEquipmentIdentifierId(string $loadingEquipmentIdentifierId): self
    {
        $this->initialized['loadingEquipmentIdentifierId'] = true;
        $this->loadingEquipmentIdentifierId = $loadingEquipmentIdentifierId;

        return $this;
    }

    public function getManualReference(): bool
    {
        return $this->manualReference;
    }

    public function setManualReference(bool $manualReference): self
    {
        $this->initialized['manualReference'] = true;
        $this->manualReference = $manualReference;

        return $this;
    }
}
