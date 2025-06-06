<?php

namespace Webhubworks\WeclappApiCore\Model;

class InventoryCreatePostBodyInventory extends \ArrayObject
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
    protected $counter;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var int|null
     */
    protected $endDate;

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $inventoryGroupId;

    /**
     * @var string|null
     */
    protected $inventoryNumber;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $levelOfDetail;

    /**
     * @var string|null
     */
    protected $managerId;

    /**
     * @var string|null
     */
    protected $recorder;

    /**
     * @var int|null
     */
    protected $startDate;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var list<InventoryStatusHistory>|null
     */
    protected $statusHistory;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var string|null
     */
    protected $warehouseId;

    public function getCounter(): ?string
    {
        return $this->counter;
    }

    public function setCounter(?string $counter): self
    {
        $this->initialized['counter'] = true;
        $this->counter = $counter;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getEndDate(): ?int
    {
        return $this->endDate;
    }

    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

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

    public function getInventoryGroupId(): ?string
    {
        return $this->inventoryGroupId;
    }

    public function setInventoryGroupId(?string $inventoryGroupId): self
    {
        $this->initialized['inventoryGroupId'] = true;
        $this->inventoryGroupId = $inventoryGroupId;

        return $this;
    }

    public function getInventoryNumber(): ?string
    {
        return $this->inventoryNumber;
    }

    public function setInventoryNumber(?string $inventoryNumber): self
    {
        $this->initialized['inventoryNumber'] = true;
        $this->inventoryNumber = $inventoryNumber;

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

    public function getLevelOfDetail(): ?string
    {
        return $this->levelOfDetail;
    }

    public function setLevelOfDetail(?string $levelOfDetail): self
    {
        $this->initialized['levelOfDetail'] = true;
        $this->levelOfDetail = $levelOfDetail;

        return $this;
    }

    public function getManagerId(): ?string
    {
        return $this->managerId;
    }

    public function setManagerId(?string $managerId): self
    {
        $this->initialized['managerId'] = true;
        $this->managerId = $managerId;

        return $this;
    }

    public function getRecorder(): ?string
    {
        return $this->recorder;
    }

    public function setRecorder(?string $recorder): self
    {
        $this->initialized['recorder'] = true;
        $this->recorder = $recorder;

        return $this;
    }

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return list<InventoryStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }

    /**
     * @param  list<InventoryStatusHistory>|null  $statusHistory
     */
    public function setStatusHistory(?array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;

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
