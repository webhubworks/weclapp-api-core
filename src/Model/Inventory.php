<?php

namespace Webhubworks\WeclappApiCore\Model;

class Inventory extends \ArrayObject
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
    protected $counter;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var int|null
     */
    protected $endDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $inventoryGroupId;
    /**
     * 
     *
     * @var string|null
     */
    protected $inventoryNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $levelOfDetail;
    /**
     * 
     *
     * @var string|null
     */
    protected $managerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $recorder;
    /**
     * 
     *
     * @var int|null
     */
    protected $startDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var list<InventoryStatusHistory>|null
     */
    protected $statusHistory;
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
     * @return string|null
     */
    public function getCounter(): ?string
    {
        return $this->counter;
    }
    /**
     * 
     *
     * @param string|null $counter
     *
     * @return self
     */
    public function setCounter(?string $counter): self
    {
        $this->initialized['counter'] = true;
        $this->counter = $counter;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEndDate(): ?int
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param int|null $endDate
     *
     * @return self
     */
    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInventoryGroupId(): ?string
    {
        return $this->inventoryGroupId;
    }
    /**
     * 
     *
     * @param string|null $inventoryGroupId
     *
     * @return self
     */
    public function setInventoryGroupId(?string $inventoryGroupId): self
    {
        $this->initialized['inventoryGroupId'] = true;
        $this->inventoryGroupId = $inventoryGroupId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInventoryNumber(): ?string
    {
        return $this->inventoryNumber;
    }
    /**
     * 
     *
     * @param string|null $inventoryNumber
     *
     * @return self
     */
    public function setInventoryNumber(?string $inventoryNumber): self
    {
        $this->initialized['inventoryNumber'] = true;
        $this->inventoryNumber = $inventoryNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLevelOfDetail(): ?string
    {
        return $this->levelOfDetail;
    }
    /**
     * 
     *
     * @param string|null $levelOfDetail
     *
     * @return self
     */
    public function setLevelOfDetail(?string $levelOfDetail): self
    {
        $this->initialized['levelOfDetail'] = true;
        $this->levelOfDetail = $levelOfDetail;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getManagerId(): ?string
    {
        return $this->managerId;
    }
    /**
     * 
     *
     * @param string|null $managerId
     *
     * @return self
     */
    public function setManagerId(?string $managerId): self
    {
        $this->initialized['managerId'] = true;
        $this->managerId = $managerId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecorder(): ?string
    {
        return $this->recorder;
    }
    /**
     * 
     *
     * @param string|null $recorder
     *
     * @return self
     */
    public function setRecorder(?string $recorder): self
    {
        $this->initialized['recorder'] = true;
        $this->recorder = $recorder;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStartDate(): ?int
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param int|null $startDate
     *
     * @return self
     */
    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return list<InventoryStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<InventoryStatusHistory>|null $statusHistory
     *
     * @return self
     */
    public function setStatusHistory(?array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;
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