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
     * @var string
     */
    protected $internalTransportNumber;
    /**
     * 
     *
     * @var string
     */
    protected $inventoryId;
    /**
     * 
     *
     * @var string
     */
    protected $loadingEquipmentArticleId;
    /**
     * 
     *
     * @var string
     */
    protected $loadingEquipmentIdentifierId;
    /**
     * 
     *
     * @var bool
     */
    protected $manualReference;
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
     * @return string
     */
    public function getInternalTransportNumber(): string
    {
        return $this->internalTransportNumber;
    }
    /**
     * 
     *
     * @param string $internalTransportNumber
     *
     * @return self
     */
    public function setInternalTransportNumber(string $internalTransportNumber): self
    {
        $this->initialized['internalTransportNumber'] = true;
        $this->internalTransportNumber = $internalTransportNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInventoryId(): string
    {
        return $this->inventoryId;
    }
    /**
     * 
     *
     * @param string $inventoryId
     *
     * @return self
     */
    public function setInventoryId(string $inventoryId): self
    {
        $this->initialized['inventoryId'] = true;
        $this->inventoryId = $inventoryId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLoadingEquipmentArticleId(): string
    {
        return $this->loadingEquipmentArticleId;
    }
    /**
     * 
     *
     * @param string $loadingEquipmentArticleId
     *
     * @return self
     */
    public function setLoadingEquipmentArticleId(string $loadingEquipmentArticleId): self
    {
        $this->initialized['loadingEquipmentArticleId'] = true;
        $this->loadingEquipmentArticleId = $loadingEquipmentArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLoadingEquipmentIdentifierId(): string
    {
        return $this->loadingEquipmentIdentifierId;
    }
    /**
     * 
     *
     * @param string $loadingEquipmentIdentifierId
     *
     * @return self
     */
    public function setLoadingEquipmentIdentifierId(string $loadingEquipmentIdentifierId): self
    {
        $this->initialized['loadingEquipmentIdentifierId'] = true;
        $this->loadingEquipmentIdentifierId = $loadingEquipmentIdentifierId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getManualReference(): bool
    {
        return $this->manualReference;
    }
    /**
     * 
     *
     * @param bool $manualReference
     *
     * @return self
     */
    public function setManualReference(bool $manualReference): self
    {
        $this->initialized['manualReference'] = true;
        $this->manualReference = $manualReference;
        return $this;
    }
}