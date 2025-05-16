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
     * @var bool|null
     */
    protected $accepted;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $articleId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $articleNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $containerQuantity;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @deprecated
     *
     * @var bool|null
     */
    protected $descriptionFixed;
    /**
     * 
     *
     * @var string|null
     */
    protected $discountPercentage;
    /**
     * 
     *
     * @var string|null
     */
    protected $grossAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $grossAmountInCompanyCurrency;
    /**
     * 
     *
     * @deprecated
     *
     * @var bool|null
     */
    protected $manualQuantity;
    /**
     * 
     *
     * @deprecated
     *
     * @var bool|null
     */
    protected $manualUnitPrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $minQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $netAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $netAmountForStatistics;
    /**
     * 
     *
     * @var string|null
     */
    protected $netAmountForStatisticsInCompanyCurrency;
    /**
     * 
     *
     * @var string|null
     */
    protected $netAmountInCompanyCurrency;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $note;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $parentItemId;
    /**
     * 
     *
     * @deprecated
     *
     * @var int|null
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $procurementLeadDays;
    /**
     * 
     *
     * @deprecated
     *
     * @var int|null
     */
    protected $purchaseOrderRequestItemId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $quantity;
    /**
     * 
     *
     * @var list<ReductionAdditionItem>|null
     */
    protected $reductionAdditionItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $scaleType;
    /**
     * 
     *
     * @var list<PurchaseOrderRequestOfferItemScaleValue>|null
     */
    protected $scaleValues;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierArticleNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $taxId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $taxName;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $unitId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $unitName;
    /**
     * 
     *
     * @var string|null
     */
    protected $unitPrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $unitPriceInCompanyCurrency;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useSupplierArticleNumber;
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
     * @return bool|null
     */
    public function getAccepted(): ?bool
    {
        return $this->accepted;
    }
    /**
     * 
     *
     * @param bool|null $accepted
     *
     * @return self
     */
    public function setAccepted(?bool $accepted): self
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
     * @deprecated
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
     * @deprecated
     *
     * @return string|null
     */
    public function getArticleNumber(): ?string
    {
        return $this->articleNumber;
    }
    /**
     * 
     *
     * @param string|null $articleNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setArticleNumber(?string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContainerQuantity(): ?string
    {
        return $this->containerQuantity;
    }
    /**
     * 
     *
     * @param string|null $containerQuantity
     *
     * @return self
     */
    public function setContainerQuantity(?string $containerQuantity): self
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
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @deprecated
     *
     * @return self
     */
    public function setDescription(?string $description): self
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
     * @return bool|null
     */
    public function getDescriptionFixed(): ?bool
    {
        return $this->descriptionFixed;
    }
    /**
     * 
     *
     * @param bool|null $descriptionFixed
     *
     * @deprecated
     *
     * @return self
     */
    public function setDescriptionFixed(?bool $descriptionFixed): self
    {
        $this->initialized['descriptionFixed'] = true;
        $this->descriptionFixed = $descriptionFixed;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDiscountPercentage(): ?string
    {
        return $this->discountPercentage;
    }
    /**
     * 
     *
     * @param string|null $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage(?string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGrossAmount(): ?string
    {
        return $this->grossAmount;
    }
    /**
     * 
     *
     * @param string|null $grossAmount
     *
     * @return self
     */
    public function setGrossAmount(?string $grossAmount): self
    {
        $this->initialized['grossAmount'] = true;
        $this->grossAmount = $grossAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGrossAmountInCompanyCurrency(): ?string
    {
        return $this->grossAmountInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string|null $grossAmountInCompanyCurrency
     *
     * @return self
     */
    public function setGrossAmountInCompanyCurrency(?string $grossAmountInCompanyCurrency): self
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
     * @return bool|null
     */
    public function getManualQuantity(): ?bool
    {
        return $this->manualQuantity;
    }
    /**
     * 
     *
     * @param bool|null $manualQuantity
     *
     * @deprecated
     *
     * @return self
     */
    public function setManualQuantity(?bool $manualQuantity): self
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
     * @return bool|null
     */
    public function getManualUnitPrice(): ?bool
    {
        return $this->manualUnitPrice;
    }
    /**
     * 
     *
     * @param bool|null $manualUnitPrice
     *
     * @deprecated
     *
     * @return self
     */
    public function setManualUnitPrice(?bool $manualUnitPrice): self
    {
        $this->initialized['manualUnitPrice'] = true;
        $this->manualUnitPrice = $manualUnitPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMinQuantity(): ?string
    {
        return $this->minQuantity;
    }
    /**
     * 
     *
     * @param string|null $minQuantity
     *
     * @return self
     */
    public function setMinQuantity(?string $minQuantity): self
    {
        $this->initialized['minQuantity'] = true;
        $this->minQuantity = $minQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNetAmount(): ?string
    {
        return $this->netAmount;
    }
    /**
     * 
     *
     * @param string|null $netAmount
     *
     * @return self
     */
    public function setNetAmount(?string $netAmount): self
    {
        $this->initialized['netAmount'] = true;
        $this->netAmount = $netAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNetAmountForStatistics(): ?string
    {
        return $this->netAmountForStatistics;
    }
    /**
     * 
     *
     * @param string|null $netAmountForStatistics
     *
     * @return self
     */
    public function setNetAmountForStatistics(?string $netAmountForStatistics): self
    {
        $this->initialized['netAmountForStatistics'] = true;
        $this->netAmountForStatistics = $netAmountForStatistics;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNetAmountForStatisticsInCompanyCurrency(): ?string
    {
        return $this->netAmountForStatisticsInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string|null $netAmountForStatisticsInCompanyCurrency
     *
     * @return self
     */
    public function setNetAmountForStatisticsInCompanyCurrency(?string $netAmountForStatisticsInCompanyCurrency): self
    {
        $this->initialized['netAmountForStatisticsInCompanyCurrency'] = true;
        $this->netAmountForStatisticsInCompanyCurrency = $netAmountForStatisticsInCompanyCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNetAmountInCompanyCurrency(): ?string
    {
        return $this->netAmountInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string|null $netAmountInCompanyCurrency
     *
     * @return self
     */
    public function setNetAmountInCompanyCurrency(?string $netAmountInCompanyCurrency): self
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
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string|null $note
     *
     * @deprecated
     *
     * @return self
     */
    public function setNote(?string $note): self
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
     * @return string|null
     */
    public function getParentItemId(): ?string
    {
        return $this->parentItemId;
    }
    /**
     * 
     *
     * @param string|null $parentItemId
     *
     * @deprecated
     *
     * @return self
     */
    public function setParentItemId(?string $parentItemId): self
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
     * @return int|null
     */
    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int|null $positionNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getProcurementLeadDays(): ?int
    {
        return $this->procurementLeadDays;
    }
    /**
     * 
     *
     * @param int|null $procurementLeadDays
     *
     * @return self
     */
    public function setProcurementLeadDays(?int $procurementLeadDays): self
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
     * @return int|null
     */
    public function getPurchaseOrderRequestItemId(): ?int
    {
        return $this->purchaseOrderRequestItemId;
    }
    /**
     * 
     *
     * @param int|null $purchaseOrderRequestItemId
     *
     * @deprecated
     *
     * @return self
     */
    public function setPurchaseOrderRequestItemId(?int $purchaseOrderRequestItemId): self
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
     * @return string|null
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string|null $quantity
     *
     * @deprecated
     *
     * @return self
     */
    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return list<ReductionAdditionItem>|null
     */
    public function getReductionAdditionItems(): ?array
    {
        return $this->reductionAdditionItems;
    }
    /**
     * 
     *
     * @param list<ReductionAdditionItem>|null $reductionAdditionItems
     *
     * @return self
     */
    public function setReductionAdditionItems(?array $reductionAdditionItems): self
    {
        $this->initialized['reductionAdditionItems'] = true;
        $this->reductionAdditionItems = $reductionAdditionItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScaleType(): ?string
    {
        return $this->scaleType;
    }
    /**
     * 
     *
     * @param string|null $scaleType
     *
     * @return self
     */
    public function setScaleType(?string $scaleType): self
    {
        $this->initialized['scaleType'] = true;
        $this->scaleType = $scaleType;
        return $this;
    }
    /**
     * 
     *
     * @return list<PurchaseOrderRequestOfferItemScaleValue>|null
     */
    public function getScaleValues(): ?array
    {
        return $this->scaleValues;
    }
    /**
     * 
     *
     * @param list<PurchaseOrderRequestOfferItemScaleValue>|null $scaleValues
     *
     * @return self
     */
    public function setScaleValues(?array $scaleValues): self
    {
        $this->initialized['scaleValues'] = true;
        $this->scaleValues = $scaleValues;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierArticleNumber(): ?string
    {
        return $this->supplierArticleNumber;
    }
    /**
     * 
     *
     * @param string|null $supplierArticleNumber
     *
     * @return self
     */
    public function setSupplierArticleNumber(?string $supplierArticleNumber): self
    {
        $this->initialized['supplierArticleNumber'] = true;
        $this->supplierArticleNumber = $supplierArticleNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaxId(): ?string
    {
        return $this->taxId;
    }
    /**
     * 
     *
     * @param string|null $taxId
     *
     * @return self
     */
    public function setTaxId(?string $taxId): self
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
     * @return string|null
     */
    public function getTaxName(): ?string
    {
        return $this->taxName;
    }
    /**
     * 
     *
     * @param string|null $taxName
     *
     * @deprecated
     *
     * @return self
     */
    public function setTaxName(?string $taxName): self
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
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @deprecated
     *
     * @return self
     */
    public function setTitle(?string $title): self
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
     * @return string|null
     */
    public function getUnitId(): ?string
    {
        return $this->unitId;
    }
    /**
     * 
     *
     * @param string|null $unitId
     *
     * @deprecated
     *
     * @return self
     */
    public function setUnitId(?string $unitId): self
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
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * 
     *
     * @param string|null $unitName
     *
     * @deprecated
     *
     * @return self
     */
    public function setUnitName(?string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }
    /**
     * 
     *
     * @param string|null $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?string $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUnitPriceInCompanyCurrency(): ?string
    {
        return $this->unitPriceInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string|null $unitPriceInCompanyCurrency
     *
     * @return self
     */
    public function setUnitPriceInCompanyCurrency(?string $unitPriceInCompanyCurrency): self
    {
        $this->initialized['unitPriceInCompanyCurrency'] = true;
        $this->unitPriceInCompanyCurrency = $unitPriceInCompanyCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseSupplierArticleNumber(): ?bool
    {
        return $this->useSupplierArticleNumber;
    }
    /**
     * 
     *
     * @param bool|null $useSupplierArticleNumber
     *
     * @return self
     */
    public function setUseSupplierArticleNumber(?bool $useSupplierArticleNumber): self
    {
        $this->initialized['useSupplierArticleNumber'] = true;
        $this->useSupplierArticleNumber = $useSupplierArticleNumber;
        return $this;
    }
}