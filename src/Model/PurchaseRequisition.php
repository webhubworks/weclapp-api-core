<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseRequisition extends \ArrayObject
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
     * @var string
     */
    protected $articleId;
    /**
     * 
     *
     * @var int
     */
    protected $earliestRequiredDate;
    /**
     * 
     *
     * @var string
     */
    protected $internalShipmentId;
    /**
     * 
     *
     * @var int
     */
    protected $latestRequiredDate;
    /**
     * 
     *
     * @var string
     */
    protected $packagingUnitToOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $productionOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $productionOrderItemId;
    /**
     * 
     *
     * @var int
     */
    protected $proposedDate;
    /**
     * 
     *
     * @var string
     */
    protected $proposedQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $purchaseOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $requirementQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $requisitionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $salesOrderItemId;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var list<PurchaseRequisitionStatusHistory>
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var string
     */
    protected $supplierId;
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
     * @return int
     */
    public function getEarliestRequiredDate(): int
    {
        return $this->earliestRequiredDate;
    }
    /**
     * 
     *
     * @param int $earliestRequiredDate
     *
     * @return self
     */
    public function setEarliestRequiredDate(int $earliestRequiredDate): self
    {
        $this->initialized['earliestRequiredDate'] = true;
        $this->earliestRequiredDate = $earliestRequiredDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInternalShipmentId(): string
    {
        return $this->internalShipmentId;
    }
    /**
     * 
     *
     * @param string $internalShipmentId
     *
     * @return self
     */
    public function setInternalShipmentId(string $internalShipmentId): self
    {
        $this->initialized['internalShipmentId'] = true;
        $this->internalShipmentId = $internalShipmentId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLatestRequiredDate(): int
    {
        return $this->latestRequiredDate;
    }
    /**
     * 
     *
     * @param int $latestRequiredDate
     *
     * @return self
     */
    public function setLatestRequiredDate(int $latestRequiredDate): self
    {
        $this->initialized['latestRequiredDate'] = true;
        $this->latestRequiredDate = $latestRequiredDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPackagingUnitToOrderId(): string
    {
        return $this->packagingUnitToOrderId;
    }
    /**
     * 
     *
     * @param string $packagingUnitToOrderId
     *
     * @return self
     */
    public function setPackagingUnitToOrderId(string $packagingUnitToOrderId): self
    {
        $this->initialized['packagingUnitToOrderId'] = true;
        $this->packagingUnitToOrderId = $packagingUnitToOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductionOrderId(): string
    {
        return $this->productionOrderId;
    }
    /**
     * 
     *
     * @param string $productionOrderId
     *
     * @return self
     */
    public function setProductionOrderId(string $productionOrderId): self
    {
        $this->initialized['productionOrderId'] = true;
        $this->productionOrderId = $productionOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductionOrderItemId(): string
    {
        return $this->productionOrderItemId;
    }
    /**
     * 
     *
     * @param string $productionOrderItemId
     *
     * @return self
     */
    public function setProductionOrderItemId(string $productionOrderItemId): self
    {
        $this->initialized['productionOrderItemId'] = true;
        $this->productionOrderItemId = $productionOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getProposedDate(): int
    {
        return $this->proposedDate;
    }
    /**
     * 
     *
     * @param int $proposedDate
     *
     * @return self
     */
    public function setProposedDate(int $proposedDate): self
    {
        $this->initialized['proposedDate'] = true;
        $this->proposedDate = $proposedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProposedQuantity(): string
    {
        return $this->proposedQuantity;
    }
    /**
     * 
     *
     * @param string $proposedQuantity
     *
     * @return self
     */
    public function setProposedQuantity(string $proposedQuantity): self
    {
        $this->initialized['proposedQuantity'] = true;
        $this->proposedQuantity = $proposedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseOrderId(): string
    {
        return $this->purchaseOrderId;
    }
    /**
     * 
     *
     * @param string $purchaseOrderId
     *
     * @return self
     */
    public function setPurchaseOrderId(string $purchaseOrderId): self
    {
        $this->initialized['purchaseOrderId'] = true;
        $this->purchaseOrderId = $purchaseOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequirementQuantity(): string
    {
        return $this->requirementQuantity;
    }
    /**
     * 
     *
     * @param string $requirementQuantity
     *
     * @return self
     */
    public function setRequirementQuantity(string $requirementQuantity): self
    {
        $this->initialized['requirementQuantity'] = true;
        $this->requirementQuantity = $requirementQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequisitionNumber(): string
    {
        return $this->requisitionNumber;
    }
    /**
     * 
     *
     * @param string $requisitionNumber
     *
     * @return self
     */
    public function setRequisitionNumber(string $requisitionNumber): self
    {
        $this->initialized['requisitionNumber'] = true;
        $this->requisitionNumber = $requisitionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesOrderItemId(): string
    {
        return $this->salesOrderItemId;
    }
    /**
     * 
     *
     * @param string $salesOrderItemId
     *
     * @return self
     */
    public function setSalesOrderItemId(string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;
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
     * @return list<PurchaseRequisitionStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<PurchaseRequisitionStatusHistory> $statusHistory
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
    public function getSupplierId(): string
    {
        return $this->supplierId;
    }
    /**
     * 
     *
     * @param string $supplierId
     *
     * @return self
     */
    public function setSupplierId(string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;
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