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
     * @var list<CustomAttribute>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $ean;
    /**
     * 
     *
     * @var string|null
     */
    protected $fixedPurchaseQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $internalNote;
    /**
     * 
     *
     * @var string|null
     */
    protected $manufacturerPartNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $matchCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $minimumPurchaseQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortDescription1;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortDescription2;
    /**
     * 
     *
     * @var string|null
     */
    protected $taxRateType;
    /**
     * 
     *
     * @var string|null
     */
    protected $unitId;
    /**
     * 
     *
     * @var list<ArticlePriceWithoutSalesChannel>|null
     */
    protected $articlePrices;
    /**
     * 
     *
     * @var bool|null
     */
    protected $dropshippingPossible;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ignoreInDropshippingAutomation;
    /**
     * 
     *
     * @var int|null
     */
    protected $procurementLeadDays;
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
    protected $supplierStockQuantity;
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
     * @return list<CustomAttribute>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<CustomAttribute>|null $customAttributes
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
    public function getArticleNumber(): ?string
    {
        return $this->articleNumber;
    }
    /**
     * 
     *
     * @param string|null $articleNumber
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
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
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
     * @return string|null
     */
    public function getEan(): ?string
    {
        return $this->ean;
    }
    /**
     * 
     *
     * @param string|null $ean
     *
     * @return self
     */
    public function setEan(?string $ean): self
    {
        $this->initialized['ean'] = true;
        $this->ean = $ean;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFixedPurchaseQuantity(): ?string
    {
        return $this->fixedPurchaseQuantity;
    }
    /**
     * 
     *
     * @param string|null $fixedPurchaseQuantity
     *
     * @return self
     */
    public function setFixedPurchaseQuantity(?string $fixedPurchaseQuantity): self
    {
        $this->initialized['fixedPurchaseQuantity'] = true;
        $this->fixedPurchaseQuantity = $fixedPurchaseQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInternalNote(): ?string
    {
        return $this->internalNote;
    }
    /**
     * 
     *
     * @param string|null $internalNote
     *
     * @return self
     */
    public function setInternalNote(?string $internalNote): self
    {
        $this->initialized['internalNote'] = true;
        $this->internalNote = $internalNote;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getManufacturerPartNumber(): ?string
    {
        return $this->manufacturerPartNumber;
    }
    /**
     * 
     *
     * @param string|null $manufacturerPartNumber
     *
     * @return self
     */
    public function setManufacturerPartNumber(?string $manufacturerPartNumber): self
    {
        $this->initialized['manufacturerPartNumber'] = true;
        $this->manufacturerPartNumber = $manufacturerPartNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMatchCode(): ?string
    {
        return $this->matchCode;
    }
    /**
     * 
     *
     * @param string|null $matchCode
     *
     * @return self
     */
    public function setMatchCode(?string $matchCode): self
    {
        $this->initialized['matchCode'] = true;
        $this->matchCode = $matchCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMinimumPurchaseQuantity(): ?string
    {
        return $this->minimumPurchaseQuantity;
    }
    /**
     * 
     *
     * @param string|null $minimumPurchaseQuantity
     *
     * @return self
     */
    public function setMinimumPurchaseQuantity(?string $minimumPurchaseQuantity): self
    {
        $this->initialized['minimumPurchaseQuantity'] = true;
        $this->minimumPurchaseQuantity = $minimumPurchaseQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShortDescription1(): ?string
    {
        return $this->shortDescription1;
    }
    /**
     * 
     *
     * @param string|null $shortDescription1
     *
     * @return self
     */
    public function setShortDescription1(?string $shortDescription1): self
    {
        $this->initialized['shortDescription1'] = true;
        $this->shortDescription1 = $shortDescription1;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShortDescription2(): ?string
    {
        return $this->shortDescription2;
    }
    /**
     * 
     *
     * @param string|null $shortDescription2
     *
     * @return self
     */
    public function setShortDescription2(?string $shortDescription2): self
    {
        $this->initialized['shortDescription2'] = true;
        $this->shortDescription2 = $shortDescription2;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaxRateType(): ?string
    {
        return $this->taxRateType;
    }
    /**
     * 
     *
     * @param string|null $taxRateType
     *
     * @return self
     */
    public function setTaxRateType(?string $taxRateType): self
    {
        $this->initialized['taxRateType'] = true;
        $this->taxRateType = $taxRateType;
        return $this;
    }
    /**
     * 
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
     * @return list<ArticlePriceWithoutSalesChannel>|null
     */
    public function getArticlePrices(): ?array
    {
        return $this->articlePrices;
    }
    /**
     * 
     *
     * @param list<ArticlePriceWithoutSalesChannel>|null $articlePrices
     *
     * @return self
     */
    public function setArticlePrices(?array $articlePrices): self
    {
        $this->initialized['articlePrices'] = true;
        $this->articlePrices = $articlePrices;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDropshippingPossible(): ?bool
    {
        return $this->dropshippingPossible;
    }
    /**
     * 
     *
     * @param bool|null $dropshippingPossible
     *
     * @return self
     */
    public function setDropshippingPossible(?bool $dropshippingPossible): self
    {
        $this->initialized['dropshippingPossible'] = true;
        $this->dropshippingPossible = $dropshippingPossible;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIgnoreInDropshippingAutomation(): ?bool
    {
        return $this->ignoreInDropshippingAutomation;
    }
    /**
     * 
     *
     * @param bool|null $ignoreInDropshippingAutomation
     *
     * @return self
     */
    public function setIgnoreInDropshippingAutomation(?bool $ignoreInDropshippingAutomation): self
    {
        $this->initialized['ignoreInDropshippingAutomation'] = true;
        $this->ignoreInDropshippingAutomation = $ignoreInDropshippingAutomation;
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
    public function getSupplierStockQuantity(): ?string
    {
        return $this->supplierStockQuantity;
    }
    /**
     * 
     *
     * @param string|null $supplierStockQuantity
     *
     * @return self
     */
    public function setSupplierStockQuantity(?string $supplierStockQuantity): self
    {
        $this->initialized['supplierStockQuantity'] = true;
        $this->supplierStockQuantity = $supplierStockQuantity;
        return $this;
    }
}