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
     * @var string
     */
    protected $articleId;

    /**
     * @var int
     */
    protected $earliestRequiredDate;

    /**
     * @var string
     */
    protected $internalShipmentId;

    /**
     * @var int
     */
    protected $latestRequiredDate;

    /**
     * @var string
     */
    protected $packagingUnitToOrderId;

    /**
     * @var string
     */
    protected $productionOrderId;

    /**
     * @var string
     */
    protected $productionOrderItemId;

    /**
     * @var int
     */
    protected $proposedDate;

    /**
     * @var string
     */
    protected $proposedQuantity;

    /**
     * @var string
     */
    protected $purchaseOrderId;

    /**
     * @var string
     */
    protected $requirementQuantity;

    /**
     * @var string
     */
    protected $requisitionNumber;

    /**
     * @var string
     */
    protected $salesOrderItemId;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var list<PurchaseRequisitionStatusHistory>
     */
    protected $statusHistory;

    /**
     * @var string
     */
    protected $supplierId;

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

    public function getArticleId(): string
    {
        return $this->articleId;
    }

    public function setArticleId(string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

        return $this;
    }

    public function getEarliestRequiredDate(): int
    {
        return $this->earliestRequiredDate;
    }

    public function setEarliestRequiredDate(int $earliestRequiredDate): self
    {
        $this->initialized['earliestRequiredDate'] = true;
        $this->earliestRequiredDate = $earliestRequiredDate;

        return $this;
    }

    public function getInternalShipmentId(): string
    {
        return $this->internalShipmentId;
    }

    public function setInternalShipmentId(string $internalShipmentId): self
    {
        $this->initialized['internalShipmentId'] = true;
        $this->internalShipmentId = $internalShipmentId;

        return $this;
    }

    public function getLatestRequiredDate(): int
    {
        return $this->latestRequiredDate;
    }

    public function setLatestRequiredDate(int $latestRequiredDate): self
    {
        $this->initialized['latestRequiredDate'] = true;
        $this->latestRequiredDate = $latestRequiredDate;

        return $this;
    }

    public function getPackagingUnitToOrderId(): string
    {
        return $this->packagingUnitToOrderId;
    }

    public function setPackagingUnitToOrderId(string $packagingUnitToOrderId): self
    {
        $this->initialized['packagingUnitToOrderId'] = true;
        $this->packagingUnitToOrderId = $packagingUnitToOrderId;

        return $this;
    }

    public function getProductionOrderId(): string
    {
        return $this->productionOrderId;
    }

    public function setProductionOrderId(string $productionOrderId): self
    {
        $this->initialized['productionOrderId'] = true;
        $this->productionOrderId = $productionOrderId;

        return $this;
    }

    public function getProductionOrderItemId(): string
    {
        return $this->productionOrderItemId;
    }

    public function setProductionOrderItemId(string $productionOrderItemId): self
    {
        $this->initialized['productionOrderItemId'] = true;
        $this->productionOrderItemId = $productionOrderItemId;

        return $this;
    }

    public function getProposedDate(): int
    {
        return $this->proposedDate;
    }

    public function setProposedDate(int $proposedDate): self
    {
        $this->initialized['proposedDate'] = true;
        $this->proposedDate = $proposedDate;

        return $this;
    }

    public function getProposedQuantity(): string
    {
        return $this->proposedQuantity;
    }

    public function setProposedQuantity(string $proposedQuantity): self
    {
        $this->initialized['proposedQuantity'] = true;
        $this->proposedQuantity = $proposedQuantity;

        return $this;
    }

    public function getPurchaseOrderId(): string
    {
        return $this->purchaseOrderId;
    }

    public function setPurchaseOrderId(string $purchaseOrderId): self
    {
        $this->initialized['purchaseOrderId'] = true;
        $this->purchaseOrderId = $purchaseOrderId;

        return $this;
    }

    public function getRequirementQuantity(): string
    {
        return $this->requirementQuantity;
    }

    public function setRequirementQuantity(string $requirementQuantity): self
    {
        $this->initialized['requirementQuantity'] = true;
        $this->requirementQuantity = $requirementQuantity;

        return $this;
    }

    public function getRequisitionNumber(): string
    {
        return $this->requisitionNumber;
    }

    public function setRequisitionNumber(string $requisitionNumber): self
    {
        $this->initialized['requisitionNumber'] = true;
        $this->requisitionNumber = $requisitionNumber;

        return $this;
    }

    public function getSalesOrderItemId(): string
    {
        return $this->salesOrderItemId;
    }

    public function setSalesOrderItemId(string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return list<PurchaseRequisitionStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }

    /**
     * @param  list<PurchaseRequisitionStatusHistory>  $statusHistory
     */
    public function setStatusHistory(array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;

        return $this;
    }

    public function getSupplierId(): string
    {
        return $this->supplierId;
    }

    public function setSupplierId(string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;

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
