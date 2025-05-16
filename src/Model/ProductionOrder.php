<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionOrder extends \ArrayObject
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
     * @var int
     */
    protected $actualEndDate;
    /**
     * 
     *
     * @var string
     */
    protected $actualQuantity;
    /**
     * 
     *
     * @var int
     */
    protected $actualStartDate;
    /**
     * 
     *
     * @var string
     */
    protected $articleId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $articleNumber;
    /**
     * 
     *
     * @var string
     */
    protected $assemblyStoragePlaceId;
    /**
     * 
     *
     * @var string
     */
    protected $availability;
    /**
     * 
     *
     * @var string
     */
    protected $availabilityForAllWarehouses;
    /**
     * 
     *
     * @var string
     */
    protected $pickingInstructions;
    /**
     * 
     *
     * @var bool
     */
    protected $picksComplete;
    /**
     * 
     *
     * @var list<ProductionOrderItem>
     */
    protected $productionOrderItems;
    /**
     * 
     *
     * @var string
     */
    protected $productionOrderNumber;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var list<ProductionOrderStatusHistory>
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var int
     */
    protected $targetEndDate;
    /**
     * 
     *
     * @var string
     */
    protected $targetQuantity;
    /**
     * 
     *
     * @var int
     */
    protected $targetStartDate;
    /**
     * 
     *
     * @var string
     */
    protected $warehouseId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $warehouseName;
    /**
     * 
     *
     * @var list<ProductionOrderWorkItem>
     */
    protected $workItems;
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
     * @return int
     */
    public function getActualEndDate(): int
    {
        return $this->actualEndDate;
    }
    /**
     * 
     *
     * @param int $actualEndDate
     *
     * @return self
     */
    public function setActualEndDate(int $actualEndDate): self
    {
        $this->initialized['actualEndDate'] = true;
        $this->actualEndDate = $actualEndDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getActualQuantity(): string
    {
        return $this->actualQuantity;
    }
    /**
     * 
     *
     * @param string $actualQuantity
     *
     * @return self
     */
    public function setActualQuantity(string $actualQuantity): self
    {
        $this->initialized['actualQuantity'] = true;
        $this->actualQuantity = $actualQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getActualStartDate(): int
    {
        return $this->actualStartDate;
    }
    /**
     * 
     *
     * @param int $actualStartDate
     *
     * @return self
     */
    public function setActualStartDate(int $actualStartDate): self
    {
        $this->initialized['actualStartDate'] = true;
        $this->actualStartDate = $actualStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArticleId(): string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string $articleId
     *
     * @return self
     */
    public function setArticleId(string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }
    /**
     * 
     *
     * @param string $articleNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setArticleNumber(string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAssemblyStoragePlaceId(): string
    {
        return $this->assemblyStoragePlaceId;
    }
    /**
     * 
     *
     * @param string $assemblyStoragePlaceId
     *
     * @return self
     */
    public function setAssemblyStoragePlaceId(string $assemblyStoragePlaceId): self
    {
        $this->initialized['assemblyStoragePlaceId'] = true;
        $this->assemblyStoragePlaceId = $assemblyStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvailability(): string
    {
        return $this->availability;
    }
    /**
     * 
     *
     * @param string $availability
     *
     * @return self
     */
    public function setAvailability(string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvailabilityForAllWarehouses(): string
    {
        return $this->availabilityForAllWarehouses;
    }
    /**
     * 
     *
     * @param string $availabilityForAllWarehouses
     *
     * @return self
     */
    public function setAvailabilityForAllWarehouses(string $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPickingInstructions(): string
    {
        return $this->pickingInstructions;
    }
    /**
     * 
     *
     * @param string $pickingInstructions
     *
     * @return self
     */
    public function setPickingInstructions(string $pickingInstructions): self
    {
        $this->initialized['pickingInstructions'] = true;
        $this->pickingInstructions = $pickingInstructions;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPicksComplete(): bool
    {
        return $this->picksComplete;
    }
    /**
     * 
     *
     * @param bool $picksComplete
     *
     * @return self
     */
    public function setPicksComplete(bool $picksComplete): self
    {
        $this->initialized['picksComplete'] = true;
        $this->picksComplete = $picksComplete;
        return $this;
    }
    /**
     * 
     *
     * @return list<ProductionOrderItem>
     */
    public function getProductionOrderItems(): array
    {
        return $this->productionOrderItems;
    }
    /**
     * 
     *
     * @param list<ProductionOrderItem> $productionOrderItems
     *
     * @return self
     */
    public function setProductionOrderItems(array $productionOrderItems): self
    {
        $this->initialized['productionOrderItems'] = true;
        $this->productionOrderItems = $productionOrderItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductionOrderNumber(): string
    {
        return $this->productionOrderNumber;
    }
    /**
     * 
     *
     * @param string $productionOrderNumber
     *
     * @return self
     */
    public function setProductionOrderNumber(string $productionOrderNumber): self
    {
        $this->initialized['productionOrderNumber'] = true;
        $this->productionOrderNumber = $productionOrderNumber;
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
     * @return list<ProductionOrderStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<ProductionOrderStatusHistory> $statusHistory
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
     * @return int
     */
    public function getTargetEndDate(): int
    {
        return $this->targetEndDate;
    }
    /**
     * 
     *
     * @param int $targetEndDate
     *
     * @return self
     */
    public function setTargetEndDate(int $targetEndDate): self
    {
        $this->initialized['targetEndDate'] = true;
        $this->targetEndDate = $targetEndDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTargetQuantity(): string
    {
        return $this->targetQuantity;
    }
    /**
     * 
     *
     * @param string $targetQuantity
     *
     * @return self
     */
    public function setTargetQuantity(string $targetQuantity): self
    {
        $this->initialized['targetQuantity'] = true;
        $this->targetQuantity = $targetQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetStartDate(): int
    {
        return $this->targetStartDate;
    }
    /**
     * 
     *
     * @param int $targetStartDate
     *
     * @return self
     */
    public function setTargetStartDate(int $targetStartDate): self
    {
        $this->initialized['targetStartDate'] = true;
        $this->targetStartDate = $targetStartDate;
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
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getWarehouseName(): string
    {
        return $this->warehouseName;
    }
    /**
     * 
     *
     * @param string $warehouseName
     *
     * @deprecated
     *
     * @return self
     */
    public function setWarehouseName(string $warehouseName): self
    {
        $this->initialized['warehouseName'] = true;
        $this->warehouseName = $warehouseName;
        return $this;
    }
    /**
     * 
     *
     * @return list<ProductionOrderWorkItem>
     */
    public function getWorkItems(): array
    {
        return $this->workItems;
    }
    /**
     * 
     *
     * @param list<ProductionOrderWorkItem> $workItems
     *
     * @return self
     */
    public function setWorkItems(array $workItems): self
    {
        $this->initialized['workItems'] = true;
        $this->workItems = $workItems;
        return $this;
    }
}