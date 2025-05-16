<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderRequestOfferItem extends \ArrayObject
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
     * @var bool
     */
    protected $accepted;
    /**
     * 
     *
     * @deprecated
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
    protected $containerQuantity;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @deprecated
     *
     * @var bool
     */
    protected $descriptionFixed;
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
     * @deprecated
     *
     * @var bool
     */
    protected $manualQuantity;
    /**
     * 
     *
     * @deprecated
     *
     * @var bool
     */
    protected $manualUnitPrice;
    /**
     * 
     *
     * @var string
     */
    protected $minQuantity;
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
     * @deprecated
     *
     * @var string
     */
    protected $note;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $parentItemId;
    /**
     * 
     *
     * @deprecated
     *
     * @var int
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var int
     */
    protected $procurementLeadDays;
    /**
     * 
     *
     * @deprecated
     *
     * @var int
     */
    protected $purchaseOrderRequestItemId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $quantity;
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
    protected $scaleType;
    /**
     * 
     *
     * @var list<PurchaseOrderRequestOfferItemScaleValue>
     */
    protected $scaleValues;
    /**
     * 
     *
     * @var string
     */
    protected $supplierArticleNumber;
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
     * @deprecated
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @deprecated
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
    protected $useSupplierArticleNumber;
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
     * @return bool
     */
    public function getAccepted(): bool
    {
        return $this->accepted;
    }
    /**
     * 
     *
     * @param bool $accepted
     *
     * @return self
     */
    public function setAccepted(bool $accepted): self
    {
        $this->initialized['accepted'] = true;
        $this->accepted = $accepted;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
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
    public function getContainerQuantity(): string
    {
        return $this->containerQuantity;
    }
    /**
     * 
     *
     * @param string $containerQuantity
     *
     * @return self
     */
    public function setContainerQuantity(string $containerQuantity): self
    {
        $this->initialized['containerQuantity'] = true;
        $this->containerQuantity = $containerQuantity;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
    public function getMinQuantity(): string
    {
        return $this->minQuantity;
    }
    /**
     * 
     *
     * @param string $minQuantity
     *
     * @return self
     */
    public function setMinQuantity(string $minQuantity): self
    {
        $this->initialized['minQuantity'] = true;
        $this->minQuantity = $minQuantity;
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @return int
     */
    public function getProcurementLeadDays(): int
    {
        return $this->procurementLeadDays;
    }
    /**
     * 
     *
     * @param int $procurementLeadDays
     *
     * @return self
     */
    public function setProcurementLeadDays(int $procurementLeadDays): self
    {
        $this->initialized['procurementLeadDays'] = true;
        $this->procurementLeadDays = $procurementLeadDays;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return int
     */
    public function getPurchaseOrderRequestItemId(): int
    {
        return $this->purchaseOrderRequestItemId;
    }
    /**
     * 
     *
     * @param int $purchaseOrderRequestItemId
     *
     * @deprecated
     *
     * @return self
     */
    public function setPurchaseOrderRequestItemId(int $purchaseOrderRequestItemId): self
    {
        $this->initialized['purchaseOrderRequestItemId'] = true;
        $this->purchaseOrderRequestItemId = $purchaseOrderRequestItemId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
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
    public function getScaleType(): string
    {
        return $this->scaleType;
    }
    /**
     * 
     *
     * @param string $scaleType
     *
     * @return self
     */
    public function setScaleType(string $scaleType): self
    {
        $this->initialized['scaleType'] = true;
        $this->scaleType = $scaleType;
        return $this;
    }
    /**
     * 
     *
     * @return list<PurchaseOrderRequestOfferItemScaleValue>
     */
    public function getScaleValues(): array
    {
        return $this->scaleValues;
    }
    /**
     * 
     *
     * @param list<PurchaseOrderRequestOfferItemScaleValue> $scaleValues
     *
     * @return self
     */
    public function setScaleValues(array $scaleValues): self
    {
        $this->initialized['scaleValues'] = true;
        $this->scaleValues = $scaleValues;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierArticleNumber(): string
    {
        return $this->supplierArticleNumber;
    }
    /**
     * 
     *
     * @param string $supplierArticleNumber
     *
     * @return self
     */
    public function setSupplierArticleNumber(string $supplierArticleNumber): self
    {
        $this->initialized['supplierArticleNumber'] = true;
        $this->supplierArticleNumber = $supplierArticleNumber;
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
    public function getUseSupplierArticleNumber(): bool
    {
        return $this->useSupplierArticleNumber;
    }
    /**
     * 
     *
     * @param bool $useSupplierArticleNumber
     *
     * @return self
     */
    public function setUseSupplierArticleNumber(bool $useSupplierArticleNumber): self
    {
        $this->initialized['useSupplierArticleNumber'] = true;
        $this->useSupplierArticleNumber = $useSupplierArticleNumber;
        return $this;
    }
}