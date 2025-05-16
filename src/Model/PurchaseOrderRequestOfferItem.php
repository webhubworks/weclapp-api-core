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
     * @var bool
     */
    protected $accepted;

    /**
     * @deprecated
     *
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
    protected $containerQuantity;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $description;

    /**
     * @deprecated
     *
     * @var bool
     */
    protected $descriptionFixed;

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
     * @deprecated
     *
     * @var bool
     */
    protected $manualQuantity;

    /**
     * @deprecated
     *
     * @var bool
     */
    protected $manualUnitPrice;

    /**
     * @var string
     */
    protected $minQuantity;

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
     * @deprecated
     *
     * @var string
     */
    protected $note;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $parentItemId;

    /**
     * @deprecated
     *
     * @var int
     */
    protected $positionNumber;

    /**
     * @var int
     */
    protected $procurementLeadDays;

    /**
     * @deprecated
     *
     * @var int
     */
    protected $purchaseOrderRequestItemId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $quantity;

    /**
     * @var list<ReductionAdditionItem>
     */
    protected $reductionAdditionItems;

    /**
     * @var string
     */
    protected $scaleType;

    /**
     * @var list<PurchaseOrderRequestOfferItemScaleValue>
     */
    protected $scaleValues;

    /**
     * @var string
     */
    protected $supplierArticleNumber;

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
     * @deprecated
     *
     * @var string
     */
    protected $title;

    /**
     * @deprecated
     *
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
    protected $unitPrice;

    /**
     * @var string
     */
    protected $unitPriceInCompanyCurrency;

    /**
     * @var bool
     */
    protected $useSupplierArticleNumber;

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

    public function getAccepted(): bool
    {
        return $this->accepted;
    }

    public function setAccepted(bool $accepted): self
    {
        $this->initialized['accepted'] = true;
        $this->accepted = $accepted;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getArticleId(): string
    {
        return $this->articleId;
    }

    /**
     * @deprecated
     */
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

    public function getContainerQuantity(): string
    {
        return $this->containerQuantity;
    }

    public function setContainerQuantity(string $containerQuantity): self
    {
        $this->initialized['containerQuantity'] = true;
        $this->containerQuantity = $containerQuantity;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @deprecated
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getDescriptionFixed(): bool
    {
        return $this->descriptionFixed;
    }

    /**
     * @deprecated
     */
    public function setDescriptionFixed(bool $descriptionFixed): self
    {
        $this->initialized['descriptionFixed'] = true;
        $this->descriptionFixed = $descriptionFixed;

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

    /**
     * @deprecated
     */
    public function getManualQuantity(): bool
    {
        return $this->manualQuantity;
    }

    /**
     * @deprecated
     */
    public function setManualQuantity(bool $manualQuantity): self
    {
        $this->initialized['manualQuantity'] = true;
        $this->manualQuantity = $manualQuantity;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getManualUnitPrice(): bool
    {
        return $this->manualUnitPrice;
    }

    /**
     * @deprecated
     */
    public function setManualUnitPrice(bool $manualUnitPrice): self
    {
        $this->initialized['manualUnitPrice'] = true;
        $this->manualUnitPrice = $manualUnitPrice;

        return $this;
    }

    public function getMinQuantity(): string
    {
        return $this->minQuantity;
    }

    public function setMinQuantity(string $minQuantity): self
    {
        $this->initialized['minQuantity'] = true;
        $this->minQuantity = $minQuantity;

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
     * @deprecated
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @deprecated
     */
    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getParentItemId(): string
    {
        return $this->parentItemId;
    }

    /**
     * @deprecated
     */
    public function setParentItemId(string $parentItemId): self
    {
        $this->initialized['parentItemId'] = true;
        $this->parentItemId = $parentItemId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }

    /**
     * @deprecated
     */
    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getProcurementLeadDays(): int
    {
        return $this->procurementLeadDays;
    }

    public function setProcurementLeadDays(int $procurementLeadDays): self
    {
        $this->initialized['procurementLeadDays'] = true;
        $this->procurementLeadDays = $procurementLeadDays;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPurchaseOrderRequestItemId(): int
    {
        return $this->purchaseOrderRequestItemId;
    }

    /**
     * @deprecated
     */
    public function setPurchaseOrderRequestItemId(int $purchaseOrderRequestItemId): self
    {
        $this->initialized['purchaseOrderRequestItemId'] = true;
        $this->purchaseOrderRequestItemId = $purchaseOrderRequestItemId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * @deprecated
     */
    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

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

    public function getScaleType(): string
    {
        return $this->scaleType;
    }

    public function setScaleType(string $scaleType): self
    {
        $this->initialized['scaleType'] = true;
        $this->scaleType = $scaleType;

        return $this;
    }

    /**
     * @return list<PurchaseOrderRequestOfferItemScaleValue>
     */
    public function getScaleValues(): array
    {
        return $this->scaleValues;
    }

    /**
     * @param  list<PurchaseOrderRequestOfferItemScaleValue>  $scaleValues
     */
    public function setScaleValues(array $scaleValues): self
    {
        $this->initialized['scaleValues'] = true;
        $this->scaleValues = $scaleValues;

        return $this;
    }

    public function getSupplierArticleNumber(): string
    {
        return $this->supplierArticleNumber;
    }

    public function setSupplierArticleNumber(string $supplierArticleNumber): self
    {
        $this->initialized['supplierArticleNumber'] = true;
        $this->supplierArticleNumber = $supplierArticleNumber;

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

    /**
     * @deprecated
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @deprecated
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getUnitId(): string
    {
        return $this->unitId;
    }

    /**
     * @deprecated
     */
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

    public function getUseSupplierArticleNumber(): bool
    {
        return $this->useSupplierArticleNumber;
    }

    public function setUseSupplierArticleNumber(bool $useSupplierArticleNumber): self
    {
        $this->initialized['useSupplierArticleNumber'] = true;
        $this->useSupplierArticleNumber = $useSupplierArticleNumber;

        return $this;
    }
}
