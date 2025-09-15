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
     * @var string|null
     */
    protected $accountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $accountingCodeId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var bool|null
     */
    protected $applyCashDiscount;
    /**
     * 
     *
     * @var list<ArticleAlternativeQuantity>|null
     */
    protected $articleAlternativeQuantities;
    /**
     * 
     *
     * @var list<ArticleCalculationPrice>|null
     */
    protected $articleCalculationPrices;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleCategoryId;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleGrossWeight;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleHeight;
    /**
     * 
     *
     * @var list<ArticleImage>|null
     */
    protected $articleImages;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleLength;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleNetWeight;
    /**
     * 
     *
     * @var list<ArticlePriceWithoutArticleReference>|null
     */
    protected $articlePrices;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleType;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleWidth;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $availableForSalesChannels;
    /**
     * 
     *
     * @var bool|null
     */
    protected $availableInSale;
    /**
     * 
     *
     * @var int|null
     */
    protected $averageDeliveryTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $barcode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $batchNumberRequired;
    /**
     * 
     *
     * @var bool|null
     */
    protected $billOfMaterialPartDeliveryPossible;
    /**
     * 
     *
     * @var string|null
     */
    protected $catalogCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $commissionRate;
    /**
     * 
     *
     * @var string|null
     */
    protected $contractBillingCycle;
    /**
     * 
     *
     * @var string|null
     */
    protected $contractBillingMode;
    /**
     * 
     *
     * @var string|null
     */
    protected $countryOfOriginCode;
    /**
     * 
     *
     * @var list<CustomerSpecificArticleAttributes>|null
     */
    protected $customerArticleNumbers;
    /**
     * 
     *
     * @var string|null
     */
    protected $customsDescription;
    /**
     * 
     *
     * @var string|null
     */
    protected $customsTariffNumberId;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultLoadingEquipmentIdentifierId;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultPriceCalculationType;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $defaultStoragePlaces;
    /**
     * 
     *
     * @var bool|null
     */
    protected $defineIndividualTaskTemplates;
    /**
     * 
     *
     * @var string|null
     */
    protected $expenseAccountId;
    /**
     * 
     *
     * @var int|null
     */
    protected $expirationDays;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoicingType;
    /**
     * 
     *
     * @var int|null
     */
    protected $launchDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $loadingEquipmentArticleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $longText;
    /**
     * 
     *
     * @var int|null
     */
    protected $lowLevelCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $manufacturerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $marginCalculationPriceType;
    /**
     * 
     *
     * @var string|null
     */
    protected $minimumStockQuantity;
    /**
     * 
     *
     * @var int|null
     */
    protected $packagingQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $packagingUnitBaseArticleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $packagingUnitParentArticleId;
    /**
     * 
     *
     * @var int|null
     */
    protected $plannedWorkingTimePerUnit;
    /**
     * 
     *
     * @var string|null
     */
    protected $primarySupplySourceId;
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
    protected $producerType;
    /**
     * 
     *
     * @var bool|null
     */
    protected $productionArticle;
    /**
     * 
     *
     * @var list<BillOfMaterial>|null
     */
    protected $productionBillOfMaterialItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $productionConfigurationRule;
    /**
     * 
     *
     * @var string|null
     */
    protected $purchaseCostCenterId;
    /**
     * 
     *
     * @var list<QuantityConversion>|null
     */
    protected $quantityConversions;
    /**
     * 
     *
     * @var string|null
     */
    protected $ratingId;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordItemGroupName;
    /**
     * 
     *
     * @var int|null
     */
    protected $safetyStockDays;
    /**
     * 
     *
     * @var list<SalesBillOfMaterialArticleItem>|null
     */
    protected $salesBillOfMaterialItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesCostCenterId;
    /**
     * 
     *
     * @var int|null
     */
    protected $sellByDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $sellFromDate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $serialNumberRequired;
    /**
     * 
     *
     * @var string|null
     */
    protected $serviceArticleForServiceQuotaBookingId;
    /**
     * 
     *
     * @var string|null
     */
    protected $serviceQuotaQuantity;
    /**
     * 
     *
     * @var bool|null
     */
    protected $showOnDeliveryNote;
    /**
     * 
     *
     * @var string|null
     */
    protected $statusId;
    /**
     * 
     *
     * @var list<SupplySource>|null
     */
    protected $supplySources;
    /**
     * 
     *
     * @var int|null
     */
    protected $supportUntilDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $systemCode;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $tags;
    /**
     * 
     *
     * @var string|null
     */
    protected $targetStockQuantity;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useAvailableForSalesChannels;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useSalesBillOfMaterialItemPrices;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useSalesBillOfMaterialItemPricesForPurchase;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useSalesBillOfMaterialSubitemCosts;
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
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * 
     *
     * @param string|null $accountId
     *
     * @return self
     */
    public function setAccountId(?string $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAccountingCodeId(): ?string
    {
        return $this->accountingCodeId;
    }
    /**
     * 
     *
     * @param string|null $accountingCodeId
     *
     * @return self
     */
    public function setAccountingCodeId(?string $accountingCodeId): self
    {
        $this->initialized['accountingCodeId'] = true;
        $this->accountingCodeId = $accountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getApplyCashDiscount(): ?bool
    {
        return $this->applyCashDiscount;
    }
    /**
     * 
     *
     * @param bool|null $applyCashDiscount
     *
     * @return self
     */
    public function setApplyCashDiscount(?bool $applyCashDiscount): self
    {
        $this->initialized['applyCashDiscount'] = true;
        $this->applyCashDiscount = $applyCashDiscount;
        return $this;
    }
    /**
     * 
     *
     * @return list<ArticleAlternativeQuantity>|null
     */
    public function getArticleAlternativeQuantities(): ?array
    {
        return $this->articleAlternativeQuantities;
    }
    /**
     * 
     *
     * @param list<ArticleAlternativeQuantity>|null $articleAlternativeQuantities
     *
     * @return self
     */
    public function setArticleAlternativeQuantities(?array $articleAlternativeQuantities): self
    {
        $this->initialized['articleAlternativeQuantities'] = true;
        $this->articleAlternativeQuantities = $articleAlternativeQuantities;
        return $this;
    }
    /**
     * 
     *
     * @return list<ArticleCalculationPrice>|null
     */
    public function getArticleCalculationPrices(): ?array
    {
        return $this->articleCalculationPrices;
    }
    /**
     * 
     *
     * @param list<ArticleCalculationPrice>|null $articleCalculationPrices
     *
     * @return self
     */
    public function setArticleCalculationPrices(?array $articleCalculationPrices): self
    {
        $this->initialized['articleCalculationPrices'] = true;
        $this->articleCalculationPrices = $articleCalculationPrices;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleCategoryId(): ?string
    {
        return $this->articleCategoryId;
    }
    /**
     * 
     *
     * @param string|null $articleCategoryId
     *
     * @return self
     */
    public function setArticleCategoryId(?string $articleCategoryId): self
    {
        $this->initialized['articleCategoryId'] = true;
        $this->articleCategoryId = $articleCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleGrossWeight(): ?string
    {
        return $this->articleGrossWeight;
    }
    /**
     * 
     *
     * @param string|null $articleGrossWeight
     *
     * @return self
     */
    public function setArticleGrossWeight(?string $articleGrossWeight): self
    {
        $this->initialized['articleGrossWeight'] = true;
        $this->articleGrossWeight = $articleGrossWeight;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleHeight(): ?string
    {
        return $this->articleHeight;
    }
    /**
     * 
     *
     * @param string|null $articleHeight
     *
     * @return self
     */
    public function setArticleHeight(?string $articleHeight): self
    {
        $this->initialized['articleHeight'] = true;
        $this->articleHeight = $articleHeight;
        return $this;
    }
    /**
     * 
     *
     * @return list<ArticleImage>|null
     */
    public function getArticleImages(): ?array
    {
        return $this->articleImages;
    }
    /**
     * 
     *
     * @param list<ArticleImage>|null $articleImages
     *
     * @return self
     */
    public function setArticleImages(?array $articleImages): self
    {
        $this->initialized['articleImages'] = true;
        $this->articleImages = $articleImages;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleLength(): ?string
    {
        return $this->articleLength;
    }
    /**
     * 
     *
     * @param string|null $articleLength
     *
     * @return self
     */
    public function setArticleLength(?string $articleLength): self
    {
        $this->initialized['articleLength'] = true;
        $this->articleLength = $articleLength;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleNetWeight(): ?string
    {
        return $this->articleNetWeight;
    }
    /**
     * 
     *
     * @param string|null $articleNetWeight
     *
     * @return self
     */
    public function setArticleNetWeight(?string $articleNetWeight): self
    {
        $this->initialized['articleNetWeight'] = true;
        $this->articleNetWeight = $articleNetWeight;
        return $this;
    }
    /**
     * 
     *
     * @return list<ArticlePriceWithoutArticleReference>|null
     */
    public function getArticlePrices(): ?array
    {
        return $this->articlePrices;
    }
    /**
     * 
     *
     * @param list<ArticlePriceWithoutArticleReference>|null $articlePrices
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
     * @return string|null
     */
    public function getArticleType(): ?string
    {
        return $this->articleType;
    }
    /**
     * 
     *
     * @param string|null $articleType
     *
     * @return self
     */
    public function setArticleType(?string $articleType): self
    {
        $this->initialized['articleType'] = true;
        $this->articleType = $articleType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleWidth(): ?string
    {
        return $this->articleWidth;
    }
    /**
     * 
     *
     * @param string|null $articleWidth
     *
     * @return self
     */
    public function setArticleWidth(?string $articleWidth): self
    {
        $this->initialized['articleWidth'] = true;
        $this->articleWidth = $articleWidth;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getAvailableForSalesChannels(): ?array
    {
        return $this->availableForSalesChannels;
    }
    /**
     * 
     *
     * @param list<string>|null $availableForSalesChannels
     *
     * @return self
     */
    public function setAvailableForSalesChannels(?array $availableForSalesChannels): self
    {
        $this->initialized['availableForSalesChannels'] = true;
        $this->availableForSalesChannels = $availableForSalesChannels;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAvailableInSale(): ?bool
    {
        return $this->availableInSale;
    }
    /**
     * 
     *
     * @param bool|null $availableInSale
     *
     * @return self
     */
    public function setAvailableInSale(?bool $availableInSale): self
    {
        $this->initialized['availableInSale'] = true;
        $this->availableInSale = $availableInSale;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAverageDeliveryTime(): ?int
    {
        return $this->averageDeliveryTime;
    }
    /**
     * 
     *
     * @param int|null $averageDeliveryTime
     *
     * @return self
     */
    public function setAverageDeliveryTime(?int $averageDeliveryTime): self
    {
        $this->initialized['averageDeliveryTime'] = true;
        $this->averageDeliveryTime = $averageDeliveryTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }
    /**
     * 
     *
     * @param string|null $barcode
     *
     * @return self
     */
    public function setBarcode(?string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBatchNumberRequired(): ?bool
    {
        return $this->batchNumberRequired;
    }
    /**
     * 
     *
     * @param bool|null $batchNumberRequired
     *
     * @return self
     */
    public function setBatchNumberRequired(?bool $batchNumberRequired): self
    {
        $this->initialized['batchNumberRequired'] = true;
        $this->batchNumberRequired = $batchNumberRequired;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBillOfMaterialPartDeliveryPossible(): ?bool
    {
        return $this->billOfMaterialPartDeliveryPossible;
    }
    /**
     * 
     *
     * @param bool|null $billOfMaterialPartDeliveryPossible
     *
     * @return self
     */
    public function setBillOfMaterialPartDeliveryPossible(?bool $billOfMaterialPartDeliveryPossible): self
    {
        $this->initialized['billOfMaterialPartDeliveryPossible'] = true;
        $this->billOfMaterialPartDeliveryPossible = $billOfMaterialPartDeliveryPossible;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCatalogCode(): ?string
    {
        return $this->catalogCode;
    }
    /**
     * 
     *
     * @param string|null $catalogCode
     *
     * @return self
     */
    public function setCatalogCode(?string $catalogCode): self
    {
        $this->initialized['catalogCode'] = true;
        $this->catalogCode = $catalogCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommissionRate(): ?string
    {
        return $this->commissionRate;
    }
    /**
     * 
     *
     * @param string|null $commissionRate
     *
     * @return self
     */
    public function setCommissionRate(?string $commissionRate): self
    {
        $this->initialized['commissionRate'] = true;
        $this->commissionRate = $commissionRate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContractBillingCycle(): ?string
    {
        return $this->contractBillingCycle;
    }
    /**
     * 
     *
     * @param string|null $contractBillingCycle
     *
     * @return self
     */
    public function setContractBillingCycle(?string $contractBillingCycle): self
    {
        $this->initialized['contractBillingCycle'] = true;
        $this->contractBillingCycle = $contractBillingCycle;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContractBillingMode(): ?string
    {
        return $this->contractBillingMode;
    }
    /**
     * 
     *
     * @param string|null $contractBillingMode
     *
     * @return self
     */
    public function setContractBillingMode(?string $contractBillingMode): self
    {
        $this->initialized['contractBillingMode'] = true;
        $this->contractBillingMode = $contractBillingMode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountryOfOriginCode(): ?string
    {
        return $this->countryOfOriginCode;
    }
    /**
     * 
     *
     * @param string|null $countryOfOriginCode
     *
     * @return self
     */
    public function setCountryOfOriginCode(?string $countryOfOriginCode): self
    {
        $this->initialized['countryOfOriginCode'] = true;
        $this->countryOfOriginCode = $countryOfOriginCode;
        return $this;
    }
    /**
     * 
     *
     * @return list<CustomerSpecificArticleAttributes>|null
     */
    public function getCustomerArticleNumbers(): ?array
    {
        return $this->customerArticleNumbers;
    }
    /**
     * 
     *
     * @param list<CustomerSpecificArticleAttributes>|null $customerArticleNumbers
     *
     * @return self
     */
    public function setCustomerArticleNumbers(?array $customerArticleNumbers): self
    {
        $this->initialized['customerArticleNumbers'] = true;
        $this->customerArticleNumbers = $customerArticleNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomsDescription(): ?string
    {
        return $this->customsDescription;
    }
    /**
     * 
     *
     * @param string|null $customsDescription
     *
     * @return self
     */
    public function setCustomsDescription(?string $customsDescription): self
    {
        $this->initialized['customsDescription'] = true;
        $this->customsDescription = $customsDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomsTariffNumberId(): ?string
    {
        return $this->customsTariffNumberId;
    }
    /**
     * 
     *
     * @param string|null $customsTariffNumberId
     *
     * @return self
     */
    public function setCustomsTariffNumberId(?string $customsTariffNumberId): self
    {
        $this->initialized['customsTariffNumberId'] = true;
        $this->customsTariffNumberId = $customsTariffNumberId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultLoadingEquipmentIdentifierId(): ?string
    {
        return $this->defaultLoadingEquipmentIdentifierId;
    }
    /**
     * 
     *
     * @param string|null $defaultLoadingEquipmentIdentifierId
     *
     * @return self
     */
    public function setDefaultLoadingEquipmentIdentifierId(?string $defaultLoadingEquipmentIdentifierId): self
    {
        $this->initialized['defaultLoadingEquipmentIdentifierId'] = true;
        $this->defaultLoadingEquipmentIdentifierId = $defaultLoadingEquipmentIdentifierId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultPriceCalculationType(): ?string
    {
        return $this->defaultPriceCalculationType;
    }
    /**
     * 
     *
     * @param string|null $defaultPriceCalculationType
     *
     * @return self
     */
    public function setDefaultPriceCalculationType(?string $defaultPriceCalculationType): self
    {
        $this->initialized['defaultPriceCalculationType'] = true;
        $this->defaultPriceCalculationType = $defaultPriceCalculationType;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getDefaultStoragePlaces(): ?array
    {
        return $this->defaultStoragePlaces;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $defaultStoragePlaces
     *
     * @return self
     */
    public function setDefaultStoragePlaces(?array $defaultStoragePlaces): self
    {
        $this->initialized['defaultStoragePlaces'] = true;
        $this->defaultStoragePlaces = $defaultStoragePlaces;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDefineIndividualTaskTemplates(): ?bool
    {
        return $this->defineIndividualTaskTemplates;
    }
    /**
     * 
     *
     * @param bool|null $defineIndividualTaskTemplates
     *
     * @return self
     */
    public function setDefineIndividualTaskTemplates(?bool $defineIndividualTaskTemplates): self
    {
        $this->initialized['defineIndividualTaskTemplates'] = true;
        $this->defineIndividualTaskTemplates = $defineIndividualTaskTemplates;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExpenseAccountId(): ?string
    {
        return $this->expenseAccountId;
    }
    /**
     * 
     *
     * @param string|null $expenseAccountId
     *
     * @return self
     */
    public function setExpenseAccountId(?string $expenseAccountId): self
    {
        $this->initialized['expenseAccountId'] = true;
        $this->expenseAccountId = $expenseAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExpirationDays(): ?int
    {
        return $this->expirationDays;
    }
    /**
     * 
     *
     * @param int|null $expirationDays
     *
     * @return self
     */
    public function setExpirationDays(?int $expirationDays): self
    {
        $this->initialized['expirationDays'] = true;
        $this->expirationDays = $expirationDays;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoicingType(): ?string
    {
        return $this->invoicingType;
    }
    /**
     * 
     *
     * @param string|null $invoicingType
     *
     * @return self
     */
    public function setInvoicingType(?string $invoicingType): self
    {
        $this->initialized['invoicingType'] = true;
        $this->invoicingType = $invoicingType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLaunchDate(): ?int
    {
        return $this->launchDate;
    }
    /**
     * 
     *
     * @param int|null $launchDate
     *
     * @return self
     */
    public function setLaunchDate(?int $launchDate): self
    {
        $this->initialized['launchDate'] = true;
        $this->launchDate = $launchDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLoadingEquipmentArticleId(): ?string
    {
        return $this->loadingEquipmentArticleId;
    }
    /**
     * 
     *
     * @param string|null $loadingEquipmentArticleId
     *
     * @return self
     */
    public function setLoadingEquipmentArticleId(?string $loadingEquipmentArticleId): self
    {
        $this->initialized['loadingEquipmentArticleId'] = true;
        $this->loadingEquipmentArticleId = $loadingEquipmentArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLongText(): ?string
    {
        return $this->longText;
    }
    /**
     * 
     *
     * @param string|null $longText
     *
     * @return self
     */
    public function setLongText(?string $longText): self
    {
        $this->initialized['longText'] = true;
        $this->longText = $longText;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLowLevelCode(): ?int
    {
        return $this->lowLevelCode;
    }
    /**
     * 
     *
     * @param int|null $lowLevelCode
     *
     * @return self
     */
    public function setLowLevelCode(?int $lowLevelCode): self
    {
        $this->initialized['lowLevelCode'] = true;
        $this->lowLevelCode = $lowLevelCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getManufacturerId(): ?string
    {
        return $this->manufacturerId;
    }
    /**
     * 
     *
     * @param string|null $manufacturerId
     *
     * @return self
     */
    public function setManufacturerId(?string $manufacturerId): self
    {
        $this->initialized['manufacturerId'] = true;
        $this->manufacturerId = $manufacturerId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMarginCalculationPriceType(): ?string
    {
        return $this->marginCalculationPriceType;
    }
    /**
     * 
     *
     * @param string|null $marginCalculationPriceType
     *
     * @return self
     */
    public function setMarginCalculationPriceType(?string $marginCalculationPriceType): self
    {
        $this->initialized['marginCalculationPriceType'] = true;
        $this->marginCalculationPriceType = $marginCalculationPriceType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMinimumStockQuantity(): ?string
    {
        return $this->minimumStockQuantity;
    }
    /**
     * 
     *
     * @param string|null $minimumStockQuantity
     *
     * @return self
     */
    public function setMinimumStockQuantity(?string $minimumStockQuantity): self
    {
        $this->initialized['minimumStockQuantity'] = true;
        $this->minimumStockQuantity = $minimumStockQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPackagingQuantity(): ?int
    {
        return $this->packagingQuantity;
    }
    /**
     * 
     *
     * @param int|null $packagingQuantity
     *
     * @return self
     */
    public function setPackagingQuantity(?int $packagingQuantity): self
    {
        $this->initialized['packagingQuantity'] = true;
        $this->packagingQuantity = $packagingQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPackagingUnitBaseArticleId(): ?string
    {
        return $this->packagingUnitBaseArticleId;
    }
    /**
     * 
     *
     * @param string|null $packagingUnitBaseArticleId
     *
     * @return self
     */
    public function setPackagingUnitBaseArticleId(?string $packagingUnitBaseArticleId): self
    {
        $this->initialized['packagingUnitBaseArticleId'] = true;
        $this->packagingUnitBaseArticleId = $packagingUnitBaseArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPackagingUnitParentArticleId(): ?string
    {
        return $this->packagingUnitParentArticleId;
    }
    /**
     * 
     *
     * @param string|null $packagingUnitParentArticleId
     *
     * @return self
     */
    public function setPackagingUnitParentArticleId(?string $packagingUnitParentArticleId): self
    {
        $this->initialized['packagingUnitParentArticleId'] = true;
        $this->packagingUnitParentArticleId = $packagingUnitParentArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlannedWorkingTimePerUnit(): ?int
    {
        return $this->plannedWorkingTimePerUnit;
    }
    /**
     * 
     *
     * @param int|null $plannedWorkingTimePerUnit
     *
     * @return self
     */
    public function setPlannedWorkingTimePerUnit(?int $plannedWorkingTimePerUnit): self
    {
        $this->initialized['plannedWorkingTimePerUnit'] = true;
        $this->plannedWorkingTimePerUnit = $plannedWorkingTimePerUnit;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrimarySupplySourceId(): ?string
    {
        return $this->primarySupplySourceId;
    }
    /**
     * 
     *
     * @param string|null $primarySupplySourceId
     *
     * @return self
     */
    public function setPrimarySupplySourceId(?string $primarySupplySourceId): self
    {
        $this->initialized['primarySupplySourceId'] = true;
        $this->primarySupplySourceId = $primarySupplySourceId;
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
    public function getProducerType(): ?string
    {
        return $this->producerType;
    }
    /**
     * 
     *
     * @param string|null $producerType
     *
     * @return self
     */
    public function setProducerType(?string $producerType): self
    {
        $this->initialized['producerType'] = true;
        $this->producerType = $producerType;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getProductionArticle(): ?bool
    {
        return $this->productionArticle;
    }
    /**
     * 
     *
     * @param bool|null $productionArticle
     *
     * @return self
     */
    public function setProductionArticle(?bool $productionArticle): self
    {
        $this->initialized['productionArticle'] = true;
        $this->productionArticle = $productionArticle;
        return $this;
    }
    /**
     * 
     *
     * @return list<BillOfMaterial>|null
     */
    public function getProductionBillOfMaterialItems(): ?array
    {
        return $this->productionBillOfMaterialItems;
    }
    /**
     * 
     *
     * @param list<BillOfMaterial>|null $productionBillOfMaterialItems
     *
     * @return self
     */
    public function setProductionBillOfMaterialItems(?array $productionBillOfMaterialItems): self
    {
        $this->initialized['productionBillOfMaterialItems'] = true;
        $this->productionBillOfMaterialItems = $productionBillOfMaterialItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProductionConfigurationRule(): ?string
    {
        return $this->productionConfigurationRule;
    }
    /**
     * 
     *
     * @param string|null $productionConfigurationRule
     *
     * @return self
     */
    public function setProductionConfigurationRule(?string $productionConfigurationRule): self
    {
        $this->initialized['productionConfigurationRule'] = true;
        $this->productionConfigurationRule = $productionConfigurationRule;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseCostCenterId(): ?string
    {
        return $this->purchaseCostCenterId;
    }
    /**
     * 
     *
     * @param string|null $purchaseCostCenterId
     *
     * @return self
     */
    public function setPurchaseCostCenterId(?string $purchaseCostCenterId): self
    {
        $this->initialized['purchaseCostCenterId'] = true;
        $this->purchaseCostCenterId = $purchaseCostCenterId;
        return $this;
    }
    /**
     * 
     *
     * @return list<QuantityConversion>|null
     */
    public function getQuantityConversions(): ?array
    {
        return $this->quantityConversions;
    }
    /**
     * 
     *
     * @param list<QuantityConversion>|null $quantityConversions
     *
     * @return self
     */
    public function setQuantityConversions(?array $quantityConversions): self
    {
        $this->initialized['quantityConversions'] = true;
        $this->quantityConversions = $quantityConversions;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRatingId(): ?string
    {
        return $this->ratingId;
    }
    /**
     * 
     *
     * @param string|null $ratingId
     *
     * @return self
     */
    public function setRatingId(?string $ratingId): self
    {
        $this->initialized['ratingId'] = true;
        $this->ratingId = $ratingId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordItemGroupName(): ?string
    {
        return $this->recordItemGroupName;
    }
    /**
     * 
     *
     * @param string|null $recordItemGroupName
     *
     * @return self
     */
    public function setRecordItemGroupName(?string $recordItemGroupName): self
    {
        $this->initialized['recordItemGroupName'] = true;
        $this->recordItemGroupName = $recordItemGroupName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSafetyStockDays(): ?int
    {
        return $this->safetyStockDays;
    }
    /**
     * 
     *
     * @param int|null $safetyStockDays
     *
     * @return self
     */
    public function setSafetyStockDays(?int $safetyStockDays): self
    {
        $this->initialized['safetyStockDays'] = true;
        $this->safetyStockDays = $safetyStockDays;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesBillOfMaterialArticleItem>|null
     */
    public function getSalesBillOfMaterialItems(): ?array
    {
        return $this->salesBillOfMaterialItems;
    }
    /**
     * 
     *
     * @param list<SalesBillOfMaterialArticleItem>|null $salesBillOfMaterialItems
     *
     * @return self
     */
    public function setSalesBillOfMaterialItems(?array $salesBillOfMaterialItems): self
    {
        $this->initialized['salesBillOfMaterialItems'] = true;
        $this->salesBillOfMaterialItems = $salesBillOfMaterialItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesCostCenterId(): ?string
    {
        return $this->salesCostCenterId;
    }
    /**
     * 
     *
     * @param string|null $salesCostCenterId
     *
     * @return self
     */
    public function setSalesCostCenterId(?string $salesCostCenterId): self
    {
        $this->initialized['salesCostCenterId'] = true;
        $this->salesCostCenterId = $salesCostCenterId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSellByDate(): ?int
    {
        return $this->sellByDate;
    }
    /**
     * 
     *
     * @param int|null $sellByDate
     *
     * @return self
     */
    public function setSellByDate(?int $sellByDate): self
    {
        $this->initialized['sellByDate'] = true;
        $this->sellByDate = $sellByDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSellFromDate(): ?int
    {
        return $this->sellFromDate;
    }
    /**
     * 
     *
     * @param int|null $sellFromDate
     *
     * @return self
     */
    public function setSellFromDate(?int $sellFromDate): self
    {
        $this->initialized['sellFromDate'] = true;
        $this->sellFromDate = $sellFromDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSerialNumberRequired(): ?bool
    {
        return $this->serialNumberRequired;
    }
    /**
     * 
     *
     * @param bool|null $serialNumberRequired
     *
     * @return self
     */
    public function setSerialNumberRequired(?bool $serialNumberRequired): self
    {
        $this->initialized['serialNumberRequired'] = true;
        $this->serialNumberRequired = $serialNumberRequired;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getServiceArticleForServiceQuotaBookingId(): ?string
    {
        return $this->serviceArticleForServiceQuotaBookingId;
    }
    /**
     * 
     *
     * @param string|null $serviceArticleForServiceQuotaBookingId
     *
     * @return self
     */
    public function setServiceArticleForServiceQuotaBookingId(?string $serviceArticleForServiceQuotaBookingId): self
    {
        $this->initialized['serviceArticleForServiceQuotaBookingId'] = true;
        $this->serviceArticleForServiceQuotaBookingId = $serviceArticleForServiceQuotaBookingId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getServiceQuotaQuantity(): ?string
    {
        return $this->serviceQuotaQuantity;
    }
    /**
     * 
     *
     * @param string|null $serviceQuotaQuantity
     *
     * @return self
     */
    public function setServiceQuotaQuantity(?string $serviceQuotaQuantity): self
    {
        $this->initialized['serviceQuotaQuantity'] = true;
        $this->serviceQuotaQuantity = $serviceQuotaQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShowOnDeliveryNote(): ?bool
    {
        return $this->showOnDeliveryNote;
    }
    /**
     * 
     *
     * @param bool|null $showOnDeliveryNote
     *
     * @return self
     */
    public function setShowOnDeliveryNote(?bool $showOnDeliveryNote): self
    {
        $this->initialized['showOnDeliveryNote'] = true;
        $this->showOnDeliveryNote = $showOnDeliveryNote;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatusId(): ?string
    {
        return $this->statusId;
    }
    /**
     * 
     *
     * @param string|null $statusId
     *
     * @return self
     */
    public function setStatusId(?string $statusId): self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupplySource>|null
     */
    public function getSupplySources(): ?array
    {
        return $this->supplySources;
    }
    /**
     * 
     *
     * @param list<SupplySource>|null $supplySources
     *
     * @return self
     */
    public function setSupplySources(?array $supplySources): self
    {
        $this->initialized['supplySources'] = true;
        $this->supplySources = $supplySources;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSupportUntilDate(): ?int
    {
        return $this->supportUntilDate;
    }
    /**
     * 
     *
     * @param int|null $supportUntilDate
     *
     * @return self
     */
    public function setSupportUntilDate(?int $supportUntilDate): self
    {
        $this->initialized['supportUntilDate'] = true;
        $this->supportUntilDate = $supportUntilDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSystemCode(): ?string
    {
        return $this->systemCode;
    }
    /**
     * 
     *
     * @param string|null $systemCode
     *
     * @return self
     */
    public function setSystemCode(?string $systemCode): self
    {
        $this->initialized['systemCode'] = true;
        $this->systemCode = $systemCode;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param list<string>|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTargetStockQuantity(): ?string
    {
        return $this->targetStockQuantity;
    }
    /**
     * 
     *
     * @param string|null $targetStockQuantity
     *
     * @return self
     */
    public function setTargetStockQuantity(?string $targetStockQuantity): self
    {
        $this->initialized['targetStockQuantity'] = true;
        $this->targetStockQuantity = $targetStockQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseAvailableForSalesChannels(): ?bool
    {
        return $this->useAvailableForSalesChannels;
    }
    /**
     * 
     *
     * @param bool|null $useAvailableForSalesChannels
     *
     * @return self
     */
    public function setUseAvailableForSalesChannels(?bool $useAvailableForSalesChannels): self
    {
        $this->initialized['useAvailableForSalesChannels'] = true;
        $this->useAvailableForSalesChannels = $useAvailableForSalesChannels;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseSalesBillOfMaterialItemPrices(): ?bool
    {
        return $this->useSalesBillOfMaterialItemPrices;
    }
    /**
     * 
     *
     * @param bool|null $useSalesBillOfMaterialItemPrices
     *
     * @return self
     */
    public function setUseSalesBillOfMaterialItemPrices(?bool $useSalesBillOfMaterialItemPrices): self
    {
        $this->initialized['useSalesBillOfMaterialItemPrices'] = true;
        $this->useSalesBillOfMaterialItemPrices = $useSalesBillOfMaterialItemPrices;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseSalesBillOfMaterialItemPricesForPurchase(): ?bool
    {
        return $this->useSalesBillOfMaterialItemPricesForPurchase;
    }
    /**
     * 
     *
     * @param bool|null $useSalesBillOfMaterialItemPricesForPurchase
     *
     * @return self
     */
    public function setUseSalesBillOfMaterialItemPricesForPurchase(?bool $useSalesBillOfMaterialItemPricesForPurchase): self
    {
        $this->initialized['useSalesBillOfMaterialItemPricesForPurchase'] = true;
        $this->useSalesBillOfMaterialItemPricesForPurchase = $useSalesBillOfMaterialItemPricesForPurchase;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseSalesBillOfMaterialSubitemCosts(): ?bool
    {
        return $this->useSalesBillOfMaterialSubitemCosts;
    }
    /**
     * 
     *
     * @param bool|null $useSalesBillOfMaterialSubitemCosts
     *
     * @return self
     */
    public function setUseSalesBillOfMaterialSubitemCosts(?bool $useSalesBillOfMaterialSubitemCosts): self
    {
        $this->initialized['useSalesBillOfMaterialSubitemCosts'] = true;
        $this->useSalesBillOfMaterialSubitemCosts = $useSalesBillOfMaterialSubitemCosts;
        return $this;
    }
}