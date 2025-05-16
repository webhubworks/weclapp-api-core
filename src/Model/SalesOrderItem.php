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
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var list<mixed>|null
     */
    protected $customAttributes;

    /**
     * @var string|null
     */
    protected $articleId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $articleNumber;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var int|null
     */
    protected $positionNumber;

    /**
     * @var string|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var bool|null
     */
    protected $descriptionFixed;

    /**
     * @var string|null
     */
    protected $itemType;

    /**
     * @var bool|null
     */
    protected $manualQuantity;

    /**
     * @var string|null
     */
    protected $parentItemId;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $unitId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $unitName;

    /**
     * @var string|null
     */
    protected $discountPercentage;

    /**
     * @var string|null
     */
    protected $grossAmount;

    /**
     * @var string|null
     */
    protected $grossAmountInCompanyCurrency;

    /**
     * @var bool|null
     */
    protected $manualUnitPrice;

    /**
     * @var string|null
     */
    protected $netAmount;

    /**
     * @var string|null
     */
    protected $netAmountForStatistics;

    /**
     * @var string|null
     */
    protected $netAmountForStatisticsInCompanyCurrency;

    /**
     * @var string|null
     */
    protected $netAmountInCompanyCurrency;

    /**
     * @var list<ReductionAdditionItem>|null
     */
    protected $reductionAdditionItems;

    /**
     * @var string|null
     */
    protected $taxId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $taxName;

    /**
     * @var string|null
     */
    protected $unitPrice;

    /**
     * @var string|null
     */
    protected $unitPriceInCompanyCurrency;

    /**
     * @var bool|null
     */
    protected $addPageBreakBefore;

    /**
     * @var string|null
     */
    protected $groupName;

    /**
     * @var list<CommissionSalesPartner>|null
     */
    protected $commissionSalesPartners;

    /**
     * @var bool|null
     */
    protected $manualUnitCost;

    /**
     * @var string|null
     */
    protected $recommendedRetailPrice;

    /**
     * @var int|null
     */
    protected $servicePeriodFrom;

    /**
     * @var int|null
     */
    protected $servicePeriodTo;

    /**
     * @var string|null
     */
    protected $unitCost;

    /**
     * @var string|null
     */
    protected $unitCostInCompanyCurrency;

    /**
     * @var string|null
     */
    protected $invoicingType;

    /**
     * @var bool|null
     */
    protected $manualPlannedWorkingTimePerUnit;

    /**
     * @var int|null
     */
    protected $plannedDeliveryDate;

    /**
     * @var int|null
     */
    protected $plannedShippingDate;

    /**
     * @var int|null
     */
    protected $plannedWorkingTimePerUnit;

    /**
     * @var string|null
     */
    protected $availability;

    /**
     * @var string|null
     */
    protected $availabilityForAllWarehouses;

    /**
     * @var string|null
     */
    protected $contractChargeId;

    /**
     * @var list<string>|null
     */
    protected $ecommerceOrderItemIds;

    /**
     * @var string|null
     */
    protected $invoicedQuantity;

    /**
     * @var list<ItemPick>|null
     */
    protected $picks;

    /**
     * @var string|null
     */
    protected $returnedQuantity;

    /**
     * @var bool|null
     */
    protected $shipped;

    /**
     * @var string|null
     */
    protected $shippedQuantity;

    /**
     * @var list<OnlyId>|null
     */
    protected $tasks;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    /**
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>|null  $customAttributes
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getArticleId(): ?string
    {
        return $this->articleId;
    }

    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getArticleNumber(): ?string
    {
        return $this->articleNumber;
    }

    /**
     * @deprecated
     */
    public function setArticleNumber(?string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }

    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getDescriptionFixed(): ?bool
    {
        return $this->descriptionFixed;
    }

    public function setDescriptionFixed(?bool $descriptionFixed): self
    {
        $this->initialized['descriptionFixed'] = true;
        $this->descriptionFixed = $descriptionFixed;

        return $this;
    }

    public function getItemType(): ?string
    {
        return $this->itemType;
    }

    public function setItemType(?string $itemType): self
    {
        $this->initialized['itemType'] = true;
        $this->itemType = $itemType;

        return $this;
    }

    public function getManualQuantity(): ?bool
    {
        return $this->manualQuantity;
    }

    public function setManualQuantity(?bool $manualQuantity): self
    {
        $this->initialized['manualQuantity'] = true;
        $this->manualQuantity = $manualQuantity;

        return $this;
    }

    public function getParentItemId(): ?string
    {
        return $this->parentItemId;
    }

    public function setParentItemId(?string $parentItemId): self
    {
        $this->initialized['parentItemId'] = true;
        $this->parentItemId = $parentItemId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getUnitId(): ?string
    {
        return $this->unitId;
    }

    public function setUnitId(?string $unitId): self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    /**
     * @deprecated
     */
    public function setUnitName(?string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;

        return $this;
    }

    public function getDiscountPercentage(): ?string
    {
        return $this->discountPercentage;
    }

    public function setDiscountPercentage(?string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    public function getGrossAmount(): ?string
    {
        return $this->grossAmount;
    }

    public function setGrossAmount(?string $grossAmount): self
    {
        $this->initialized['grossAmount'] = true;
        $this->grossAmount = $grossAmount;

        return $this;
    }

    public function getGrossAmountInCompanyCurrency(): ?string
    {
        return $this->grossAmountInCompanyCurrency;
    }

    public function setGrossAmountInCompanyCurrency(?string $grossAmountInCompanyCurrency): self
    {
        $this->initialized['grossAmountInCompanyCurrency'] = true;
        $this->grossAmountInCompanyCurrency = $grossAmountInCompanyCurrency;

        return $this;
    }

    public function getManualUnitPrice(): ?bool
    {
        return $this->manualUnitPrice;
    }

    public function setManualUnitPrice(?bool $manualUnitPrice): self
    {
        $this->initialized['manualUnitPrice'] = true;
        $this->manualUnitPrice = $manualUnitPrice;

        return $this;
    }

    public function getNetAmount(): ?string
    {
        return $this->netAmount;
    }

    public function setNetAmount(?string $netAmount): self
    {
        $this->initialized['netAmount'] = true;
        $this->netAmount = $netAmount;

        return $this;
    }

    public function getNetAmountForStatistics(): ?string
    {
        return $this->netAmountForStatistics;
    }

    public function setNetAmountForStatistics(?string $netAmountForStatistics): self
    {
        $this->initialized['netAmountForStatistics'] = true;
        $this->netAmountForStatistics = $netAmountForStatistics;

        return $this;
    }

    public function getNetAmountForStatisticsInCompanyCurrency(): ?string
    {
        return $this->netAmountForStatisticsInCompanyCurrency;
    }

    public function setNetAmountForStatisticsInCompanyCurrency(?string $netAmountForStatisticsInCompanyCurrency): self
    {
        $this->initialized['netAmountForStatisticsInCompanyCurrency'] = true;
        $this->netAmountForStatisticsInCompanyCurrency = $netAmountForStatisticsInCompanyCurrency;

        return $this;
    }

    public function getNetAmountInCompanyCurrency(): ?string
    {
        return $this->netAmountInCompanyCurrency;
    }

    public function setNetAmountInCompanyCurrency(?string $netAmountInCompanyCurrency): self
    {
        $this->initialized['netAmountInCompanyCurrency'] = true;
        $this->netAmountInCompanyCurrency = $netAmountInCompanyCurrency;

        return $this;
    }

    /**
     * @return list<ReductionAdditionItem>|null
     */
    public function getReductionAdditionItems(): ?array
    {
        return $this->reductionAdditionItems;
    }

    /**
     * @param  list<ReductionAdditionItem>|null  $reductionAdditionItems
     */
    public function setReductionAdditionItems(?array $reductionAdditionItems): self
    {
        $this->initialized['reductionAdditionItems'] = true;
        $this->reductionAdditionItems = $reductionAdditionItems;

        return $this;
    }

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(?string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getTaxName(): ?string
    {
        return $this->taxName;
    }

    /**
     * @deprecated
     */
    public function setTaxName(?string $taxName): self
    {
        $this->initialized['taxName'] = true;
        $this->taxName = $taxName;

        return $this;
    }

    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(?string $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function getUnitPriceInCompanyCurrency(): ?string
    {
        return $this->unitPriceInCompanyCurrency;
    }

    public function setUnitPriceInCompanyCurrency(?string $unitPriceInCompanyCurrency): self
    {
        $this->initialized['unitPriceInCompanyCurrency'] = true;
        $this->unitPriceInCompanyCurrency = $unitPriceInCompanyCurrency;

        return $this;
    }

    public function getAddPageBreakBefore(): ?bool
    {
        return $this->addPageBreakBefore;
    }

    public function setAddPageBreakBefore(?bool $addPageBreakBefore): self
    {
        $this->initialized['addPageBreakBefore'] = true;
        $this->addPageBreakBefore = $addPageBreakBefore;

        return $this;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(?string $groupName): self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * @return list<CommissionSalesPartner>|null
     */
    public function getCommissionSalesPartners(): ?array
    {
        return $this->commissionSalesPartners;
    }

    /**
     * @param  list<CommissionSalesPartner>|null  $commissionSalesPartners
     */
    public function setCommissionSalesPartners(?array $commissionSalesPartners): self
    {
        $this->initialized['commissionSalesPartners'] = true;
        $this->commissionSalesPartners = $commissionSalesPartners;

        return $this;
    }

    public function getManualUnitCost(): ?bool
    {
        return $this->manualUnitCost;
    }

    public function setManualUnitCost(?bool $manualUnitCost): self
    {
        $this->initialized['manualUnitCost'] = true;
        $this->manualUnitCost = $manualUnitCost;

        return $this;
    }

    public function getRecommendedRetailPrice(): ?string
    {
        return $this->recommendedRetailPrice;
    }

    public function setRecommendedRetailPrice(?string $recommendedRetailPrice): self
    {
        $this->initialized['recommendedRetailPrice'] = true;
        $this->recommendedRetailPrice = $recommendedRetailPrice;

        return $this;
    }

    public function getServicePeriodFrom(): ?int
    {
        return $this->servicePeriodFrom;
    }

    public function setServicePeriodFrom(?int $servicePeriodFrom): self
    {
        $this->initialized['servicePeriodFrom'] = true;
        $this->servicePeriodFrom = $servicePeriodFrom;

        return $this;
    }

    public function getServicePeriodTo(): ?int
    {
        return $this->servicePeriodTo;
    }

    public function setServicePeriodTo(?int $servicePeriodTo): self
    {
        $this->initialized['servicePeriodTo'] = true;
        $this->servicePeriodTo = $servicePeriodTo;

        return $this;
    }

    public function getUnitCost(): ?string
    {
        return $this->unitCost;
    }

    public function setUnitCost(?string $unitCost): self
    {
        $this->initialized['unitCost'] = true;
        $this->unitCost = $unitCost;

        return $this;
    }

    public function getUnitCostInCompanyCurrency(): ?string
    {
        return $this->unitCostInCompanyCurrency;
    }

    public function setUnitCostInCompanyCurrency(?string $unitCostInCompanyCurrency): self
    {
        $this->initialized['unitCostInCompanyCurrency'] = true;
        $this->unitCostInCompanyCurrency = $unitCostInCompanyCurrency;

        return $this;
    }

    public function getInvoicingType(): ?string
    {
        return $this->invoicingType;
    }

    public function setInvoicingType(?string $invoicingType): self
    {
        $this->initialized['invoicingType'] = true;
        $this->invoicingType = $invoicingType;

        return $this;
    }

    public function getManualPlannedWorkingTimePerUnit(): ?bool
    {
        return $this->manualPlannedWorkingTimePerUnit;
    }

    public function setManualPlannedWorkingTimePerUnit(?bool $manualPlannedWorkingTimePerUnit): self
    {
        $this->initialized['manualPlannedWorkingTimePerUnit'] = true;
        $this->manualPlannedWorkingTimePerUnit = $manualPlannedWorkingTimePerUnit;

        return $this;
    }

    public function getPlannedDeliveryDate(): ?int
    {
        return $this->plannedDeliveryDate;
    }

    public function setPlannedDeliveryDate(?int $plannedDeliveryDate): self
    {
        $this->initialized['plannedDeliveryDate'] = true;
        $this->plannedDeliveryDate = $plannedDeliveryDate;

        return $this;
    }

    public function getPlannedShippingDate(): ?int
    {
        return $this->plannedShippingDate;
    }

    public function setPlannedShippingDate(?int $plannedShippingDate): self
    {
        $this->initialized['plannedShippingDate'] = true;
        $this->plannedShippingDate = $plannedShippingDate;

        return $this;
    }

    public function getPlannedWorkingTimePerUnit(): ?int
    {
        return $this->plannedWorkingTimePerUnit;
    }

    public function setPlannedWorkingTimePerUnit(?int $plannedWorkingTimePerUnit): self
    {
        $this->initialized['plannedWorkingTimePerUnit'] = true;
        $this->plannedWorkingTimePerUnit = $plannedWorkingTimePerUnit;

        return $this;
    }

    public function getAvailability(): ?string
    {
        return $this->availability;
    }

    public function setAvailability(?string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;

        return $this;
    }

    public function getAvailabilityForAllWarehouses(): ?string
    {
        return $this->availabilityForAllWarehouses;
    }

    public function setAvailabilityForAllWarehouses(?string $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;

        return $this;
    }

    public function getContractChargeId(): ?string
    {
        return $this->contractChargeId;
    }

    public function setContractChargeId(?string $contractChargeId): self
    {
        $this->initialized['contractChargeId'] = true;
        $this->contractChargeId = $contractChargeId;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getEcommerceOrderItemIds(): ?array
    {
        return $this->ecommerceOrderItemIds;
    }

    /**
     * @param  list<string>|null  $ecommerceOrderItemIds
     */
    public function setEcommerceOrderItemIds(?array $ecommerceOrderItemIds): self
    {
        $this->initialized['ecommerceOrderItemIds'] = true;
        $this->ecommerceOrderItemIds = $ecommerceOrderItemIds;

        return $this;
    }

    public function getInvoicedQuantity(): ?string
    {
        return $this->invoicedQuantity;
    }

    public function setInvoicedQuantity(?string $invoicedQuantity): self
    {
        $this->initialized['invoicedQuantity'] = true;
        $this->invoicedQuantity = $invoicedQuantity;

        return $this;
    }

    /**
     * @return list<ItemPick>|null
     */
    public function getPicks(): ?array
    {
        return $this->picks;
    }

    /**
     * @param  list<ItemPick>|null  $picks
     */
    public function setPicks(?array $picks): self
    {
        $this->initialized['picks'] = true;
        $this->picks = $picks;

        return $this;
    }

    public function getReturnedQuantity(): ?string
    {
        return $this->returnedQuantity;
    }

    public function setReturnedQuantity(?string $returnedQuantity): self
    {
        $this->initialized['returnedQuantity'] = true;
        $this->returnedQuantity = $returnedQuantity;

        return $this;
    }

    public function getShipped(): ?bool
    {
        return $this->shipped;
    }

    public function setShipped(?bool $shipped): self
    {
        $this->initialized['shipped'] = true;
        $this->shipped = $shipped;

        return $this;
    }

    public function getShippedQuantity(): ?string
    {
        return $this->shippedQuantity;
    }

    public function setShippedQuantity(?string $shippedQuantity): self
    {
        $this->initialized['shippedQuantity'] = true;
        $this->shippedQuantity = $shippedQuantity;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getTasks(): ?array
    {
        return $this->tasks;
    }

    /**
     * @param  list<OnlyId>|null  $tasks
     */
    public function setTasks(?array $tasks): self
    {
        $this->initialized['tasks'] = true;
        $this->tasks = $tasks;

        return $this;
    }
}
