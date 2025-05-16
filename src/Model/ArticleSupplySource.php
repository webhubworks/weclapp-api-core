<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArticleSupplySource extends \ArrayObject
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
     * @var list<CustomAttribute>
     */
    protected $customAttributes;

    /**
     * @var string
     */
    protected $articleNumber;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $ean;

    /**
     * @var string
     */
    protected $fixedPurchaseQuantity;

    /**
     * @var string
     */
    protected $internalNote;

    /**
     * @var string
     */
    protected $manufacturerPartNumber;

    /**
     * @var string
     */
    protected $matchCode;

    /**
     * @var string
     */
    protected $minimumPurchaseQuantity;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $shortDescription1;

    /**
     * @var string
     */
    protected $shortDescription2;

    /**
     * @var string
     */
    protected $taxRateType;

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
     * @var list<ArticlePriceWithoutSalesChannel>
     */
    protected $articlePrices;

    /**
     * @var bool
     */
    protected $dropshippingPossible;

    /**
     * @var bool
     */
    protected $ignoreInDropshippingAutomation;

    /**
     * @var int
     */
    protected $procurementLeadDays;

    /**
     * @var string
     */
    protected $supplierId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $supplierNumber;

    /**
     * @var string
     */
    protected $supplierStockQuantity;

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
     * @return list<CustomAttribute>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<CustomAttribute>  $customAttributes
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }

    public function setArticleNumber(string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;

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

    public function getEan(): string
    {
        return $this->ean;
    }

    public function setEan(string $ean): self
    {
        $this->initialized['ean'] = true;
        $this->ean = $ean;

        return $this;
    }

    public function getFixedPurchaseQuantity(): string
    {
        return $this->fixedPurchaseQuantity;
    }

    public function setFixedPurchaseQuantity(string $fixedPurchaseQuantity): self
    {
        $this->initialized['fixedPurchaseQuantity'] = true;
        $this->fixedPurchaseQuantity = $fixedPurchaseQuantity;

        return $this;
    }

    public function getInternalNote(): string
    {
        return $this->internalNote;
    }

    public function setInternalNote(string $internalNote): self
    {
        $this->initialized['internalNote'] = true;
        $this->internalNote = $internalNote;

        return $this;
    }

    public function getManufacturerPartNumber(): string
    {
        return $this->manufacturerPartNumber;
    }

    public function setManufacturerPartNumber(string $manufacturerPartNumber): self
    {
        $this->initialized['manufacturerPartNumber'] = true;
        $this->manufacturerPartNumber = $manufacturerPartNumber;

        return $this;
    }

    public function getMatchCode(): string
    {
        return $this->matchCode;
    }

    public function setMatchCode(string $matchCode): self
    {
        $this->initialized['matchCode'] = true;
        $this->matchCode = $matchCode;

        return $this;
    }

    public function getMinimumPurchaseQuantity(): string
    {
        return $this->minimumPurchaseQuantity;
    }

    public function setMinimumPurchaseQuantity(string $minimumPurchaseQuantity): self
    {
        $this->initialized['minimumPurchaseQuantity'] = true;
        $this->minimumPurchaseQuantity = $minimumPurchaseQuantity;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getShortDescription1(): string
    {
        return $this->shortDescription1;
    }

    public function setShortDescription1(string $shortDescription1): self
    {
        $this->initialized['shortDescription1'] = true;
        $this->shortDescription1 = $shortDescription1;

        return $this;
    }

    public function getShortDescription2(): string
    {
        return $this->shortDescription2;
    }

    public function setShortDescription2(string $shortDescription2): self
    {
        $this->initialized['shortDescription2'] = true;
        $this->shortDescription2 = $shortDescription2;

        return $this;
    }

    public function getTaxRateType(): string
    {
        return $this->taxRateType;
    }

    public function setTaxRateType(string $taxRateType): self
    {
        $this->initialized['taxRateType'] = true;
        $this->taxRateType = $taxRateType;

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

    /**
     * @return list<ArticlePriceWithoutSalesChannel>
     */
    public function getArticlePrices(): array
    {
        return $this->articlePrices;
    }

    /**
     * @param  list<ArticlePriceWithoutSalesChannel>  $articlePrices
     */
    public function setArticlePrices(array $articlePrices): self
    {
        $this->initialized['articlePrices'] = true;
        $this->articlePrices = $articlePrices;

        return $this;
    }

    public function getDropshippingPossible(): bool
    {
        return $this->dropshippingPossible;
    }

    public function setDropshippingPossible(bool $dropshippingPossible): self
    {
        $this->initialized['dropshippingPossible'] = true;
        $this->dropshippingPossible = $dropshippingPossible;

        return $this;
    }

    public function getIgnoreInDropshippingAutomation(): bool
    {
        return $this->ignoreInDropshippingAutomation;
    }

    public function setIgnoreInDropshippingAutomation(bool $ignoreInDropshippingAutomation): self
    {
        $this->initialized['ignoreInDropshippingAutomation'] = true;
        $this->ignoreInDropshippingAutomation = $ignoreInDropshippingAutomation;

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

    /**
     * @deprecated
     */
    public function getSupplierNumber(): string
    {
        return $this->supplierNumber;
    }

    /**
     * @deprecated
     */
    public function setSupplierNumber(string $supplierNumber): self
    {
        $this->initialized['supplierNumber'] = true;
        $this->supplierNumber = $supplierNumber;

        return $this;
    }

    public function getSupplierStockQuantity(): string
    {
        return $this->supplierStockQuantity;
    }

    public function setSupplierStockQuantity(string $supplierStockQuantity): self
    {
        $this->initialized['supplierStockQuantity'] = true;
        $this->supplierStockQuantity = $supplierStockQuantity;

        return $this;
    }
}
