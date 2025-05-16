<?php

namespace Webhubworks\WeclappApiCore\Model;

class Article extends \ArrayObject
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
     * @var list<CustomAttribute>
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string
     */
    protected $articleNumber;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $ean;
    /**
     * 
     *
     * @var string
     */
    protected $fixedPurchaseQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $internalNote;
    /**
     * 
     *
     * @var string
     */
    protected $manufacturerPartNumber;
    /**
     * 
     *
     * @var string
     */
    protected $matchCode;
    /**
     * 
     *
     * @var string
     */
    protected $minimumPurchaseQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $shortDescription1;
    /**
     * 
     *
     * @var string
     */
    protected $shortDescription2;
    /**
     * 
     *
     * @var string
     */
    protected $taxRateType;
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
    protected $accountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $accountingCodeId;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var bool
     */
    protected $applyCashDiscount;
    /**
     * 
     *
     * @var list<ArticleAlternativeQuantity>
     */
    protected $articleAlternativeQuantities;
    /**
     * 
     *
     * @var list<ArticleCalculationPrice>
     */
    protected $articleCalculationPrices;
    /**
     * 
     *
     * @var string
     */
    protected $articleCategoryId;
    /**
     * 
     *
     * @var string
     */
    protected $articleGrossWeight;
    /**
     * 
     *
     * @var string
     */
    protected $articleHeight;
    /**
     * 
     *
     * @var list<ArticleImage>
     */
    protected $articleImages;
    /**
     * 
     *
     * @var string
     */
    protected $articleLength;
    /**
     * 
     *
     * @var string
     */
    protected $articleNetWeight;
    /**
     * 
     *
     * @var list<ArticlePriceWithoutArticleReference>
     */
    protected $articlePrices;
    /**
     * 
     *
     * @var string
     */
    protected $articleType;
    /**
     * 
     *
     * @var string
     */
    protected $articleWidth;
    /**
     * 
     *
     * @var list<string>
     */
    protected $availableForSalesChannels;
    /**
     * 
     *
     * @var bool
     */
    protected $availableInSale;
    /**
     * 
     *
     * @var int
     */
    protected $averageDeliveryTime;
    /**
     * 
     *
     * @var string
     */
    protected $barcode;
    /**
     * 
     *
     * @var bool
     */
    protected $batchNumberRequired;
    /**
     * 
     *
     * @var bool
     */
    protected $billOfMaterialPartDeliveryPossible;
    /**
     * 
     *
     * @var string
     */
    protected $catalogCode;
    /**
     * 
     *
     * @var string
     */
    protected $commissionRate;
    /**
     * 
     *
     * @var string
     */
    protected $contractBillingCycle;
    /**
     * 
     *
     * @var string
     */
    protected $contractBillingMode;
    /**
     * 
     *
     * @var string
     */
    protected $countryOfOriginCode;
    /**
     * 
     *
     * @var list<CustomerSpecificArticleAttributes>
     */
    protected $customerArticleNumbers;
    /**
     * 
     *
     * @var string
     */
    protected $customsDescription;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $customsTariffNumber;
    /**
     * 
     *
     * @var string
     */
    protected $customsTariffNumberId;
    /**
     * 
     *
     * @var string
     */
    protected $defaultLoadingEquipmentIdentifierId;
    /**
     * 
     *
     * @var string
     */
    protected $defaultPriceCalculationType;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $defaultStoragePlaces;
    /**
     * 
     *
     * @var bool
     */
    protected $defineIndividualTaskTemplates;
    /**
     * 
     *
     * @var string
     */
    protected $expenseAccountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $expenseAccountNumber;
    /**
     * 
     *
     * @var int
     */
    protected $expirationDays;
    /**
     * 
     *
     * @var string
     */
    protected $invoicingType;
    /**
     * 
     *
     * @var int
     */
    protected $launchDate;
    /**
     * 
     *
     * @var string
     */
    protected $loadingEquipmentArticleId;
    /**
     * 
     *
     * @var string
     */
    protected $longText;
    /**
     * 
     *
     * @var int
     */
    protected $lowLevelCode;
    /**
     * 
     *
     * @var string
     */
    protected $manufacturerId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $manufacturerName;
    /**
     * 
     *
     * @var string
     */
    protected $marginCalculationPriceType;
    /**
     * 
     *
     * @var string
     */
    protected $minimumStockQuantity;
    /**
     * 
     *
     * @var int
     */
    protected $packagingQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $packagingUnitBaseArticleId;
    /**
     * 
     *
     * @var string
     */
    protected $packagingUnitParentArticleId;
    /**
     * 
     *
     * @var int
     */
    protected $plannedWorkingTimePerUnit;
    /**
     * 
     *
     * @deprecated
     *
     * @var list<PriceCalculationParameterV1>
     */
    protected $priceCalculationParameters;
    /**
     * 
     *
     * @var string
     */
    protected $primarySupplySourceId;
    /**
     * 
     *
     * @var int
     */
    protected $procurementLeadDays;
    /**
     * 
     *
     * @var string
     */
    protected $producerType;
    /**
     * 
     *
     * @var bool
     */
    protected $productionArticle;
    /**
     * 
     *
     * @var list<BillOfMaterial>
     */
    protected $productionBillOfMaterialItems;
    /**
     * 
     *
     * @var string
     */
    protected $productionConfigurationRule;
    /**
     * 
     *
     * @var string
     */
    protected $purchaseCostCenterId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $purchaseCostCenterNumber;
    /**
     * 
     *
     * @var list<QuantityConversion>
     */
    protected $quantityConversions;
    /**
     * 
     *
     * @var string
     */
    protected $ratingId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $ratingName;
    /**
     * 
     *
     * @var string
     */
    protected $recordItemGroupName;
    /**
     * 
     *
     * @var int
     */
    protected $safetyStockDays;
    /**
     * 
     *
     * @var list<SalesBillOfMaterialArticleItem>
     */
    protected $salesBillOfMaterialItems;
    /**
     * 
     *
     * @var string
     */
    protected $salesCostCenterId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $salesCostCenterNumber;
    /**
     * 
     *
     * @var int
     */
    protected $sellByDate;
    /**
     * 
     *
     * @var int
     */
    protected $sellFromDate;
    /**
     * 
     *
     * @var bool
     */
    protected $serialNumberRequired;
    /**
     * 
     *
     * @var bool
     */
    protected $showOnDeliveryNote;
    /**
     * 
     *
     * @var string
     */
    protected $statusId;
    /**
     * 
     *
     * @var list<SupplySource>
     */
    protected $supplySources;
    /**
     * 
     *
     * @var int
     */
    protected $supportUntilDate;
    /**
     * 
     *
     * @var string
     */
    protected $systemCode;
    /**
     * 
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * 
     *
     * @var string
     */
    protected $targetStockQuantity;
    /**
     * 
     *
     * @var bool
     */
    protected $useAvailableForSalesChannels;
    /**
     * 
     *
     * @var bool
     */
    protected $useSalesBillOfMaterialItemPrices;
    /**
     * 
     *
     * @var bool
     */
    protected $useSalesBillOfMaterialItemPricesForPurchase;
    /**
     * 
     *
     * @var bool
     */
    protected $useSalesBillOfMaterialSubitemCosts;
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
     * @return list<CustomAttribute>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<CustomAttribute> $customAttributes
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
    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }
    /**
     * 
     *
     * @param string $articleNumber
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
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }
    /**
     * 
     *
     * @param string $ean
     *
     * @return self
     */
    public function setEan(string $ean): self
    {
        $this->initialized['ean'] = true;
        $this->ean = $ean;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFixedPurchaseQuantity(): string
    {
        return $this->fixedPurchaseQuantity;
    }
    /**
     * 
     *
     * @param string $fixedPurchaseQuantity
     *
     * @return self
     */
    public function setFixedPurchaseQuantity(string $fixedPurchaseQuantity): self
    {
        $this->initialized['fixedPurchaseQuantity'] = true;
        $this->fixedPurchaseQuantity = $fixedPurchaseQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInternalNote(): string
    {
        return $this->internalNote;
    }
    /**
     * 
     *
     * @param string $internalNote
     *
     * @return self
     */
    public function setInternalNote(string $internalNote): self
    {
        $this->initialized['internalNote'] = true;
        $this->internalNote = $internalNote;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getManufacturerPartNumber(): string
    {
        return $this->manufacturerPartNumber;
    }
    /**
     * 
     *
     * @param string $manufacturerPartNumber
     *
     * @return self
     */
    public function setManufacturerPartNumber(string $manufacturerPartNumber): self
    {
        $this->initialized['manufacturerPartNumber'] = true;
        $this->manufacturerPartNumber = $manufacturerPartNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMatchCode(): string
    {
        return $this->matchCode;
    }
    /**
     * 
     *
     * @param string $matchCode
     *
     * @return self
     */
    public function setMatchCode(string $matchCode): self
    {
        $this->initialized['matchCode'] = true;
        $this->matchCode = $matchCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMinimumPurchaseQuantity(): string
    {
        return $this->minimumPurchaseQuantity;
    }
    /**
     * 
     *
     * @param string $minimumPurchaseQuantity
     *
     * @return self
     */
    public function setMinimumPurchaseQuantity(string $minimumPurchaseQuantity): self
    {
        $this->initialized['minimumPurchaseQuantity'] = true;
        $this->minimumPurchaseQuantity = $minimumPurchaseQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShortDescription1(): string
    {
        return $this->shortDescription1;
    }
    /**
     * 
     *
     * @param string $shortDescription1
     *
     * @return self
     */
    public function setShortDescription1(string $shortDescription1): self
    {
        $this->initialized['shortDescription1'] = true;
        $this->shortDescription1 = $shortDescription1;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShortDescription2(): string
    {
        return $this->shortDescription2;
    }
    /**
     * 
     *
     * @param string $shortDescription2
     *
     * @return self
     */
    public function setShortDescription2(string $shortDescription2): self
    {
        $this->initialized['shortDescription2'] = true;
        $this->shortDescription2 = $shortDescription2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTaxRateType(): string
    {
        return $this->taxRateType;
    }
    /**
     * 
     *
     * @param string $taxRateType
     *
     * @return self
     */
    public function setTaxRateType(string $taxRateType): self
    {
        $this->initialized['taxRateType'] = true;
        $this->taxRateType = $taxRateType;
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
    public function getAccountId(): string
    {
        return $this->accountId;
    }
    /**
     * 
     *
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId(string $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }
    /**
     * 
     *
     * @param string $accountNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAccountingCodeId(): string
    {
        return $this->accountingCodeId;
    }
    /**
     * 
     *
     * @param string $accountingCodeId
     *
     * @return self
     */
    public function setAccountingCodeId(string $accountingCodeId): self
    {
        $this->initialized['accountingCodeId'] = true;
        $this->accountingCodeId = $accountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getApplyCashDiscount(): bool
    {
        return $this->applyCashDiscount;
    }
    /**
     * 
     *
     * @param bool $applyCashDiscount
     *
     * @return self
     */
    public function setApplyCashDiscount(bool $applyCashDiscount): self
    {
        $this->initialized['applyCashDiscount'] = true;
        $this->applyCashDiscount = $applyCashDiscount;
        return $this;
    }
    /**
     * 
     *
     * @return list<ArticleAlternativeQuantity>
     */
    public function getArticleAlternativeQuantities(): array
    {
        return $this->articleAlternativeQuantities;
    }
    /**
     * 
     *
     * @param list<ArticleAlternativeQuantity> $articleAlternativeQuantities
     *
     * @return self
     */
    public function setArticleAlternativeQuantities(array $articleAlternativeQuantities): self
    {
        $this->initialized['articleAlternativeQuantities'] = true;
        $this->articleAlternativeQuantities = $articleAlternativeQuantities;
        return $this;
    }
    /**
     * 
     *
     * @return list<ArticleCalculationPrice>
     */
    public function getArticleCalculationPrices(): array
    {
        return $this->articleCalculationPrices;
    }
    /**
     * 
     *
     * @param list<ArticleCalculationPrice> $articleCalculationPrices
     *
     * @return self
     */
    public function setArticleCalculationPrices(array $articleCalculationPrices): self
    {
        $this->initialized['articleCalculationPrices'] = true;
        $this->articleCalculationPrices = $articleCalculationPrices;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArticleCategoryId(): string
    {
        return $this->articleCategoryId;
    }
    /**
     * 
     *
     * @param string $articleCategoryId
     *
     * @return self
     */
    public function setArticleCategoryId(string $articleCategoryId): self
    {
        $this->initialized['articleCategoryId'] = true;
        $this->articleCategoryId = $articleCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArticleGrossWeight(): string
    {
        return $this->articleGrossWeight;
    }
    /**
     * 
     *
     * @param string $articleGrossWeight
     *
     * @return self
     */
    public function setArticleGrossWeight(string $articleGrossWeight): self
    {
        $this->initialized['articleGrossWeight'] = true;
        $this->articleGrossWeight = $articleGrossWeight;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArticleHeight(): string
    {
        return $this->articleHeight;
    }
    /**
     * 
     *
     * @param string $articleHeight
     *
     * @return self
     */
    public function setArticleHeight(string $articleHeight): self
    {
        $this->initialized['articleHeight'] = true;
        $this->articleHeight = $articleHeight;
        return $this;
    }
    /**
     * 
     *
     * @return list<ArticleImage>
     */
    public function getArticleImages(): array
    {
        return $this->articleImages;
    }
    /**
     * 
     *
     * @param list<ArticleImage> $articleImages
     *
     * @return self
     */
    public function setArticleImages(array $articleImages): self
    {
        $this->initialized['articleImages'] = true;
        $this->articleImages = $articleImages;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArticleLength(): string
    {
        return $this->articleLength;
    }
    /**
     * 
     *
     * @param string $articleLength
     *
     * @return self
     */
    public function setArticleLength(string $articleLength): self
    {
        $this->initialized['articleLength'] = true;
        $this->articleLength = $articleLength;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArticleNetWeight(): string
    {
        return $this->articleNetWeight;
    }
    /**
     * 
     *
     * @param string $articleNetWeight
     *
     * @return self
     */
    public function setArticleNetWeight(string $articleNetWeight): self
    {
        $this->initialized['articleNetWeight'] = true;
        $this->articleNetWeight = $articleNetWeight;
        return $this;
    }
    /**
     * 
     *
     * @return list<ArticlePriceWithoutArticleReference>
     */
    public function getArticlePrices(): array
    {
        return $this->articlePrices;
    }
    /**
     * 
     *
     * @param list<ArticlePriceWithoutArticleReference> $articlePrices
     *
     * @return self
     */
    public function setArticlePrices(array $articlePrices): self
    {
        $this->initialized['articlePrices'] = true;
        $this->articlePrices = $articlePrices;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArticleType(): string
    {
        return $this->articleType;
    }
    /**
     * 
     *
     * @param string $articleType
     *
     * @return self
     */
    public function setArticleType(string $articleType): self
    {
        $this->initialized['articleType'] = true;
        $this->articleType = $articleType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArticleWidth(): string
    {
        return $this->articleWidth;
    }
    /**
     * 
     *
     * @param string $articleWidth
     *
     * @return self
     */
    public function setArticleWidth(string $articleWidth): self
    {
        $this->initialized['articleWidth'] = true;
        $this->articleWidth = $articleWidth;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getAvailableForSalesChannels(): array
    {
        return $this->availableForSalesChannels;
    }
    /**
     * 
     *
     * @param list<string> $availableForSalesChannels
     *
     * @return self
     */
    public function setAvailableForSalesChannels(array $availableForSalesChannels): self
    {
        $this->initialized['availableForSalesChannels'] = true;
        $this->availableForSalesChannels = $availableForSalesChannels;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAvailableInSale(): bool
    {
        return $this->availableInSale;
    }
    /**
     * 
     *
     * @param bool $availableInSale
     *
     * @return self
     */
    public function setAvailableInSale(bool $availableInSale): self
    {
        $this->initialized['availableInSale'] = true;
        $this->availableInSale = $availableInSale;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAverageDeliveryTime(): int
    {
        return $this->averageDeliveryTime;
    }
    /**
     * 
     *
     * @param int $averageDeliveryTime
     *
     * @return self
     */
    public function setAverageDeliveryTime(int $averageDeliveryTime): self
    {
        $this->initialized['averageDeliveryTime'] = true;
        $this->averageDeliveryTime = $averageDeliveryTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }
    /**
     * 
     *
     * @param string $barcode
     *
     * @return self
     */
    public function setBarcode(string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBatchNumberRequired(): bool
    {
        return $this->batchNumberRequired;
    }
    /**
     * 
     *
     * @param bool $batchNumberRequired
     *
     * @return self
     */
    public function setBatchNumberRequired(bool $batchNumberRequired): self
    {
        $this->initialized['batchNumberRequired'] = true;
        $this->batchNumberRequired = $batchNumberRequired;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBillOfMaterialPartDeliveryPossible(): bool
    {
        return $this->billOfMaterialPartDeliveryPossible;
    }
    /**
     * 
     *
     * @param bool $billOfMaterialPartDeliveryPossible
     *
     * @return self
     */
    public function setBillOfMaterialPartDeliveryPossible(bool $billOfMaterialPartDeliveryPossible): self
    {
        $this->initialized['billOfMaterialPartDeliveryPossible'] = true;
        $this->billOfMaterialPartDeliveryPossible = $billOfMaterialPartDeliveryPossible;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCatalogCode(): string
    {
        return $this->catalogCode;
    }
    /**
     * 
     *
     * @param string $catalogCode
     *
     * @return self
     */
    public function setCatalogCode(string $catalogCode): self
    {
        $this->initialized['catalogCode'] = true;
        $this->catalogCode = $catalogCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommissionRate(): string
    {
        return $this->commissionRate;
    }
    /**
     * 
     *
     * @param string $commissionRate
     *
     * @return self
     */
    public function setCommissionRate(string $commissionRate): self
    {
        $this->initialized['commissionRate'] = true;
        $this->commissionRate = $commissionRate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContractBillingCycle(): string
    {
        return $this->contractBillingCycle;
    }
    /**
     * 
     *
     * @param string $contractBillingCycle
     *
     * @return self
     */
    public function setContractBillingCycle(string $contractBillingCycle): self
    {
        $this->initialized['contractBillingCycle'] = true;
        $this->contractBillingCycle = $contractBillingCycle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContractBillingMode(): string
    {
        return $this->contractBillingMode;
    }
    /**
     * 
     *
     * @param string $contractBillingMode
     *
     * @return self
     */
    public function setContractBillingMode(string $contractBillingMode): self
    {
        $this->initialized['contractBillingMode'] = true;
        $this->contractBillingMode = $contractBillingMode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountryOfOriginCode(): string
    {
        return $this->countryOfOriginCode;
    }
    /**
     * 
     *
     * @param string $countryOfOriginCode
     *
     * @return self
     */
    public function setCountryOfOriginCode(string $countryOfOriginCode): self
    {
        $this->initialized['countryOfOriginCode'] = true;
        $this->countryOfOriginCode = $countryOfOriginCode;
        return $this;
    }
    /**
     * 
     *
     * @return list<CustomerSpecificArticleAttributes>
     */
    public function getCustomerArticleNumbers(): array
    {
        return $this->customerArticleNumbers;
    }
    /**
     * 
     *
     * @param list<CustomerSpecificArticleAttributes> $customerArticleNumbers
     *
     * @return self
     */
    public function setCustomerArticleNumbers(array $customerArticleNumbers): self
    {
        $this->initialized['customerArticleNumbers'] = true;
        $this->customerArticleNumbers = $customerArticleNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomsDescription(): string
    {
        return $this->customsDescription;
    }
    /**
     * 
     *
     * @param string $customsDescription
     *
     * @return self
     */
    public function setCustomsDescription(string $customsDescription): self
    {
        $this->initialized['customsDescription'] = true;
        $this->customsDescription = $customsDescription;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getCustomsTariffNumber(): string
    {
        return $this->customsTariffNumber;
    }
    /**
     * 
     *
     * @param string $customsTariffNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setCustomsTariffNumber(string $customsTariffNumber): self
    {
        $this->initialized['customsTariffNumber'] = true;
        $this->customsTariffNumber = $customsTariffNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomsTariffNumberId(): string
    {
        return $this->customsTariffNumberId;
    }
    /**
     * 
     *
     * @param string $customsTariffNumberId
     *
     * @return self
     */
    public function setCustomsTariffNumberId(string $customsTariffNumberId): self
    {
        $this->initialized['customsTariffNumberId'] = true;
        $this->customsTariffNumberId = $customsTariffNumberId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultLoadingEquipmentIdentifierId(): string
    {
        return $this->defaultLoadingEquipmentIdentifierId;
    }
    /**
     * 
     *
     * @param string $defaultLoadingEquipmentIdentifierId
     *
     * @return self
     */
    public function setDefaultLoadingEquipmentIdentifierId(string $defaultLoadingEquipmentIdentifierId): self
    {
        $this->initialized['defaultLoadingEquipmentIdentifierId'] = true;
        $this->defaultLoadingEquipmentIdentifierId = $defaultLoadingEquipmentIdentifierId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultPriceCalculationType(): string
    {
        return $this->defaultPriceCalculationType;
    }
    /**
     * 
     *
     * @param string $defaultPriceCalculationType
     *
     * @return self
     */
    public function setDefaultPriceCalculationType(string $defaultPriceCalculationType): self
    {
        $this->initialized['defaultPriceCalculationType'] = true;
        $this->defaultPriceCalculationType = $defaultPriceCalculationType;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getDefaultStoragePlaces(): array
    {
        return $this->defaultStoragePlaces;
    }
    /**
     * 
     *
     * @param list<OnlyId> $defaultStoragePlaces
     *
     * @return self
     */
    public function setDefaultStoragePlaces(array $defaultStoragePlaces): self
    {
        $this->initialized['defaultStoragePlaces'] = true;
        $this->defaultStoragePlaces = $defaultStoragePlaces;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDefineIndividualTaskTemplates(): bool
    {
        return $this->defineIndividualTaskTemplates;
    }
    /**
     * 
     *
     * @param bool $defineIndividualTaskTemplates
     *
     * @return self
     */
    public function setDefineIndividualTaskTemplates(bool $defineIndividualTaskTemplates): self
    {
        $this->initialized['defineIndividualTaskTemplates'] = true;
        $this->defineIndividualTaskTemplates = $defineIndividualTaskTemplates;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExpenseAccountId(): string
    {
        return $this->expenseAccountId;
    }
    /**
     * 
     *
     * @param string $expenseAccountId
     *
     * @return self
     */
    public function setExpenseAccountId(string $expenseAccountId): self
    {
        $this->initialized['expenseAccountId'] = true;
        $this->expenseAccountId = $expenseAccountId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getExpenseAccountNumber(): string
    {
        return $this->expenseAccountNumber;
    }
    /**
     * 
     *
     * @param string $expenseAccountNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setExpenseAccountNumber(string $expenseAccountNumber): self
    {
        $this->initialized['expenseAccountNumber'] = true;
        $this->expenseAccountNumber = $expenseAccountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpirationDays(): int
    {
        return $this->expirationDays;
    }
    /**
     * 
     *
     * @param int $expirationDays
     *
     * @return self
     */
    public function setExpirationDays(int $expirationDays): self
    {
        $this->initialized['expirationDays'] = true;
        $this->expirationDays = $expirationDays;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoicingType(): string
    {
        return $this->invoicingType;
    }
    /**
     * 
     *
     * @param string $invoicingType
     *
     * @return self
     */
    public function setInvoicingType(string $invoicingType): self
    {
        $this->initialized['invoicingType'] = true;
        $this->invoicingType = $invoicingType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLaunchDate(): int
    {
        return $this->launchDate;
    }
    /**
     * 
     *
     * @param int $launchDate
     *
     * @return self
     */
    public function setLaunchDate(int $launchDate): self
    {
        $this->initialized['launchDate'] = true;
        $this->launchDate = $launchDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLoadingEquipmentArticleId(): string
    {
        return $this->loadingEquipmentArticleId;
    }
    /**
     * 
     *
     * @param string $loadingEquipmentArticleId
     *
     * @return self
     */
    public function setLoadingEquipmentArticleId(string $loadingEquipmentArticleId): self
    {
        $this->initialized['loadingEquipmentArticleId'] = true;
        $this->loadingEquipmentArticleId = $loadingEquipmentArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLongText(): string
    {
        return $this->longText;
    }
    /**
     * 
     *
     * @param string $longText
     *
     * @return self
     */
    public function setLongText(string $longText): self
    {
        $this->initialized['longText'] = true;
        $this->longText = $longText;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLowLevelCode(): int
    {
        return $this->lowLevelCode;
    }
    /**
     * 
     *
     * @param int $lowLevelCode
     *
     * @return self
     */
    public function setLowLevelCode(int $lowLevelCode): self
    {
        $this->initialized['lowLevelCode'] = true;
        $this->lowLevelCode = $lowLevelCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getManufacturerId(): string
    {
        return $this->manufacturerId;
    }
    /**
     * 
     *
     * @param string $manufacturerId
     *
     * @return self
     */
    public function setManufacturerId(string $manufacturerId): self
    {
        $this->initialized['manufacturerId'] = true;
        $this->manufacturerId = $manufacturerId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getManufacturerName(): string
    {
        return $this->manufacturerName;
    }
    /**
     * 
     *
     * @param string $manufacturerName
     *
     * @deprecated
     *
     * @return self
     */
    public function setManufacturerName(string $manufacturerName): self
    {
        $this->initialized['manufacturerName'] = true;
        $this->manufacturerName = $manufacturerName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMarginCalculationPriceType(): string
    {
        return $this->marginCalculationPriceType;
    }
    /**
     * 
     *
     * @param string $marginCalculationPriceType
     *
     * @return self
     */
    public function setMarginCalculationPriceType(string $marginCalculationPriceType): self
    {
        $this->initialized['marginCalculationPriceType'] = true;
        $this->marginCalculationPriceType = $marginCalculationPriceType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMinimumStockQuantity(): string
    {
        return $this->minimumStockQuantity;
    }
    /**
     * 
     *
     * @param string $minimumStockQuantity
     *
     * @return self
     */
    public function setMinimumStockQuantity(string $minimumStockQuantity): self
    {
        $this->initialized['minimumStockQuantity'] = true;
        $this->minimumStockQuantity = $minimumStockQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPackagingQuantity(): int
    {
        return $this->packagingQuantity;
    }
    /**
     * 
     *
     * @param int $packagingQuantity
     *
     * @return self
     */
    public function setPackagingQuantity(int $packagingQuantity): self
    {
        $this->initialized['packagingQuantity'] = true;
        $this->packagingQuantity = $packagingQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPackagingUnitBaseArticleId(): string
    {
        return $this->packagingUnitBaseArticleId;
    }
    /**
     * 
     *
     * @param string $packagingUnitBaseArticleId
     *
     * @return self
     */
    public function setPackagingUnitBaseArticleId(string $packagingUnitBaseArticleId): self
    {
        $this->initialized['packagingUnitBaseArticleId'] = true;
        $this->packagingUnitBaseArticleId = $packagingUnitBaseArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPackagingUnitParentArticleId(): string
    {
        return $this->packagingUnitParentArticleId;
    }
    /**
     * 
     *
     * @param string $packagingUnitParentArticleId
     *
     * @return self
     */
    public function setPackagingUnitParentArticleId(string $packagingUnitParentArticleId): self
    {
        $this->initialized['packagingUnitParentArticleId'] = true;
        $this->packagingUnitParentArticleId = $packagingUnitParentArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlannedWorkingTimePerUnit(): int
    {
        return $this->plannedWorkingTimePerUnit;
    }
    /**
     * 
     *
     * @param int $plannedWorkingTimePerUnit
     *
     * @return self
     */
    public function setPlannedWorkingTimePerUnit(int $plannedWorkingTimePerUnit): self
    {
        $this->initialized['plannedWorkingTimePerUnit'] = true;
        $this->plannedWorkingTimePerUnit = $plannedWorkingTimePerUnit;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return list<PriceCalculationParameterV1>
     */
    public function getPriceCalculationParameters(): array
    {
        return $this->priceCalculationParameters;
    }
    /**
     * 
     *
     * @param list<PriceCalculationParameterV1> $priceCalculationParameters
     *
     * @deprecated
     *
     * @return self
     */
    public function setPriceCalculationParameters(array $priceCalculationParameters): self
    {
        $this->initialized['priceCalculationParameters'] = true;
        $this->priceCalculationParameters = $priceCalculationParameters;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrimarySupplySourceId(): string
    {
        return $this->primarySupplySourceId;
    }
    /**
     * 
     *
     * @param string $primarySupplySourceId
     *
     * @return self
     */
    public function setPrimarySupplySourceId(string $primarySupplySourceId): self
    {
        $this->initialized['primarySupplySourceId'] = true;
        $this->primarySupplySourceId = $primarySupplySourceId;
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
     * @return string
     */
    public function getProducerType(): string
    {
        return $this->producerType;
    }
    /**
     * 
     *
     * @param string $producerType
     *
     * @return self
     */
    public function setProducerType(string $producerType): self
    {
        $this->initialized['producerType'] = true;
        $this->producerType = $producerType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getProductionArticle(): bool
    {
        return $this->productionArticle;
    }
    /**
     * 
     *
     * @param bool $productionArticle
     *
     * @return self
     */
    public function setProductionArticle(bool $productionArticle): self
    {
        $this->initialized['productionArticle'] = true;
        $this->productionArticle = $productionArticle;
        return $this;
    }
    /**
     * 
     *
     * @return list<BillOfMaterial>
     */
    public function getProductionBillOfMaterialItems(): array
    {
        return $this->productionBillOfMaterialItems;
    }
    /**
     * 
     *
     * @param list<BillOfMaterial> $productionBillOfMaterialItems
     *
     * @return self
     */
    public function setProductionBillOfMaterialItems(array $productionBillOfMaterialItems): self
    {
        $this->initialized['productionBillOfMaterialItems'] = true;
        $this->productionBillOfMaterialItems = $productionBillOfMaterialItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductionConfigurationRule(): string
    {
        return $this->productionConfigurationRule;
    }
    /**
     * 
     *
     * @param string $productionConfigurationRule
     *
     * @return self
     */
    public function setProductionConfigurationRule(string $productionConfigurationRule): self
    {
        $this->initialized['productionConfigurationRule'] = true;
        $this->productionConfigurationRule = $productionConfigurationRule;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseCostCenterId(): string
    {
        return $this->purchaseCostCenterId;
    }
    /**
     * 
     *
     * @param string $purchaseCostCenterId
     *
     * @return self
     */
    public function setPurchaseCostCenterId(string $purchaseCostCenterId): self
    {
        $this->initialized['purchaseCostCenterId'] = true;
        $this->purchaseCostCenterId = $purchaseCostCenterId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getPurchaseCostCenterNumber(): string
    {
        return $this->purchaseCostCenterNumber;
    }
    /**
     * 
     *
     * @param string $purchaseCostCenterNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setPurchaseCostCenterNumber(string $purchaseCostCenterNumber): self
    {
        $this->initialized['purchaseCostCenterNumber'] = true;
        $this->purchaseCostCenterNumber = $purchaseCostCenterNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<QuantityConversion>
     */
    public function getQuantityConversions(): array
    {
        return $this->quantityConversions;
    }
    /**
     * 
     *
     * @param list<QuantityConversion> $quantityConversions
     *
     * @return self
     */
    public function setQuantityConversions(array $quantityConversions): self
    {
        $this->initialized['quantityConversions'] = true;
        $this->quantityConversions = $quantityConversions;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRatingId(): string
    {
        return $this->ratingId;
    }
    /**
     * 
     *
     * @param string $ratingId
     *
     * @return self
     */
    public function setRatingId(string $ratingId): self
    {
        $this->initialized['ratingId'] = true;
        $this->ratingId = $ratingId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getRatingName(): string
    {
        return $this->ratingName;
    }
    /**
     * 
     *
     * @param string $ratingName
     *
     * @deprecated
     *
     * @return self
     */
    public function setRatingName(string $ratingName): self
    {
        $this->initialized['ratingName'] = true;
        $this->ratingName = $ratingName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecordItemGroupName(): string
    {
        return $this->recordItemGroupName;
    }
    /**
     * 
     *
     * @param string $recordItemGroupName
     *
     * @return self
     */
    public function setRecordItemGroupName(string $recordItemGroupName): self
    {
        $this->initialized['recordItemGroupName'] = true;
        $this->recordItemGroupName = $recordItemGroupName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSafetyStockDays(): int
    {
        return $this->safetyStockDays;
    }
    /**
     * 
     *
     * @param int $safetyStockDays
     *
     * @return self
     */
    public function setSafetyStockDays(int $safetyStockDays): self
    {
        $this->initialized['safetyStockDays'] = true;
        $this->safetyStockDays = $safetyStockDays;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesBillOfMaterialArticleItem>
     */
    public function getSalesBillOfMaterialItems(): array
    {
        return $this->salesBillOfMaterialItems;
    }
    /**
     * 
     *
     * @param list<SalesBillOfMaterialArticleItem> $salesBillOfMaterialItems
     *
     * @return self
     */
    public function setSalesBillOfMaterialItems(array $salesBillOfMaterialItems): self
    {
        $this->initialized['salesBillOfMaterialItems'] = true;
        $this->salesBillOfMaterialItems = $salesBillOfMaterialItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesCostCenterId(): string
    {
        return $this->salesCostCenterId;
    }
    /**
     * 
     *
     * @param string $salesCostCenterId
     *
     * @return self
     */
    public function setSalesCostCenterId(string $salesCostCenterId): self
    {
        $this->initialized['salesCostCenterId'] = true;
        $this->salesCostCenterId = $salesCostCenterId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getSalesCostCenterNumber(): string
    {
        return $this->salesCostCenterNumber;
    }
    /**
     * 
     *
     * @param string $salesCostCenterNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setSalesCostCenterNumber(string $salesCostCenterNumber): self
    {
        $this->initialized['salesCostCenterNumber'] = true;
        $this->salesCostCenterNumber = $salesCostCenterNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSellByDate(): int
    {
        return $this->sellByDate;
    }
    /**
     * 
     *
     * @param int $sellByDate
     *
     * @return self
     */
    public function setSellByDate(int $sellByDate): self
    {
        $this->initialized['sellByDate'] = true;
        $this->sellByDate = $sellByDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSellFromDate(): int
    {
        return $this->sellFromDate;
    }
    /**
     * 
     *
     * @param int $sellFromDate
     *
     * @return self
     */
    public function setSellFromDate(int $sellFromDate): self
    {
        $this->initialized['sellFromDate'] = true;
        $this->sellFromDate = $sellFromDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSerialNumberRequired(): bool
    {
        return $this->serialNumberRequired;
    }
    /**
     * 
     *
     * @param bool $serialNumberRequired
     *
     * @return self
     */
    public function setSerialNumberRequired(bool $serialNumberRequired): self
    {
        $this->initialized['serialNumberRequired'] = true;
        $this->serialNumberRequired = $serialNumberRequired;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getShowOnDeliveryNote(): bool
    {
        return $this->showOnDeliveryNote;
    }
    /**
     * 
     *
     * @param bool $showOnDeliveryNote
     *
     * @return self
     */
    public function setShowOnDeliveryNote(bool $showOnDeliveryNote): self
    {
        $this->initialized['showOnDeliveryNote'] = true;
        $this->showOnDeliveryNote = $showOnDeliveryNote;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatusId(): string
    {
        return $this->statusId;
    }
    /**
     * 
     *
     * @param string $statusId
     *
     * @return self
     */
    public function setStatusId(string $statusId): self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupplySource>
     */
    public function getSupplySources(): array
    {
        return $this->supplySources;
    }
    /**
     * 
     *
     * @param list<SupplySource> $supplySources
     *
     * @return self
     */
    public function setSupplySources(array $supplySources): self
    {
        $this->initialized['supplySources'] = true;
        $this->supplySources = $supplySources;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSupportUntilDate(): int
    {
        return $this->supportUntilDate;
    }
    /**
     * 
     *
     * @param int $supportUntilDate
     *
     * @return self
     */
    public function setSupportUntilDate(int $supportUntilDate): self
    {
        $this->initialized['supportUntilDate'] = true;
        $this->supportUntilDate = $supportUntilDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSystemCode(): string
    {
        return $this->systemCode;
    }
    /**
     * 
     *
     * @param string $systemCode
     *
     * @return self
     */
    public function setSystemCode(string $systemCode): self
    {
        $this->initialized['systemCode'] = true;
        $this->systemCode = $systemCode;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTargetStockQuantity(): string
    {
        return $this->targetStockQuantity;
    }
    /**
     * 
     *
     * @param string $targetStockQuantity
     *
     * @return self
     */
    public function setTargetStockQuantity(string $targetStockQuantity): self
    {
        $this->initialized['targetStockQuantity'] = true;
        $this->targetStockQuantity = $targetStockQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUseAvailableForSalesChannels(): bool
    {
        return $this->useAvailableForSalesChannels;
    }
    /**
     * 
     *
     * @param bool $useAvailableForSalesChannels
     *
     * @return self
     */
    public function setUseAvailableForSalesChannels(bool $useAvailableForSalesChannels): self
    {
        $this->initialized['useAvailableForSalesChannels'] = true;
        $this->useAvailableForSalesChannels = $useAvailableForSalesChannels;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUseSalesBillOfMaterialItemPrices(): bool
    {
        return $this->useSalesBillOfMaterialItemPrices;
    }
    /**
     * 
     *
     * @param bool $useSalesBillOfMaterialItemPrices
     *
     * @return self
     */
    public function setUseSalesBillOfMaterialItemPrices(bool $useSalesBillOfMaterialItemPrices): self
    {
        $this->initialized['useSalesBillOfMaterialItemPrices'] = true;
        $this->useSalesBillOfMaterialItemPrices = $useSalesBillOfMaterialItemPrices;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUseSalesBillOfMaterialItemPricesForPurchase(): bool
    {
        return $this->useSalesBillOfMaterialItemPricesForPurchase;
    }
    /**
     * 
     *
     * @param bool $useSalesBillOfMaterialItemPricesForPurchase
     *
     * @return self
     */
    public function setUseSalesBillOfMaterialItemPricesForPurchase(bool $useSalesBillOfMaterialItemPricesForPurchase): self
    {
        $this->initialized['useSalesBillOfMaterialItemPricesForPurchase'] = true;
        $this->useSalesBillOfMaterialItemPricesForPurchase = $useSalesBillOfMaterialItemPricesForPurchase;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUseSalesBillOfMaterialSubitemCosts(): bool
    {
        return $this->useSalesBillOfMaterialSubitemCosts;
    }
    /**
     * 
     *
     * @param bool $useSalesBillOfMaterialSubitemCosts
     *
     * @return self
     */
    public function setUseSalesBillOfMaterialSubitemCosts(bool $useSalesBillOfMaterialSubitemCosts): self
    {
        $this->initialized['useSalesBillOfMaterialSubitemCosts'] = true;
        $this->useSalesBillOfMaterialSubitemCosts = $useSalesBillOfMaterialSubitemCosts;
        return $this;
    }
}