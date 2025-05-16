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
     * @var int|null
     */
    protected $actualEndDate;

    /**
     * @var string|null
     */
    protected $actualQuantity;

    /**
     * @var int|null
     */
    protected $actualStartDate;

    /**
     * @var string|null
     */
    protected $articleId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $articleNumber;

    /**
     * @var string|null
     */
    protected $assemblyStoragePlaceId;

    /**
     * @var string|null
     */
    protected $availability;

    /**
     * @var string|null
     */
    protected $availabilityForAllWarehouses;

    /**
     * @var string|null
     */
    protected $pickingInstructions;

    /**
     * @var bool|null
     */
    protected $picksComplete;

    /**
     * @var list<ProductionOrderItem>|null
     */
    protected $productionOrderItems;

    /**
     * @var string|null
     */
    protected $productionOrderNumber;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var list<ProductionOrderStatusHistory>|null
     */
    protected $statusHistory;

    /**
     * @var int|null
     */
    protected $targetEndDate;

    /**
     * @var string|null
     */
    protected $targetQuantity;

    /**
     * @var int|null
     */
    protected $targetStartDate;

    /**
     * @var string|null
     */
    protected $warehouseId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $warehouseName;

    /**
     * @var list<ProductionOrderWorkItem>|null
     */
    protected $workItems;

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

    public function getActualEndDate(): ?int
    {
        return $this->actualEndDate;
    }

    public function setActualEndDate(?int $actualEndDate): self
    {
        $this->initialized['actualEndDate'] = true;
        $this->actualEndDate = $actualEndDate;

        return $this;
    }

    public function getActualQuantity(): ?string
    {
        return $this->actualQuantity;
    }

    public function setActualQuantity(?string $actualQuantity): self
    {
        $this->initialized['actualQuantity'] = true;
        $this->actualQuantity = $actualQuantity;

        return $this;
    }

    public function getActualStartDate(): ?int
    {
        return $this->actualStartDate;
    }

    public function setActualStartDate(?int $actualStartDate): self
    {
        $this->initialized['actualStartDate'] = true;
        $this->actualStartDate = $actualStartDate;

        return $this;
    }

    public function getArticleId(): ?string
    {
        return $this->articleId;
    }

    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getArticleNumber(): ?string
    {
        return $this->articleNumber;
    }

    /**
     * @deprecated
     */
    public function setArticleNumber(?string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;

        return $this;
    }

    public function getAssemblyStoragePlaceId(): ?string
    {
        return $this->assemblyStoragePlaceId;
    }

    public function setAssemblyStoragePlaceId(?string $assemblyStoragePlaceId): self
    {
        $this->initialized['assemblyStoragePlaceId'] = true;
        $this->assemblyStoragePlaceId = $assemblyStoragePlaceId;

        return $this;
    }

    public function getAvailability(): ?string
    {
        return $this->availability;
    }

    public function setAvailability(?string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;

        return $this;
    }

    public function getAvailabilityForAllWarehouses(): ?string
    {
        return $this->availabilityForAllWarehouses;
    }

    public function setAvailabilityForAllWarehouses(?string $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;

        return $this;
    }

    public function getPickingInstructions(): ?string
    {
        return $this->pickingInstructions;
    }

    public function setPickingInstructions(?string $pickingInstructions): self
    {
        $this->initialized['pickingInstructions'] = true;
        $this->pickingInstructions = $pickingInstructions;

        return $this;
    }

    public function getPicksComplete(): ?bool
    {
        return $this->picksComplete;
    }

    public function setPicksComplete(?bool $picksComplete): self
    {
        $this->initialized['picksComplete'] = true;
        $this->picksComplete = $picksComplete;

        return $this;
    }

    /**
     * @return list<ProductionOrderItem>|null
     */
    public function getProductionOrderItems(): ?array
    {
        return $this->productionOrderItems;
    }

    /**
     * @param  list<ProductionOrderItem>|null  $productionOrderItems
     */
    public function setProductionOrderItems(?array $productionOrderItems): self
    {
        $this->initialized['productionOrderItems'] = true;
        $this->productionOrderItems = $productionOrderItems;

        return $this;
    }

    public function getProductionOrderNumber(): ?string
    {
        return $this->productionOrderNumber;
    }

    public function setProductionOrderNumber(?string $productionOrderNumber): self
    {
        $this->initialized['productionOrderNumber'] = true;
        $this->productionOrderNumber = $productionOrderNumber;

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
     * @return list<ProductionOrderStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }

    /**
     * @param  list<ProductionOrderStatusHistory>|null  $statusHistory
     */
    public function setStatusHistory(?array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;

        return $this;
    }

    public function getTargetEndDate(): ?int
    {
        return $this->targetEndDate;
    }

    public function setTargetEndDate(?int $targetEndDate): self
    {
        $this->initialized['targetEndDate'] = true;
        $this->targetEndDate = $targetEndDate;

        return $this;
    }

    public function getTargetQuantity(): ?string
    {
        return $this->targetQuantity;
    }

    public function setTargetQuantity(?string $targetQuantity): self
    {
        $this->initialized['targetQuantity'] = true;
        $this->targetQuantity = $targetQuantity;

        return $this;
    }

    public function getTargetStartDate(): ?int
    {
        return $this->targetStartDate;
    }

    public function setTargetStartDate(?int $targetStartDate): self
    {
        $this->initialized['targetStartDate'] = true;
        $this->targetStartDate = $targetStartDate;

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

    /**
     * @deprecated
     */
    public function getWarehouseName(): ?string
    {
        return $this->warehouseName;
    }

    /**
     * @deprecated
     */
    public function setWarehouseName(?string $warehouseName): self
    {
        $this->initialized['warehouseName'] = true;
        $this->warehouseName = $warehouseName;

        return $this;
    }

    /**
     * @return list<ProductionOrderWorkItem>|null
     */
    public function getWorkItems(): ?array
    {
        return $this->workItems;
    }

    /**
     * @param  list<ProductionOrderWorkItem>|null  $workItems
     */
    public function setWorkItems(?array $workItems): self
    {
        $this->initialized['workItems'] = true;
        $this->workItems = $workItems;

        return $this;
    }
}
