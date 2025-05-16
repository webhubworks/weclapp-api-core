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
    protected $counter;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $endDate;
    /**
     * 
     *
     * @var string
     */
    protected $inventoryGroupId;
    /**
     * 
     *
     * @var string
     */
    protected $inventoryNumber;
    /**
     * 
     *
     * @var string
     */
    protected $levelOfDetail;
    /**
     * 
     *
     * @var string
     */
    protected $managerId;
    /**
     * 
     *
     * @var string
     */
    protected $recorder;
    /**
     * 
     *
     * @var int
     */
    protected $startDate;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var list<InventoryStatusHistory>
     */
    protected $statusHistory;
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
     * @return string
     */
    public function getCounter(): string
    {
        return $this->counter;
    }
    /**
     * 
     *
     * @param string $counter
     *
     * @return self
     */
    public function setCounter(string $counter): self
    {
        $this->initialized['counter'] = true;
        $this->counter = $counter;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEndDate(): int
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param int $endDate
     *
     * @return self
     */
    public function setEndDate(int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInventoryGroupId(): string
    {
        return $this->inventoryGroupId;
    }
    /**
     * 
     *
     * @param string $inventoryGroupId
     *
     * @return self
     */
    public function setInventoryGroupId(string $inventoryGroupId): self
    {
        $this->initialized['inventoryGroupId'] = true;
        $this->inventoryGroupId = $inventoryGroupId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInventoryNumber(): string
    {
        return $this->inventoryNumber;
    }
    /**
     * 
     *
     * @param string $inventoryNumber
     *
     * @return self
     */
    public function setInventoryNumber(string $inventoryNumber): self
    {
        $this->initialized['inventoryNumber'] = true;
        $this->inventoryNumber = $inventoryNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLevelOfDetail(): string
    {
        return $this->levelOfDetail;
    }
    /**
     * 
     *
     * @param string $levelOfDetail
     *
     * @return self
     */
    public function setLevelOfDetail(string $levelOfDetail): self
    {
        $this->initialized['levelOfDetail'] = true;
        $this->levelOfDetail = $levelOfDetail;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getManagerId(): string
    {
        return $this->managerId;
    }
    /**
     * 
     *
     * @param string $managerId
     *
     * @return self
     */
    public function setManagerId(string $managerId): self
    {
        $this->initialized['managerId'] = true;
        $this->managerId = $managerId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecorder(): string
    {
        return $this->recorder;
    }
    /**
     * 
     *
     * @param string $recorder
     *
     * @return self
     */
    public function setRecorder(string $recorder): self
    {
        $this->initialized['recorder'] = true;
        $this->recorder = $recorder;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param int $startDate
     *
     * @return self
     */
    public function setStartDate(int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return list<InventoryStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<InventoryStatusHistory> $statusHistory
     *
     * @return self
     */
    public function setStatusHistory(array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;
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