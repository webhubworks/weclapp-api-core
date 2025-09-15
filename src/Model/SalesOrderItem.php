<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderItem extends \ArrayObject
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
     * @var list<mixed>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $note;
    /**
     * 
     *
     * @var int|null
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $quantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool|null
     */
    protected $descriptionFixed;
    /**
     * 
     *
     * @var string|null
     */
    protected $itemType;
    /**
     * 
     *
     * @var bool|null
     */
    protected $manualQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
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
     * @var bool|null
     */
    protected $manualUnitPrice;
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
     * @var list<ReductionAdditionItem>|null
     */
    protected $reductionAdditionItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $taxId;
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
    protected $addPageBreakBefore;
    /**
     * 
     *
     * @var string|null
     */
    protected $groupName;
    /**
     * 
     *
     * @var list<CommissionSalesPartner>|null
     */
    protected $commissionSalesPartners;
    /**
     * 
     *
     * @var bool|null
     */
    protected $manualUnitCost;
    /**
     * 
     *
     * @var string|null
     */
    protected $recommendedRetailPrice;
    /**
     * 
     *
     * @var int|null
     */
    protected $servicePeriodFrom;
    /**
     * 
     *
     * @var int|null
     */
    protected $servicePeriodTo;
    /**
     * 
     *
     * @var string|null
     */
    protected $unitCost;
    /**
     * 
     *
     * @var string|null
     */
    protected $unitCostInCompanyCurrency;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoicingType;
    /**
     * 
     *
     * @var bool|null
     */
    protected $manualPlannedWorkingTimePerUnit;
    /**
     * 
     *
     * @var int|null
     */
    protected $plannedDeliveryDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $plannedShippingDate;
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
    protected $contractChargeId;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $ecommerceOrderItemIds;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoicedQuantity;
    /**
     * 
     *
     * @var list<ItemPick>|null
     */
    protected $picks;
    /**
     * 
     *
     * @var string|null
     */
    protected $returnedQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $serviceQuotaId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $shipped;
    /**
     * 
     *
     * @var string|null
     */
    protected $shippedQuantity;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $tasks;
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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed>|null $customAttributes
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
    public function getArticleId(): ?string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string|null $articleId
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
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * 
     *
     * @param string|null $itemType
     *
     * @return self
     */
    public function setItemType(?string $itemType): self
    {
        $this->initialized['itemType'] = true;
        $this->itemType = $itemType;
        return $this;
    }
    /**
     * 
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
    public function getAddPageBreakBefore(): ?bool
    {
        return $this->addPageBreakBefore;
    }
    /**
     * 
     *
     * @param bool|null $addPageBreakBefore
     *
     * @return self
     */
    public function setAddPageBreakBefore(?bool $addPageBreakBefore): self
    {
        $this->initialized['addPageBreakBefore'] = true;
        $this->addPageBreakBefore = $addPageBreakBefore;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }
    /**
     * 
     *
     * @param string|null $groupName
     *
     * @return self
     */
    public function setGroupName(?string $groupName): self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * 
     *
     * @return list<CommissionSalesPartner>|null
     */
    public function getCommissionSalesPartners(): ?array
    {
        return $this->commissionSalesPartners;
    }
    /**
     * 
     *
     * @param list<CommissionSalesPartner>|null $commissionSalesPartners
     *
     * @return self
     */
    public function setCommissionSalesPartners(?array $commissionSalesPartners): self
    {
        $this->initialized['commissionSalesPartners'] = true;
        $this->commissionSalesPartners = $commissionSalesPartners;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getManualUnitCost(): ?bool
    {
        return $this->manualUnitCost;
    }
    /**
     * 
     *
     * @param bool|null $manualUnitCost
     *
     * @return self
     */
    public function setManualUnitCost(?bool $manualUnitCost): self
    {
        $this->initialized['manualUnitCost'] = true;
        $this->manualUnitCost = $manualUnitCost;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecommendedRetailPrice(): ?string
    {
        return $this->recommendedRetailPrice;
    }
    /**
     * 
     *
     * @param string|null $recommendedRetailPrice
     *
     * @return self
     */
    public function setRecommendedRetailPrice(?string $recommendedRetailPrice): self
    {
        $this->initialized['recommendedRetailPrice'] = true;
        $this->recommendedRetailPrice = $recommendedRetailPrice;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getServicePeriodFrom(): ?int
    {
        return $this->servicePeriodFrom;
    }
    /**
     * 
     *
     * @param int|null $servicePeriodFrom
     *
     * @return self
     */
    public function setServicePeriodFrom(?int $servicePeriodFrom): self
    {
        $this->initialized['servicePeriodFrom'] = true;
        $this->servicePeriodFrom = $servicePeriodFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getServicePeriodTo(): ?int
    {
        return $this->servicePeriodTo;
    }
    /**
     * 
     *
     * @param int|null $servicePeriodTo
     *
     * @return self
     */
    public function setServicePeriodTo(?int $servicePeriodTo): self
    {
        $this->initialized['servicePeriodTo'] = true;
        $this->servicePeriodTo = $servicePeriodTo;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUnitCost(): ?string
    {
        return $this->unitCost;
    }
    /**
     * 
     *
     * @param string|null $unitCost
     *
     * @return self
     */
    public function setUnitCost(?string $unitCost): self
    {
        $this->initialized['unitCost'] = true;
        $this->unitCost = $unitCost;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUnitCostInCompanyCurrency(): ?string
    {
        return $this->unitCostInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string|null $unitCostInCompanyCurrency
     *
     * @return self
     */
    public function setUnitCostInCompanyCurrency(?string $unitCostInCompanyCurrency): self
    {
        $this->initialized['unitCostInCompanyCurrency'] = true;
        $this->unitCostInCompanyCurrency = $unitCostInCompanyCurrency;
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
     * @return bool|null
     */
    public function getManualPlannedWorkingTimePerUnit(): ?bool
    {
        return $this->manualPlannedWorkingTimePerUnit;
    }
    /**
     * 
     *
     * @param bool|null $manualPlannedWorkingTimePerUnit
     *
     * @return self
     */
    public function setManualPlannedWorkingTimePerUnit(?bool $manualPlannedWorkingTimePerUnit): self
    {
        $this->initialized['manualPlannedWorkingTimePerUnit'] = true;
        $this->manualPlannedWorkingTimePerUnit = $manualPlannedWorkingTimePerUnit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlannedDeliveryDate(): ?int
    {
        return $this->plannedDeliveryDate;
    }
    /**
     * 
     *
     * @param int|null $plannedDeliveryDate
     *
     * @return self
     */
    public function setPlannedDeliveryDate(?int $plannedDeliveryDate): self
    {
        $this->initialized['plannedDeliveryDate'] = true;
        $this->plannedDeliveryDate = $plannedDeliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlannedShippingDate(): ?int
    {
        return $this->plannedShippingDate;
    }
    /**
     * 
     *
     * @param int|null $plannedShippingDate
     *
     * @return self
     */
    public function setPlannedShippingDate(?int $plannedShippingDate): self
    {
        $this->initialized['plannedShippingDate'] = true;
        $this->plannedShippingDate = $plannedShippingDate;
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
    public function getContractChargeId(): ?string
    {
        return $this->contractChargeId;
    }
    /**
     * 
     *
     * @param string|null $contractChargeId
     *
     * @return self
     */
    public function setContractChargeId(?string $contractChargeId): self
    {
        $this->initialized['contractChargeId'] = true;
        $this->contractChargeId = $contractChargeId;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getEcommerceOrderItemIds(): ?array
    {
        return $this->ecommerceOrderItemIds;
    }
    /**
     * 
     *
     * @param list<string>|null $ecommerceOrderItemIds
     *
     * @return self
     */
    public function setEcommerceOrderItemIds(?array $ecommerceOrderItemIds): self
    {
        $this->initialized['ecommerceOrderItemIds'] = true;
        $this->ecommerceOrderItemIds = $ecommerceOrderItemIds;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoicedQuantity(): ?string
    {
        return $this->invoicedQuantity;
    }
    /**
     * 
     *
     * @param string|null $invoicedQuantity
     *
     * @return self
     */
    public function setInvoicedQuantity(?string $invoicedQuantity): self
    {
        $this->initialized['invoicedQuantity'] = true;
        $this->invoicedQuantity = $invoicedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return list<ItemPick>|null
     */
    public function getPicks(): ?array
    {
        return $this->picks;
    }
    /**
     * 
     *
     * @param list<ItemPick>|null $picks
     *
     * @return self
     */
    public function setPicks(?array $picks): self
    {
        $this->initialized['picks'] = true;
        $this->picks = $picks;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReturnedQuantity(): ?string
    {
        return $this->returnedQuantity;
    }
    /**
     * 
     *
     * @param string|null $returnedQuantity
     *
     * @return self
     */
    public function setReturnedQuantity(?string $returnedQuantity): self
    {
        $this->initialized['returnedQuantity'] = true;
        $this->returnedQuantity = $returnedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getServiceQuotaId(): ?string
    {
        return $this->serviceQuotaId;
    }
    /**
     * 
     *
     * @param string|null $serviceQuotaId
     *
     * @return self
     */
    public function setServiceQuotaId(?string $serviceQuotaId): self
    {
        $this->initialized['serviceQuotaId'] = true;
        $this->serviceQuotaId = $serviceQuotaId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShipped(): ?bool
    {
        return $this->shipped;
    }
    /**
     * 
     *
     * @param bool|null $shipped
     *
     * @return self
     */
    public function setShipped(?bool $shipped): self
    {
        $this->initialized['shipped'] = true;
        $this->shipped = $shipped;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShippedQuantity(): ?string
    {
        return $this->shippedQuantity;
    }
    /**
     * 
     *
     * @param string|null $shippedQuantity
     *
     * @return self
     */
    public function setShippedQuantity(?string $shippedQuantity): self
    {
        $this->initialized['shippedQuantity'] = true;
        $this->shippedQuantity = $shippedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getTasks(): ?array
    {
        return $this->tasks;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $tasks
     *
     * @return self
     */
    public function setTasks(?array $tasks): self
    {
        $this->initialized['tasks'] = true;
        $this->tasks = $tasks;
        return $this;
    }
}