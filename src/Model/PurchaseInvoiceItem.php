<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseInvoiceItem extends \ArrayObject
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
     * @deprecated
     *
     * @var string
     */
    protected $articleNumber;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var int
     */
    protected $positionNumber;

    /**
     * @var string
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $descriptionFixed;

    /**
     * @var string
     */
    protected $itemType;

    /**
     * @var bool
     */
    protected $manualQuantity;

    /**
     * @var string
     */
    protected $parentItemId;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $unitId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $unitName;

    /**
     * @var string
     */
    protected $discountPercentage;

    /**
     * @var string
     */
    protected $grossAmount;

    /**
     * @var string
     */
    protected $grossAmountInCompanyCurrency;

    /**
     * @var bool
     */
    protected $manualUnitPrice;

    /**
     * @var string
     */
    protected $netAmount;

    /**
     * @var string
     */
    protected $netAmountForStatistics;

    /**
     * @var string
     */
    protected $netAmountForStatisticsInCompanyCurrency;

    /**
     * @var string
     */
    protected $netAmountInCompanyCurrency;

    /**
     * @var list<ReductionAdditionItem>
     */
    protected $reductionAdditionItems;

    /**
     * @var string
     */
    protected $taxId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $taxName;

    /**
     * @var string
     */
    protected $unitPrice;

    /**
     * @var string
     */
    protected $unitPriceInCompanyCurrency;

    /**
     * @var string
     */
    protected $accountId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $accountNumber;

    /**
     * @var string
     */
    protected $contractItemId;

    /**
     * @var string
     */
    protected $cost2CostCenterId;

    /**
     * @var list<CostCenterWithDistributionPercentage>
     */
    protected $costCenterItems;

    /**
     * @var string
     */
    protected $costTypeId;

    /**
     * @var string
     */
    protected $creditedInvoiceItemId;

    /**
     * @var int
     */
    protected $deliveryDate;

    /**
     * @deprecated
     *
     * @var list<PurchaseInvoiceItemRelationship>
     */
    protected $purchaseInvoiceItemRelationship;

    /**
     * @var int
     */
    protected $servicePeriodFromDate;

    /**
     * @var int
     */
    protected $servicePeriodToDate;

    /**
     * @var int
     */
    protected $shippingDate;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $supplierArticleId;

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

    /**
     * @deprecated
     */
    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }

    /**
     * @deprecated
     */
    public function setArticleNumber(string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;

        return $this;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }

    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getDescriptionFixed(): bool
    {
        return $this->descriptionFixed;
    }

    public function setDescriptionFixed(bool $descriptionFixed): self
    {
        $this->initialized['descriptionFixed'] = true;
        $this->descriptionFixed = $descriptionFixed;

        return $this;
    }

    public function getItemType(): string
    {
        return $this->itemType;
    }

    public function setItemType(string $itemType): self
    {
        $this->initialized['itemType'] = true;
        $this->itemType = $itemType;

        return $this;
    }

    public function getManualQuantity(): bool
    {
        return $this->manualQuantity;
    }

    public function setManualQuantity(bool $manualQuantity): self
    {
        $this->initialized['manualQuantity'] = true;
        $this->manualQuantity = $manualQuantity;

        return $this;
    }

    public function getParentItemId(): string
    {
        return $this->parentItemId;
    }

    public function setParentItemId(string $parentItemId): self
    {
        $this->initialized['parentItemId'] = true;
        $this->parentItemId = $parentItemId;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getUnitId(): string
    {
        return $this->unitId;
    }

    public function setUnitId(string $unitId): self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * @deprecated
     */
    public function setUnitName(string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;

        return $this;
    }

    public function getDiscountPercentage(): string
    {
        return $this->discountPercentage;
    }

    public function setDiscountPercentage(string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    public function getGrossAmount(): string
    {
        return $this->grossAmount;
    }

    public function setGrossAmount(string $grossAmount): self
    {
        $this->initialized['grossAmount'] = true;
        $this->grossAmount = $grossAmount;

        return $this;
    }

    public function getGrossAmountInCompanyCurrency(): string
    {
        return $this->grossAmountInCompanyCurrency;
    }

    public function setGrossAmountInCompanyCurrency(string $grossAmountInCompanyCurrency): self
    {
        $this->initialized['grossAmountInCompanyCurrency'] = true;
        $this->grossAmountInCompanyCurrency = $grossAmountInCompanyCurrency;

        return $this;
    }

    public function getManualUnitPrice(): bool
    {
        return $this->manualUnitPrice;
    }

    public function setManualUnitPrice(bool $manualUnitPrice): self
    {
        $this->initialized['manualUnitPrice'] = true;
        $this->manualUnitPrice = $manualUnitPrice;

        return $this;
    }

    public function getNetAmount(): string
    {
        return $this->netAmount;
    }

    public function setNetAmount(string $netAmount): self
    {
        $this->initialized['netAmount'] = true;
        $this->netAmount = $netAmount;

        return $this;
    }

    public function getNetAmountForStatistics(): string
    {
        return $this->netAmountForStatistics;
    }

    public function setNetAmountForStatistics(string $netAmountForStatistics): self
    {
        $this->initialized['netAmountForStatistics'] = true;
        $this->netAmountForStatistics = $netAmountForStatistics;

        return $this;
    }

    public function getNetAmountForStatisticsInCompanyCurrency(): string
    {
        return $this->netAmountForStatisticsInCompanyCurrency;
    }

    public function setNetAmountForStatisticsInCompanyCurrency(string $netAmountForStatisticsInCompanyCurrency): self
    {
        $this->initialized['netAmountForStatisticsInCompanyCurrency'] = true;
        $this->netAmountForStatisticsInCompanyCurrency = $netAmountForStatisticsInCompanyCurrency;

        return $this;
    }

    public function getNetAmountInCompanyCurrency(): string
    {
        return $this->netAmountInCompanyCurrency;
    }

    public function setNetAmountInCompanyCurrency(string $netAmountInCompanyCurrency): self
    {
        $this->initialized['netAmountInCompanyCurrency'] = true;
        $this->netAmountInCompanyCurrency = $netAmountInCompanyCurrency;

        return $this;
    }

    /**
     * @return list<ReductionAdditionItem>
     */
    public function getReductionAdditionItems(): array
    {
        return $this->reductionAdditionItems;
    }

    /**
     * @param  list<ReductionAdditionItem>  $reductionAdditionItems
     */
    public function setReductionAdditionItems(array $reductionAdditionItems): self
    {
        $this->initialized['reductionAdditionItems'] = true;
        $this->reductionAdditionItems = $reductionAdditionItems;

        return $this;
    }

    public function getTaxId(): string
    {
        return $this->taxId;
    }

    public function setTaxId(string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getTaxName(): string
    {
        return $this->taxName;
    }

    /**
     * @deprecated
     */
    public function setTaxName(string $taxName): self
    {
        $this->initialized['taxName'] = true;
        $this->taxName = $taxName;

        return $this;
    }

    public function getUnitPrice(): string
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(string $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function getUnitPriceInCompanyCurrency(): string
    {
        return $this->unitPriceInCompanyCurrency;
    }

    public function setUnitPriceInCompanyCurrency(string $unitPriceInCompanyCurrency): self
    {
        $this->initialized['unitPriceInCompanyCurrency'] = true;
        $this->unitPriceInCompanyCurrency = $unitPriceInCompanyCurrency;

        return $this;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function setAccountId(string $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @deprecated
     */
    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getContractItemId(): string
    {
        return $this->contractItemId;
    }

    public function setContractItemId(string $contractItemId): self
    {
        $this->initialized['contractItemId'] = true;
        $this->contractItemId = $contractItemId;

        return $this;
    }

    public function getCost2CostCenterId(): string
    {
        return $this->cost2CostCenterId;
    }

    public function setCost2CostCenterId(string $cost2CostCenterId): self
    {
        $this->initialized['cost2CostCenterId'] = true;
        $this->cost2CostCenterId = $cost2CostCenterId;

        return $this;
    }

    /**
     * @return list<CostCenterWithDistributionPercentage>
     */
    public function getCostCenterItems(): array
    {
        return $this->costCenterItems;
    }

    /**
     * @param  list<CostCenterWithDistributionPercentage>  $costCenterItems
     */
    public function setCostCenterItems(array $costCenterItems): self
    {
        $this->initialized['costCenterItems'] = true;
        $this->costCenterItems = $costCenterItems;

        return $this;
    }

    public function getCostTypeId(): string
    {
        return $this->costTypeId;
    }

    public function setCostTypeId(string $costTypeId): self
    {
        $this->initialized['costTypeId'] = true;
        $this->costTypeId = $costTypeId;

        return $this;
    }

    public function getCreditedInvoiceItemId(): string
    {
        return $this->creditedInvoiceItemId;
    }

    public function setCreditedInvoiceItemId(string $creditedInvoiceItemId): self
    {
        $this->initialized['creditedInvoiceItemId'] = true;
        $this->creditedInvoiceItemId = $creditedInvoiceItemId;

        return $this;
    }

    public function getDeliveryDate(): int
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * @deprecated
     *
     * @return list<PurchaseInvoiceItemRelationship>
     */
    public function getPurchaseInvoiceItemRelationship(): array
    {
        return $this->purchaseInvoiceItemRelationship;
    }

    /**
     * @param  list<PurchaseInvoiceItemRelationship>  $purchaseInvoiceItemRelationship
     *
     * @deprecated
     */
    public function setPurchaseInvoiceItemRelationship(array $purchaseInvoiceItemRelationship): self
    {
        $this->initialized['purchaseInvoiceItemRelationship'] = true;
        $this->purchaseInvoiceItemRelationship = $purchaseInvoiceItemRelationship;

        return $this;
    }

    public function getServicePeriodFromDate(): int
    {
        return $this->servicePeriodFromDate;
    }

    public function setServicePeriodFromDate(int $servicePeriodFromDate): self
    {
        $this->initialized['servicePeriodFromDate'] = true;
        $this->servicePeriodFromDate = $servicePeriodFromDate;

        return $this;
    }

    public function getServicePeriodToDate(): int
    {
        return $this->servicePeriodToDate;
    }

    public function setServicePeriodToDate(int $servicePeriodToDate): self
    {
        $this->initialized['servicePeriodToDate'] = true;
        $this->servicePeriodToDate = $servicePeriodToDate;

        return $this;
    }

    public function getShippingDate(): int
    {
        return $this->shippingDate;
    }

    public function setShippingDate(int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSupplierArticleId(): string
    {
        return $this->supplierArticleId;
    }

    /**
     * @deprecated
     */
    public function setSupplierArticleId(string $supplierArticleId): self
    {
        $this->initialized['supplierArticleId'] = true;
        $this->supplierArticleId = $supplierArticleId;

        return $this;
    }
}
