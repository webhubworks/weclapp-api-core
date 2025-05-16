<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderItem extends \ArrayObject
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
    protected $note;
    /**
     * 
     *
     * @var int
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $quantity;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $descriptionFixed;
    /**
     * 
     *
     * @var string
     */
    protected $itemType;
    /**
     * 
     *
     * @var bool
     */
    protected $manualQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $parentItemId;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $unitId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $unitName;
    /**
     * 
     *
     * @var string
     */
    protected $discountPercentage;
    /**
     * 
     *
     * @var string
     */
    protected $grossAmount;
    /**
     * 
     *
     * @var string
     */
    protected $grossAmountInCompanyCurrency;
    /**
     * 
     *
     * @var bool
     */
    protected $manualUnitPrice;
    /**
     * 
     *
     * @var string
     */
    protected $netAmount;
    /**
     * 
     *
     * @var string
     */
    protected $netAmountForStatistics;
    /**
     * 
     *
     * @var string
     */
    protected $netAmountForStatisticsInCompanyCurrency;
    /**
     * 
     *
     * @var string
     */
    protected $netAmountInCompanyCurrency;
    /**
     * 
     *
     * @var list<ReductionAdditionItem>
     */
    protected $reductionAdditionItems;
    /**
     * 
     *
     * @var string
     */
    protected $taxId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $taxName;
    /**
     * 
     *
     * @var string
     */
    protected $unitPrice;
    /**
     * 
     *
     * @var string
     */
    protected $unitPriceInCompanyCurrency;
    /**
     * 
     *
     * @var bool
     */
    protected $addPageBreakBefore;
    /**
     * 
     *
     * @var string
     */
    protected $groupName;
    /**
     * 
     *
     * @var list<BatchSerialNumber>
     */
    protected $batchSerialNumbers;
    /**
     * 
     *
     * @var string
     */
    protected $blanketPurchaseOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $blanketPurchaseOrderReleaseId;
    /**
     * 
     *
     * @var string
     */
    protected $invoicedQuantity;
    /**
     * 
     *
     * @var int
     */
    protected $plannedDeliveryDate;
    /**
     * 
     *
     * @var int
     */
    protected $plannedShippingDate;
    /**
     * 
     *
     * @var string
     */
    protected $receivedQuantity;
    /**
     * 
     *
     * @deprecated
     *
     * @var int
     */
    protected $salesOrderItemId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $supplierArticleId;
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
    public function getNote(): string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
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
     * @return bool
     */
    public function getDescriptionFixed(): bool
    {
        return $this->descriptionFixed;
    }
    /**
     * 
     *
     * @param bool $descriptionFixed
     *
     * @return self
     */
    public function setDescriptionFixed(bool $descriptionFixed): self
    {
        $this->initialized['descriptionFixed'] = true;
        $this->descriptionFixed = $descriptionFixed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getItemType(): string
    {
        return $this->itemType;
    }
    /**
     * 
     *
     * @param string $itemType
     *
     * @return self
     */
    public function setItemType(string $itemType): self
    {
        $this->initialized['itemType'] = true;
        $this->itemType = $itemType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getManualQuantity(): bool
    {
        return $this->manualQuantity;
    }
    /**
     * 
     *
     * @param bool $manualQuantity
     *
     * @return self
     */
    public function setManualQuantity(bool $manualQuantity): self
    {
        $this->initialized['manualQuantity'] = true;
        $this->manualQuantity = $manualQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getParentItemId(): string
    {
        return $this->parentItemId;
    }
    /**
     * 
     *
     * @param string $parentItemId
     *
     * @return self
     */
    public function setParentItemId(string $parentItemId): self
    {
        $this->initialized['parentItemId'] = true;
        $this->parentItemId = $parentItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUnitId(): string
    {
        return $this->unitId;
    }
    /**
     * 
     *
     * @param string $unitId
     *
     * @return self
     */
    public function setUnitId(string $unitId): self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }
    /**
     * 
     *
     * @param string $unitName
     *
     * @deprecated
     *
     * @return self
     */
    public function setUnitName(string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDiscountPercentage(): string
    {
        return $this->discountPercentage;
    }
    /**
     * 
     *
     * @param string $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage(string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGrossAmount(): string
    {
        return $this->grossAmount;
    }
    /**
     * 
     *
     * @param string $grossAmount
     *
     * @return self
     */
    public function setGrossAmount(string $grossAmount): self
    {
        $this->initialized['grossAmount'] = true;
        $this->grossAmount = $grossAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGrossAmountInCompanyCurrency(): string
    {
        return $this->grossAmountInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string $grossAmountInCompanyCurrency
     *
     * @return self
     */
    public function setGrossAmountInCompanyCurrency(string $grossAmountInCompanyCurrency): self
    {
        $this->initialized['grossAmountInCompanyCurrency'] = true;
        $this->grossAmountInCompanyCurrency = $grossAmountInCompanyCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getManualUnitPrice(): bool
    {
        return $this->manualUnitPrice;
    }
    /**
     * 
     *
     * @param bool $manualUnitPrice
     *
     * @return self
     */
    public function setManualUnitPrice(bool $manualUnitPrice): self
    {
        $this->initialized['manualUnitPrice'] = true;
        $this->manualUnitPrice = $manualUnitPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNetAmount(): string
    {
        return $this->netAmount;
    }
    /**
     * 
     *
     * @param string $netAmount
     *
     * @return self
     */
    public function setNetAmount(string $netAmount): self
    {
        $this->initialized['netAmount'] = true;
        $this->netAmount = $netAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNetAmountForStatistics(): string
    {
        return $this->netAmountForStatistics;
    }
    /**
     * 
     *
     * @param string $netAmountForStatistics
     *
     * @return self
     */
    public function setNetAmountForStatistics(string $netAmountForStatistics): self
    {
        $this->initialized['netAmountForStatistics'] = true;
        $this->netAmountForStatistics = $netAmountForStatistics;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNetAmountForStatisticsInCompanyCurrency(): string
    {
        return $this->netAmountForStatisticsInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string $netAmountForStatisticsInCompanyCurrency
     *
     * @return self
     */
    public function setNetAmountForStatisticsInCompanyCurrency(string $netAmountForStatisticsInCompanyCurrency): self
    {
        $this->initialized['netAmountForStatisticsInCompanyCurrency'] = true;
        $this->netAmountForStatisticsInCompanyCurrency = $netAmountForStatisticsInCompanyCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNetAmountInCompanyCurrency(): string
    {
        return $this->netAmountInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string $netAmountInCompanyCurrency
     *
     * @return self
     */
    public function setNetAmountInCompanyCurrency(string $netAmountInCompanyCurrency): self
    {
        $this->initialized['netAmountInCompanyCurrency'] = true;
        $this->netAmountInCompanyCurrency = $netAmountInCompanyCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return list<ReductionAdditionItem>
     */
    public function getReductionAdditionItems(): array
    {
        return $this->reductionAdditionItems;
    }
    /**
     * 
     *
     * @param list<ReductionAdditionItem> $reductionAdditionItems
     *
     * @return self
     */
    public function setReductionAdditionItems(array $reductionAdditionItems): self
    {
        $this->initialized['reductionAdditionItems'] = true;
        $this->reductionAdditionItems = $reductionAdditionItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }
    /**
     * 
     *
     * @param string $taxId
     *
     * @return self
     */
    public function setTaxId(string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getTaxName(): string
    {
        return $this->taxName;
    }
    /**
     * 
     *
     * @param string $taxName
     *
     * @deprecated
     *
     * @return self
     */
    public function setTaxName(string $taxName): self
    {
        $this->initialized['taxName'] = true;
        $this->taxName = $taxName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUnitPrice(): string
    {
        return $this->unitPrice;
    }
    /**
     * 
     *
     * @param string $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(string $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUnitPriceInCompanyCurrency(): string
    {
        return $this->unitPriceInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string $unitPriceInCompanyCurrency
     *
     * @return self
     */
    public function setUnitPriceInCompanyCurrency(string $unitPriceInCompanyCurrency): self
    {
        $this->initialized['unitPriceInCompanyCurrency'] = true;
        $this->unitPriceInCompanyCurrency = $unitPriceInCompanyCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAddPageBreakBefore(): bool
    {
        return $this->addPageBreakBefore;
    }
    /**
     * 
     *
     * @param bool $addPageBreakBefore
     *
     * @return self
     */
    public function setAddPageBreakBefore(bool $addPageBreakBefore): self
    {
        $this->initialized['addPageBreakBefore'] = true;
        $this->addPageBreakBefore = $addPageBreakBefore;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGroupName(): string
    {
        return $this->groupName;
    }
    /**
     * 
     *
     * @param string $groupName
     *
     * @return self
     */
    public function setGroupName(string $groupName): self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * 
     *
     * @return list<BatchSerialNumber>
     */
    public function getBatchSerialNumbers(): array
    {
        return $this->batchSerialNumbers;
    }
    /**
     * 
     *
     * @param list<BatchSerialNumber> $batchSerialNumbers
     *
     * @return self
     */
    public function setBatchSerialNumbers(array $batchSerialNumbers): self
    {
        $this->initialized['batchSerialNumbers'] = true;
        $this->batchSerialNumbers = $batchSerialNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBlanketPurchaseOrderId(): string
    {
        return $this->blanketPurchaseOrderId;
    }
    /**
     * 
     *
     * @param string $blanketPurchaseOrderId
     *
     * @return self
     */
    public function setBlanketPurchaseOrderId(string $blanketPurchaseOrderId): self
    {
        $this->initialized['blanketPurchaseOrderId'] = true;
        $this->blanketPurchaseOrderId = $blanketPurchaseOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBlanketPurchaseOrderReleaseId(): string
    {
        return $this->blanketPurchaseOrderReleaseId;
    }
    /**
     * 
     *
     * @param string $blanketPurchaseOrderReleaseId
     *
     * @return self
     */
    public function setBlanketPurchaseOrderReleaseId(string $blanketPurchaseOrderReleaseId): self
    {
        $this->initialized['blanketPurchaseOrderReleaseId'] = true;
        $this->blanketPurchaseOrderReleaseId = $blanketPurchaseOrderReleaseId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoicedQuantity(): string
    {
        return $this->invoicedQuantity;
    }
    /**
     * 
     *
     * @param string $invoicedQuantity
     *
     * @return self
     */
    public function setInvoicedQuantity(string $invoicedQuantity): self
    {
        $this->initialized['invoicedQuantity'] = true;
        $this->invoicedQuantity = $invoicedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlannedDeliveryDate(): int
    {
        return $this->plannedDeliveryDate;
    }
    /**
     * 
     *
     * @param int $plannedDeliveryDate
     *
     * @return self
     */
    public function setPlannedDeliveryDate(int $plannedDeliveryDate): self
    {
        $this->initialized['plannedDeliveryDate'] = true;
        $this->plannedDeliveryDate = $plannedDeliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlannedShippingDate(): int
    {
        return $this->plannedShippingDate;
    }
    /**
     * 
     *
     * @param int $plannedShippingDate
     *
     * @return self
     */
    public function setPlannedShippingDate(int $plannedShippingDate): self
    {
        $this->initialized['plannedShippingDate'] = true;
        $this->plannedShippingDate = $plannedShippingDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReceivedQuantity(): string
    {
        return $this->receivedQuantity;
    }
    /**
     * 
     *
     * @param string $receivedQuantity
     *
     * @return self
     */
    public function setReceivedQuantity(string $receivedQuantity): self
    {
        $this->initialized['receivedQuantity'] = true;
        $this->receivedQuantity = $receivedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return int
     */
    public function getSalesOrderItemId(): int
    {
        return $this->salesOrderItemId;
    }
    /**
     * 
     *
     * @param int $salesOrderItemId
     *
     * @deprecated
     *
     * @return self
     */
    public function setSalesOrderItemId(int $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getSupplierArticleId(): string
    {
        return $this->supplierArticleId;
    }
    /**
     * 
     *
     * @param string $supplierArticleId
     *
     * @deprecated
     *
     * @return self
     */
    public function setSupplierArticleId(string $supplierArticleId): self
    {
        $this->initialized['supplierArticleId'] = true;
        $this->supplierArticleId = $supplierArticleId;
        return $this;
    }
}