<?php

namespace Weclapp\Generated\Model;

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
    protected $accountingCodeId;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var bool
     */
    protected $applyCashDiscount;

    /**
     * @var list<ArticleAlternativeQuantity>
     */
    protected $articleAlternativeQuantities;

    /**
     * @var list<ArticleCalculationPrice>
     */
    protected $articleCalculationPrices;

    /**
     * @var string
     */
    protected $articleCategoryId;

    /**
     * @var string
     */
    protected $articleGrossWeight;

    /**
     * @var string
     */
    protected $articleHeight;

    /**
     * @var list<ArticleImage>
     */
    protected $articleImages;

    /**
     * @var string
     */
    protected $articleLength;

    /**
     * @var string
     */
    protected $articleNetWeight;

    /**
     * @var list<ArticlePriceWithoutArticleReference>
     */
    protected $articlePrices;

    /**
     * @var string
     */
    protected $articleType;

    /**
     * @var string
     */
    protected $articleWidth;

    /**
     * @var list<string>
     */
    protected $availableForSalesChannels;

    /**
     * @var bool
     */
    protected $availableInSale;

    /**
     * @var int
     */
    protected $averageDeliveryTime;

    /**
     * @var string
     */
    protected $barcode;

    /**
     * @var bool
     */
    protected $batchNumberRequired;

    /**
     * @var bool
     */
    protected $billOfMaterialPartDeliveryPossible;

    /**
     * @var string
     */
    protected $catalogCode;

    /**
     * @var string
     */
    protected $commissionRate;

    /**
     * @var string
     */
    protected $contractBillingCycle;

    /**
     * @var string
     */
    protected $contractBillingMode;

    /**
     * @var string
     */
    protected $countryOfOriginCode;

    /**
     * @var list<CustomerSpecificArticleAttributes>
     */
    protected $customerArticleNumbers;

    /**
     * @var string
     */
    protected $customsDescription;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $customsTariffNumber;

    /**
     * @var string
     */
    protected $customsTariffNumberId;

    /**
     * @var string
     */
    protected $defaultLoadingEquipmentIdentifierId;

    /**
     * @var string
     */
    protected $defaultPriceCalculationType;

    /**
     * @var list<OnlyId>
     */
    protected $defaultStoragePlaces;

    /**
     * @var bool
     */
    protected $defineIndividualTaskTemplates;

    /**
     * @var string
     */
    protected $expenseAccountId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $expenseAccountNumber;

    /**
     * @var int
     */
    protected $expirationDays;

    /**
     * @var string
     */
    protected $invoicingType;

    /**
     * @var int
     */
    protected $launchDate;

    /**
     * @var string
     */
    protected $loadingEquipmentArticleId;

    /**
     * @var string
     */
    protected $longText;

    /**
     * @var int
     */
    protected $lowLevelCode;

    /**
     * @var string
     */
    protected $manufacturerId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $manufacturerName;

    /**
     * @var string
     */
    protected $marginCalculationPriceType;

    /**
     * @var string
     */
    protected $minimumStockQuantity;

    /**
     * @var int
     */
    protected $packagingQuantity;

    /**
     * @var string
     */
    protected $packagingUnitBaseArticleId;

    /**
     * @var string
     */
    protected $packagingUnitParentArticleId;

    /**
     * @var int
     */
    protected $plannedWorkingTimePerUnit;

    /**
     * @deprecated
     *
     * @var list<PriceCalculationParameterV1>
     */
    protected $priceCalculationParameters;

    /**
     * @var string
     */
    protected $primarySupplySourceId;

    /**
     * @var int
     */
    protected $procurementLeadDays;

    /**
     * @var string
     */
    protected $producerType;

    /**
     * @var bool
     */
    protected $productionArticle;

    /**
     * @var list<BillOfMaterial>
     */
    protected $productionBillOfMaterialItems;

    /**
     * @var string
     */
    protected $productionConfigurationRule;

    /**
     * @var string
     */
    protected $purchaseCostCenterId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $purchaseCostCenterNumber;

    /**
     * @var list<QuantityConversion>
     */
    protected $quantityConversions;

    /**
     * @var string
     */
    protected $ratingId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $ratingName;

    /**
     * @var string
     */
    protected $recordItemGroupName;

    /**
     * @var int
     */
    protected $safetyStockDays;

    /**
     * @var list<SalesBillOfMaterialArticleItem>
     */
    protected $salesBillOfMaterialItems;

    /**
     * @var string
     */
    protected $salesCostCenterId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $salesCostCenterNumber;

    /**
     * @var int
     */
    protected $sellByDate;

    /**
     * @var int
     */
    protected $sellFromDate;

    /**
     * @var bool
     */
    protected $serialNumberRequired;

    /**
     * @var bool
     */
    protected $showOnDeliveryNote;

    /**
     * @var string
     */
    protected $statusId;

    /**
     * @var list<SupplySource>
     */
    protected $supplySources;

    /**
     * @var int
     */
    protected $supportUntilDate;

    /**
     * @var string
     */
    protected $systemCode;

    /**
     * @var list<string>
     */
    protected $tags;

    /**
     * @var string
     */
    protected $targetStockQuantity;

    /**
     * @var bool
     */
    protected $useAvailableForSalesChannels;

    /**
     * @var bool
     */
    protected $useSalesBillOfMaterialItemPrices;

    /**
     * @var bool
     */
    protected $useSalesBillOfMaterialItemPricesForPurchase;

    /**
     * @var bool
     */
    protected $useSalesBillOfMaterialSubitemCosts;

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

    public function getAccountingCodeId(): string
    {
        return $this->accountingCodeId;
    }

    public function setAccountingCodeId(string $accountingCodeId): self
    {
        $this->initialized['accountingCodeId'] = true;
        $this->accountingCodeId = $accountingCodeId;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    public function getApplyCashDiscount(): bool
    {
        return $this->applyCashDiscount;
    }

    public function setApplyCashDiscount(bool $applyCashDiscount): self
    {
        $this->initialized['applyCashDiscount'] = true;
        $this->applyCashDiscount = $applyCashDiscount;

        return $this;
    }

    /**
     * @return list<ArticleAlternativeQuantity>
     */
    public function getArticleAlternativeQuantities(): array
    {
        return $this->articleAlternativeQuantities;
    }

    /**
     * @param  list<ArticleAlternativeQuantity>  $articleAlternativeQuantities
     */
    public function setArticleAlternativeQuantities(array $articleAlternativeQuantities): self
    {
        $this->initialized['articleAlternativeQuantities'] = true;
        $this->articleAlternativeQuantities = $articleAlternativeQuantities;

        return $this;
    }

    /**
     * @return list<ArticleCalculationPrice>
     */
    public function getArticleCalculationPrices(): array
    {
        return $this->articleCalculationPrices;
    }

    /**
     * @param  list<ArticleCalculationPrice>  $articleCalculationPrices
     */
    public function setArticleCalculationPrices(array $articleCalculationPrices): self
    {
        $this->initialized['articleCalculationPrices'] = true;
        $this->articleCalculationPrices = $articleCalculationPrices;

        return $this;
    }

    public function getArticleCategoryId(): string
    {
        return $this->articleCategoryId;
    }

    public function setArticleCategoryId(string $articleCategoryId): self
    {
        $this->initialized['articleCategoryId'] = true;
        $this->articleCategoryId = $articleCategoryId;

        return $this;
    }

    public function getArticleGrossWeight(): string
    {
        return $this->articleGrossWeight;
    }

    public function setArticleGrossWeight(string $articleGrossWeight): self
    {
        $this->initialized['articleGrossWeight'] = true;
        $this->articleGrossWeight = $articleGrossWeight;

        return $this;
    }

    public function getArticleHeight(): string
    {
        return $this->articleHeight;
    }

    public function setArticleHeight(string $articleHeight): self
    {
        $this->initialized['articleHeight'] = true;
        $this->articleHeight = $articleHeight;

        return $this;
    }

    /**
     * @return list<ArticleImage>
     */
    public function getArticleImages(): array
    {
        return $this->articleImages;
    }

    /**
     * @param  list<ArticleImage>  $articleImages
     */
    public function setArticleImages(array $articleImages): self
    {
        $this->initialized['articleImages'] = true;
        $this->articleImages = $articleImages;

        return $this;
    }

    public function getArticleLength(): string
    {
        return $this->articleLength;
    }

    public function setArticleLength(string $articleLength): self
    {
        $this->initialized['articleLength'] = true;
        $this->articleLength = $articleLength;

        return $this;
    }

    public function getArticleNetWeight(): string
    {
        return $this->articleNetWeight;
    }

    public function setArticleNetWeight(string $articleNetWeight): self
    {
        $this->initialized['articleNetWeight'] = true;
        $this->articleNetWeight = $articleNetWeight;

        return $this;
    }

    /**
     * @return list<ArticlePriceWithoutArticleReference>
     */
    public function getArticlePrices(): array
    {
        return $this->articlePrices;
    }

    /**
     * @param  list<ArticlePriceWithoutArticleReference>  $articlePrices
     */
    public function setArticlePrices(array $articlePrices): self
    {
        $this->initialized['articlePrices'] = true;
        $this->articlePrices = $articlePrices;

        return $this;
    }

    public function getArticleType(): string
    {
        return $this->articleType;
    }

    public function setArticleType(string $articleType): self
    {
        $this->initialized['articleType'] = true;
        $this->articleType = $articleType;

        return $this;
    }

    public function getArticleWidth(): string
    {
        return $this->articleWidth;
    }

    public function setArticleWidth(string $articleWidth): self
    {
        $this->initialized['articleWidth'] = true;
        $this->articleWidth = $articleWidth;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getAvailableForSalesChannels(): array
    {
        return $this->availableForSalesChannels;
    }

    /**
     * @param  list<string>  $availableForSalesChannels
     */
    public function setAvailableForSalesChannels(array $availableForSalesChannels): self
    {
        $this->initialized['availableForSalesChannels'] = true;
        $this->availableForSalesChannels = $availableForSalesChannels;

        return $this;
    }

    public function getAvailableInSale(): bool
    {
        return $this->availableInSale;
    }

    public function setAvailableInSale(bool $availableInSale): self
    {
        $this->initialized['availableInSale'] = true;
        $this->availableInSale = $availableInSale;

        return $this;
    }

    public function getAverageDeliveryTime(): int
    {
        return $this->averageDeliveryTime;
    }

    public function setAverageDeliveryTime(int $averageDeliveryTime): self
    {
        $this->initialized['averageDeliveryTime'] = true;
        $this->averageDeliveryTime = $averageDeliveryTime;

        return $this;
    }

    public function getBarcode(): string
    {
        return $this->barcode;
    }

    public function setBarcode(string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;

        return $this;
    }

    public function getBatchNumberRequired(): bool
    {
        return $this->batchNumberRequired;
    }

    public function setBatchNumberRequired(bool $batchNumberRequired): self
    {
        $this->initialized['batchNumberRequired'] = true;
        $this->batchNumberRequired = $batchNumberRequired;

        return $this;
    }

    public function getBillOfMaterialPartDeliveryPossible(): bool
    {
        return $this->billOfMaterialPartDeliveryPossible;
    }

    public function setBillOfMaterialPartDeliveryPossible(bool $billOfMaterialPartDeliveryPossible): self
    {
        $this->initialized['billOfMaterialPartDeliveryPossible'] = true;
        $this->billOfMaterialPartDeliveryPossible = $billOfMaterialPartDeliveryPossible;

        return $this;
    }

    public function getCatalogCode(): string
    {
        return $this->catalogCode;
    }

    public function setCatalogCode(string $catalogCode): self
    {
        $this->initialized['catalogCode'] = true;
        $this->catalogCode = $catalogCode;

        return $this;
    }

    public function getCommissionRate(): string
    {
        return $this->commissionRate;
    }

    public function setCommissionRate(string $commissionRate): self
    {
        $this->initialized['commissionRate'] = true;
        $this->commissionRate = $commissionRate;

        return $this;
    }

    public function getContractBillingCycle(): string
    {
        return $this->contractBillingCycle;
    }

    public function setContractBillingCycle(string $contractBillingCycle): self
    {
        $this->initialized['contractBillingCycle'] = true;
        $this->contractBillingCycle = $contractBillingCycle;

        return $this;
    }

    public function getContractBillingMode(): string
    {
        return $this->contractBillingMode;
    }

    public function setContractBillingMode(string $contractBillingMode): self
    {
        $this->initialized['contractBillingMode'] = true;
        $this->contractBillingMode = $contractBillingMode;

        return $this;
    }

    public function getCountryOfOriginCode(): string
    {
        return $this->countryOfOriginCode;
    }

    public function setCountryOfOriginCode(string $countryOfOriginCode): self
    {
        $this->initialized['countryOfOriginCode'] = true;
        $this->countryOfOriginCode = $countryOfOriginCode;

        return $this;
    }

    /**
     * @return list<CustomerSpecificArticleAttributes>
     */
    public function getCustomerArticleNumbers(): array
    {
        return $this->customerArticleNumbers;
    }

    /**
     * @param  list<CustomerSpecificArticleAttributes>  $customerArticleNumbers
     */
    public function setCustomerArticleNumbers(array $customerArticleNumbers): self
    {
        $this->initialized['customerArticleNumbers'] = true;
        $this->customerArticleNumbers = $customerArticleNumbers;

        return $this;
    }

    public function getCustomsDescription(): string
    {
        return $this->customsDescription;
    }

    public function setCustomsDescription(string $customsDescription): self
    {
        $this->initialized['customsDescription'] = true;
        $this->customsDescription = $customsDescription;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomsTariffNumber(): string
    {
        return $this->customsTariffNumber;
    }

    /**
     * @deprecated
     */
    public function setCustomsTariffNumber(string $customsTariffNumber): self
    {
        $this->initialized['customsTariffNumber'] = true;
        $this->customsTariffNumber = $customsTariffNumber;

        return $this;
    }

    public function getCustomsTariffNumberId(): string
    {
        return $this->customsTariffNumberId;
    }

    public function setCustomsTariffNumberId(string $customsTariffNumberId): self
    {
        $this->initialized['customsTariffNumberId'] = true;
        $this->customsTariffNumberId = $customsTariffNumberId;

        return $this;
    }

    public function getDefaultLoadingEquipmentIdentifierId(): string
    {
        return $this->defaultLoadingEquipmentIdentifierId;
    }

    public function setDefaultLoadingEquipmentIdentifierId(string $defaultLoadingEquipmentIdentifierId): self
    {
        $this->initialized['defaultLoadingEquipmentIdentifierId'] = true;
        $this->defaultLoadingEquipmentIdentifierId = $defaultLoadingEquipmentIdentifierId;

        return $this;
    }

    public function getDefaultPriceCalculationType(): string
    {
        return $this->defaultPriceCalculationType;
    }

    public function setDefaultPriceCalculationType(string $defaultPriceCalculationType): self
    {
        $this->initialized['defaultPriceCalculationType'] = true;
        $this->defaultPriceCalculationType = $defaultPriceCalculationType;

        return $this;
    }

    /**
     * @return list<OnlyId>
     */
    public function getDefaultStoragePlaces(): array
    {
        return $this->defaultStoragePlaces;
    }

    /**
     * @param  list<OnlyId>  $defaultStoragePlaces
     */
    public function setDefaultStoragePlaces(array $defaultStoragePlaces): self
    {
        $this->initialized['defaultStoragePlaces'] = true;
        $this->defaultStoragePlaces = $defaultStoragePlaces;

        return $this;
    }

    public function getDefineIndividualTaskTemplates(): bool
    {
        return $this->defineIndividualTaskTemplates;
    }

    public function setDefineIndividualTaskTemplates(bool $defineIndividualTaskTemplates): self
    {
        $this->initialized['defineIndividualTaskTemplates'] = true;
        $this->defineIndividualTaskTemplates = $defineIndividualTaskTemplates;

        return $this;
    }

    public function getExpenseAccountId(): string
    {
        return $this->expenseAccountId;
    }

    public function setExpenseAccountId(string $expenseAccountId): self
    {
        $this->initialized['expenseAccountId'] = true;
        $this->expenseAccountId = $expenseAccountId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getExpenseAccountNumber(): string
    {
        return $this->expenseAccountNumber;
    }

    /**
     * @deprecated
     */
    public function setExpenseAccountNumber(string $expenseAccountNumber): self
    {
        $this->initialized['expenseAccountNumber'] = true;
        $this->expenseAccountNumber = $expenseAccountNumber;

        return $this;
    }

    public function getExpirationDays(): int
    {
        return $this->expirationDays;
    }

    public function setExpirationDays(int $expirationDays): self
    {
        $this->initialized['expirationDays'] = true;
        $this->expirationDays = $expirationDays;

        return $this;
    }

    public function getInvoicingType(): string
    {
        return $this->invoicingType;
    }

    public function setInvoicingType(string $invoicingType): self
    {
        $this->initialized['invoicingType'] = true;
        $this->invoicingType = $invoicingType;

        return $this;
    }

    public function getLaunchDate(): int
    {
        return $this->launchDate;
    }

    public function setLaunchDate(int $launchDate): self
    {
        $this->initialized['launchDate'] = true;
        $this->launchDate = $launchDate;

        return $this;
    }

    public function getLoadingEquipmentArticleId(): string
    {
        return $this->loadingEquipmentArticleId;
    }

    public function setLoadingEquipmentArticleId(string $loadingEquipmentArticleId): self
    {
        $this->initialized['loadingEquipmentArticleId'] = true;
        $this->loadingEquipmentArticleId = $loadingEquipmentArticleId;

        return $this;
    }

    public function getLongText(): string
    {
        return $this->longText;
    }

    public function setLongText(string $longText): self
    {
        $this->initialized['longText'] = true;
        $this->longText = $longText;

        return $this;
    }

    public function getLowLevelCode(): int
    {
        return $this->lowLevelCode;
    }

    public function setLowLevelCode(int $lowLevelCode): self
    {
        $this->initialized['lowLevelCode'] = true;
        $this->lowLevelCode = $lowLevelCode;

        return $this;
    }

    public function getManufacturerId(): string
    {
        return $this->manufacturerId;
    }

    public function setManufacturerId(string $manufacturerId): self
    {
        $this->initialized['manufacturerId'] = true;
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getManufacturerName(): string
    {
        return $this->manufacturerName;
    }

    /**
     * @deprecated
     */
    public function setManufacturerName(string $manufacturerName): self
    {
        $this->initialized['manufacturerName'] = true;
        $this->manufacturerName = $manufacturerName;

        return $this;
    }

    public function getMarginCalculationPriceType(): string
    {
        return $this->marginCalculationPriceType;
    }

    public function setMarginCalculationPriceType(string $marginCalculationPriceType): self
    {
        $this->initialized['marginCalculationPriceType'] = true;
        $this->marginCalculationPriceType = $marginCalculationPriceType;

        return $this;
    }

    public function getMinimumStockQuantity(): string
    {
        return $this->minimumStockQuantity;
    }

    public function setMinimumStockQuantity(string $minimumStockQuantity): self
    {
        $this->initialized['minimumStockQuantity'] = true;
        $this->minimumStockQuantity = $minimumStockQuantity;

        return $this;
    }

    public function getPackagingQuantity(): int
    {
        return $this->packagingQuantity;
    }

    public function setPackagingQuantity(int $packagingQuantity): self
    {
        $this->initialized['packagingQuantity'] = true;
        $this->packagingQuantity = $packagingQuantity;

        return $this;
    }

    public function getPackagingUnitBaseArticleId(): string
    {
        return $this->packagingUnitBaseArticleId;
    }

    public function setPackagingUnitBaseArticleId(string $packagingUnitBaseArticleId): self
    {
        $this->initialized['packagingUnitBaseArticleId'] = true;
        $this->packagingUnitBaseArticleId = $packagingUnitBaseArticleId;

        return $this;
    }

    public function getPackagingUnitParentArticleId(): string
    {
        return $this->packagingUnitParentArticleId;
    }

    public function setPackagingUnitParentArticleId(string $packagingUnitParentArticleId): self
    {
        $this->initialized['packagingUnitParentArticleId'] = true;
        $this->packagingUnitParentArticleId = $packagingUnitParentArticleId;

        return $this;
    }

    public function getPlannedWorkingTimePerUnit(): int
    {
        return $this->plannedWorkingTimePerUnit;
    }

    public function setPlannedWorkingTimePerUnit(int $plannedWorkingTimePerUnit): self
    {
        $this->initialized['plannedWorkingTimePerUnit'] = true;
        $this->plannedWorkingTimePerUnit = $plannedWorkingTimePerUnit;

        return $this;
    }

    /**
     * @deprecated
     *
     * @return list<PriceCalculationParameterV1>
     */
    public function getPriceCalculationParameters(): array
    {
        return $this->priceCalculationParameters;
    }

    /**
     * @param  list<PriceCalculationParameterV1>  $priceCalculationParameters
     *
     * @deprecated
     */
    public function setPriceCalculationParameters(array $priceCalculationParameters): self
    {
        $this->initialized['priceCalculationParameters'] = true;
        $this->priceCalculationParameters = $priceCalculationParameters;

        return $this;
    }

    public function getPrimarySupplySourceId(): string
    {
        return $this->primarySupplySourceId;
    }

    public function setPrimarySupplySourceId(string $primarySupplySourceId): self
    {
        $this->initialized['primarySupplySourceId'] = true;
        $this->primarySupplySourceId = $primarySupplySourceId;

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

    public function getProducerType(): string
    {
        return $this->producerType;
    }

    public function setProducerType(string $producerType): self
    {
        $this->initialized['producerType'] = true;
        $this->producerType = $producerType;

        return $this;
    }

    public function getProductionArticle(): bool
    {
        return $this->productionArticle;
    }

    public function setProductionArticle(bool $productionArticle): self
    {
        $this->initialized['productionArticle'] = true;
        $this->productionArticle = $productionArticle;

        return $this;
    }

    /**
     * @return list<BillOfMaterial>
     */
    public function getProductionBillOfMaterialItems(): array
    {
        return $this->productionBillOfMaterialItems;
    }

    /**
     * @param  list<BillOfMaterial>  $productionBillOfMaterialItems
     */
    public function setProductionBillOfMaterialItems(array $productionBillOfMaterialItems): self
    {
        $this->initialized['productionBillOfMaterialItems'] = true;
        $this->productionBillOfMaterialItems = $productionBillOfMaterialItems;

        return $this;
    }

    public function getProductionConfigurationRule(): string
    {
        return $this->productionConfigurationRule;
    }

    public function setProductionConfigurationRule(string $productionConfigurationRule): self
    {
        $this->initialized['productionConfigurationRule'] = true;
        $this->productionConfigurationRule = $productionConfigurationRule;

        return $this;
    }

    public function getPurchaseCostCenterId(): string
    {
        return $this->purchaseCostCenterId;
    }

    public function setPurchaseCostCenterId(string $purchaseCostCenterId): self
    {
        $this->initialized['purchaseCostCenterId'] = true;
        $this->purchaseCostCenterId = $purchaseCostCenterId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPurchaseCostCenterNumber(): string
    {
        return $this->purchaseCostCenterNumber;
    }

    /**
     * @deprecated
     */
    public function setPurchaseCostCenterNumber(string $purchaseCostCenterNumber): self
    {
        $this->initialized['purchaseCostCenterNumber'] = true;
        $this->purchaseCostCenterNumber = $purchaseCostCenterNumber;

        return $this;
    }

    /**
     * @return list<QuantityConversion>
     */
    public function getQuantityConversions(): array
    {
        return $this->quantityConversions;
    }

    /**
     * @param  list<QuantityConversion>  $quantityConversions
     */
    public function setQuantityConversions(array $quantityConversions): self
    {
        $this->initialized['quantityConversions'] = true;
        $this->quantityConversions = $quantityConversions;

        return $this;
    }

    public function getRatingId(): string
    {
        return $this->ratingId;
    }

    public function setRatingId(string $ratingId): self
    {
        $this->initialized['ratingId'] = true;
        $this->ratingId = $ratingId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getRatingName(): string
    {
        return $this->ratingName;
    }

    /**
     * @deprecated
     */
    public function setRatingName(string $ratingName): self
    {
        $this->initialized['ratingName'] = true;
        $this->ratingName = $ratingName;

        return $this;
    }

    public function getRecordItemGroupName(): string
    {
        return $this->recordItemGroupName;
    }

    public function setRecordItemGroupName(string $recordItemGroupName): self
    {
        $this->initialized['recordItemGroupName'] = true;
        $this->recordItemGroupName = $recordItemGroupName;

        return $this;
    }

    public function getSafetyStockDays(): int
    {
        return $this->safetyStockDays;
    }

    public function setSafetyStockDays(int $safetyStockDays): self
    {
        $this->initialized['safetyStockDays'] = true;
        $this->safetyStockDays = $safetyStockDays;

        return $this;
    }

    /**
     * @return list<SalesBillOfMaterialArticleItem>
     */
    public function getSalesBillOfMaterialItems(): array
    {
        return $this->salesBillOfMaterialItems;
    }

    /**
     * @param  list<SalesBillOfMaterialArticleItem>  $salesBillOfMaterialItems
     */
    public function setSalesBillOfMaterialItems(array $salesBillOfMaterialItems): self
    {
        $this->initialized['salesBillOfMaterialItems'] = true;
        $this->salesBillOfMaterialItems = $salesBillOfMaterialItems;

        return $this;
    }

    public function getSalesCostCenterId(): string
    {
        return $this->salesCostCenterId;
    }

    public function setSalesCostCenterId(string $salesCostCenterId): self
    {
        $this->initialized['salesCostCenterId'] = true;
        $this->salesCostCenterId = $salesCostCenterId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSalesCostCenterNumber(): string
    {
        return $this->salesCostCenterNumber;
    }

    /**
     * @deprecated
     */
    public function setSalesCostCenterNumber(string $salesCostCenterNumber): self
    {
        $this->initialized['salesCostCenterNumber'] = true;
        $this->salesCostCenterNumber = $salesCostCenterNumber;

        return $this;
    }

    public function getSellByDate(): int
    {
        return $this->sellByDate;
    }

    public function setSellByDate(int $sellByDate): self
    {
        $this->initialized['sellByDate'] = true;
        $this->sellByDate = $sellByDate;

        return $this;
    }

    public function getSellFromDate(): int
    {
        return $this->sellFromDate;
    }

    public function setSellFromDate(int $sellFromDate): self
    {
        $this->initialized['sellFromDate'] = true;
        $this->sellFromDate = $sellFromDate;

        return $this;
    }

    public function getSerialNumberRequired(): bool
    {
        return $this->serialNumberRequired;
    }

    public function setSerialNumberRequired(bool $serialNumberRequired): self
    {
        $this->initialized['serialNumberRequired'] = true;
        $this->serialNumberRequired = $serialNumberRequired;

        return $this;
    }

    public function getShowOnDeliveryNote(): bool
    {
        return $this->showOnDeliveryNote;
    }

    public function setShowOnDeliveryNote(bool $showOnDeliveryNote): self
    {
        $this->initialized['showOnDeliveryNote'] = true;
        $this->showOnDeliveryNote = $showOnDeliveryNote;

        return $this;
    }

    public function getStatusId(): string
    {
        return $this->statusId;
    }

    public function setStatusId(string $statusId): self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * @return list<SupplySource>
     */
    public function getSupplySources(): array
    {
        return $this->supplySources;
    }

    /**
     * @param  list<SupplySource>  $supplySources
     */
    public function setSupplySources(array $supplySources): self
    {
        $this->initialized['supplySources'] = true;
        $this->supplySources = $supplySources;

        return $this;
    }

    public function getSupportUntilDate(): int
    {
        return $this->supportUntilDate;
    }

    public function setSupportUntilDate(int $supportUntilDate): self
    {
        $this->initialized['supportUntilDate'] = true;
        $this->supportUntilDate = $supportUntilDate;

        return $this;
    }

    public function getSystemCode(): string
    {
        return $this->systemCode;
    }

    public function setSystemCode(string $systemCode): self
    {
        $this->initialized['systemCode'] = true;
        $this->systemCode = $systemCode;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param  list<string>  $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    public function getTargetStockQuantity(): string
    {
        return $this->targetStockQuantity;
    }

    public function setTargetStockQuantity(string $targetStockQuantity): self
    {
        $this->initialized['targetStockQuantity'] = true;
        $this->targetStockQuantity = $targetStockQuantity;

        return $this;
    }

    public function getUseAvailableForSalesChannels(): bool
    {
        return $this->useAvailableForSalesChannels;
    }

    public function setUseAvailableForSalesChannels(bool $useAvailableForSalesChannels): self
    {
        $this->initialized['useAvailableForSalesChannels'] = true;
        $this->useAvailableForSalesChannels = $useAvailableForSalesChannels;

        return $this;
    }

    public function getUseSalesBillOfMaterialItemPrices(): bool
    {
        return $this->useSalesBillOfMaterialItemPrices;
    }

    public function setUseSalesBillOfMaterialItemPrices(bool $useSalesBillOfMaterialItemPrices): self
    {
        $this->initialized['useSalesBillOfMaterialItemPrices'] = true;
        $this->useSalesBillOfMaterialItemPrices = $useSalesBillOfMaterialItemPrices;

        return $this;
    }

    public function getUseSalesBillOfMaterialItemPricesForPurchase(): bool
    {
        return $this->useSalesBillOfMaterialItemPricesForPurchase;
    }

    public function setUseSalesBillOfMaterialItemPricesForPurchase(bool $useSalesBillOfMaterialItemPricesForPurchase): self
    {
        $this->initialized['useSalesBillOfMaterialItemPricesForPurchase'] = true;
        $this->useSalesBillOfMaterialItemPricesForPurchase = $useSalesBillOfMaterialItemPricesForPurchase;

        return $this;
    }

    public function getUseSalesBillOfMaterialSubitemCosts(): bool
    {
        return $this->useSalesBillOfMaterialSubitemCosts;
    }

    public function setUseSalesBillOfMaterialSubitemCosts(bool $useSalesBillOfMaterialSubitemCosts): self
    {
        $this->initialized['useSalesBillOfMaterialSubitemCosts'] = true;
        $this->useSalesBillOfMaterialSubitemCosts = $useSalesBillOfMaterialSubitemCosts;

        return $this;
    }
}
