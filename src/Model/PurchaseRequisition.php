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
     * @var string|null
     */
    protected $articleId;
    /**
     * 
     *
     * @var int|null
     */
    protected $earliestRequiredDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $internalShipmentId;
    /**
     * 
     *
     * @var int|null
     */
    protected $latestRequiredDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $packagingUnitToOrderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $productionOrderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $productionOrderItemId;
    /**
     * 
     *
     * @var int|null
     */
    protected $proposedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $proposedQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $purchaseOrderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $requirementQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $requisitionNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var list<PurchaseRequisitionStatusHistory>|null
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierId;
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
     * @return string|null
     */
    public function getArticleId(): ?string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string|null $articleId
     *
     * @return self
     */
    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEarliestRequiredDate(): ?int
    {
        return $this->earliestRequiredDate;
    }
    /**
     * 
     *
     * @param int|null $earliestRequiredDate
     *
     * @return self
     */
    public function setEarliestRequiredDate(?int $earliestRequiredDate): self
    {
        $this->initialized['earliestRequiredDate'] = true;
        $this->earliestRequiredDate = $earliestRequiredDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInternalShipmentId(): ?string
    {
        return $this->internalShipmentId;
    }
    /**
     * 
     *
     * @param string|null $internalShipmentId
     *
     * @return self
     */
    public function setInternalShipmentId(?string $internalShipmentId): self
    {
        $this->initialized['internalShipmentId'] = true;
        $this->internalShipmentId = $internalShipmentId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLatestRequiredDate(): ?int
    {
        return $this->latestRequiredDate;
    }
    /**
     * 
     *
     * @param int|null $latestRequiredDate
     *
     * @return self
     */
    public function setLatestRequiredDate(?int $latestRequiredDate): self
    {
        $this->initialized['latestRequiredDate'] = true;
        $this->latestRequiredDate = $latestRequiredDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPackagingUnitToOrderId(): ?string
    {
        return $this->packagingUnitToOrderId;
    }
    /**
     * 
     *
     * @param string|null $packagingUnitToOrderId
     *
     * @return self
     */
    public function setPackagingUnitToOrderId(?string $packagingUnitToOrderId): self
    {
        $this->initialized['packagingUnitToOrderId'] = true;
        $this->packagingUnitToOrderId = $packagingUnitToOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProductionOrderId(): ?string
    {
        return $this->productionOrderId;
    }
    /**
     * 
     *
     * @param string|null $productionOrderId
     *
     * @return self
     */
    public function setProductionOrderId(?string $productionOrderId): self
    {
        $this->initialized['productionOrderId'] = true;
        $this->productionOrderId = $productionOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProductionOrderItemId(): ?string
    {
        return $this->productionOrderItemId;
    }
    /**
     * 
     *
     * @param string|null $productionOrderItemId
     *
     * @return self
     */
    public function setProductionOrderItemId(?string $productionOrderItemId): self
    {
        $this->initialized['productionOrderItemId'] = true;
        $this->productionOrderItemId = $productionOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getProposedDate(): ?int
    {
        return $this->proposedDate;
    }
    /**
     * 
     *
     * @param int|null $proposedDate
     *
     * @return self
     */
    public function setProposedDate(?int $proposedDate): self
    {
        $this->initialized['proposedDate'] = true;
        $this->proposedDate = $proposedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProposedQuantity(): ?string
    {
        return $this->proposedQuantity;
    }
    /**
     * 
     *
     * @param string|null $proposedQuantity
     *
     * @return self
     */
    public function setProposedQuantity(?string $proposedQuantity): self
    {
        $this->initialized['proposedQuantity'] = true;
        $this->proposedQuantity = $proposedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseOrderId(): ?string
    {
        return $this->purchaseOrderId;
    }
    /**
     * 
     *
     * @param string|null $purchaseOrderId
     *
     * @return self
     */
    public function setPurchaseOrderId(?string $purchaseOrderId): self
    {
        $this->initialized['purchaseOrderId'] = true;
        $this->purchaseOrderId = $purchaseOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRequirementQuantity(): ?string
    {
        return $this->requirementQuantity;
    }
    /**
     * 
     *
     * @param string|null $requirementQuantity
     *
     * @return self
     */
    public function setRequirementQuantity(?string $requirementQuantity): self
    {
        $this->initialized['requirementQuantity'] = true;
        $this->requirementQuantity = $requirementQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRequisitionNumber(): ?string
    {
        return $this->requisitionNumber;
    }
    /**
     * 
     *
     * @param string|null $requisitionNumber
     *
     * @return self
     */
    public function setRequisitionNumber(?string $requisitionNumber): self
    {
        $this->initialized['requisitionNumber'] = true;
        $this->requisitionNumber = $requisitionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesOrderItemId(): ?string
    {
        return $this->salesOrderItemId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderItemId
     *
     * @return self
     */
    public function setSalesOrderItemId(?string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;
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
     * @return list<PurchaseRequisitionStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<PurchaseRequisitionStatusHistory>|null $statusHistory
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
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * 
     *
     * @param string|null $supplierId
     *
     * @return self
     */
    public function setSupplierId(?string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;
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