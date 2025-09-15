<?php

namespace Webhubworks\WeclappApiCore\Model;

class ContractItem extends \ArrayObject
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
     * @var string|null
     */
    protected $billingGroupId;
    /**
     * 
     *
     * @var list<CommissionSalesPartner>|null
     */
    protected $commissionSalesPartners;
    /**
     * 
     *
     * @var list<CostCenterWithDistributionPercentage>|null
     */
    protected $costCenterItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $costTypeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $interval;
    /**
     * 
     *
     * @var string|null
     */
    protected $intervalType;
    /**
     * 
     *
     * @var int|null
     */
    protected $nextContractBillingDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $previousContractBillingDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $servicePeriodFromDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $servicePeriodToDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
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
     * @return string|null
     */
    public function getBillingGroupId(): ?string
    {
        return $this->billingGroupId;
    }
    /**
     * 
     *
     * @param string|null $billingGroupId
     *
     * @return self
     */
    public function setBillingGroupId(?string $billingGroupId): self
    {
        $this->initialized['billingGroupId'] = true;
        $this->billingGroupId = $billingGroupId;
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
     * @return list<CostCenterWithDistributionPercentage>|null
     */
    public function getCostCenterItems(): ?array
    {
        return $this->costCenterItems;
    }
    /**
     * 
     *
     * @param list<CostCenterWithDistributionPercentage>|null $costCenterItems
     *
     * @return self
     */
    public function setCostCenterItems(?array $costCenterItems): self
    {
        $this->initialized['costCenterItems'] = true;
        $this->costCenterItems = $costCenterItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCostTypeId(): ?string
    {
        return $this->costTypeId;
    }
    /**
     * 
     *
     * @param string|null $costTypeId
     *
     * @return self
     */
    public function setCostTypeId(?string $costTypeId): self
    {
        $this->initialized['costTypeId'] = true;
        $this->costTypeId = $costTypeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }
    /**
     * 
     *
     * @param string|null $interval
     *
     * @return self
     */
    public function setInterval(?string $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIntervalType(): ?string
    {
        return $this->intervalType;
    }
    /**
     * 
     *
     * @param string|null $intervalType
     *
     * @return self
     */
    public function setIntervalType(?string $intervalType): self
    {
        $this->initialized['intervalType'] = true;
        $this->intervalType = $intervalType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNextContractBillingDate(): ?int
    {
        return $this->nextContractBillingDate;
    }
    /**
     * 
     *
     * @param int|null $nextContractBillingDate
     *
     * @return self
     */
    public function setNextContractBillingDate(?int $nextContractBillingDate): self
    {
        $this->initialized['nextContractBillingDate'] = true;
        $this->nextContractBillingDate = $nextContractBillingDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPreviousContractBillingDate(): ?int
    {
        return $this->previousContractBillingDate;
    }
    /**
     * 
     *
     * @param int|null $previousContractBillingDate
     *
     * @return self
     */
    public function setPreviousContractBillingDate(?int $previousContractBillingDate): self
    {
        $this->initialized['previousContractBillingDate'] = true;
        $this->previousContractBillingDate = $previousContractBillingDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getServicePeriodFromDate(): ?int
    {
        return $this->servicePeriodFromDate;
    }
    /**
     * 
     *
     * @param int|null $servicePeriodFromDate
     *
     * @return self
     */
    public function setServicePeriodFromDate(?int $servicePeriodFromDate): self
    {
        $this->initialized['servicePeriodFromDate'] = true;
        $this->servicePeriodFromDate = $servicePeriodFromDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getServicePeriodToDate(): ?int
    {
        return $this->servicePeriodToDate;
    }
    /**
     * 
     *
     * @param int|null $servicePeriodToDate
     *
     * @return self
     */
    public function setServicePeriodToDate(?int $servicePeriodToDate): self
    {
        $this->initialized['servicePeriodToDate'] = true;
        $this->servicePeriodToDate = $servicePeriodToDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}