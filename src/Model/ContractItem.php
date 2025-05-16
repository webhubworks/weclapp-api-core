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
     * @var string|null
     */
    protected $billingGroupId;

    /**
     * @var list<CommissionSalesPartner>|null
     */
    protected $commissionSalesPartners;

    /**
     * @var string|null
     */
    protected $costTypeId;

    /**
     * @var string|null
     */
    protected $interval;

    /**
     * @var string|null
     */
    protected $intervalType;

    /**
     * @var int|null
     */
    protected $nextContractBillingDate;

    /**
     * @var int|null
     */
    protected $previousContractBillingDate;

    /**
     * @var int|null
     */
    protected $servicePeriodFromDate;

    /**
     * @var int|null
     */
    protected $servicePeriodToDate;

    /**
     * @var string|null
     */
    protected $type;

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

    public function getBillingGroupId(): ?string
    {
        return $this->billingGroupId;
    }

    public function setBillingGroupId(?string $billingGroupId): self
    {
        $this->initialized['billingGroupId'] = true;
        $this->billingGroupId = $billingGroupId;

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

    public function getCostTypeId(): ?string
    {
        return $this->costTypeId;
    }

    public function setCostTypeId(?string $costTypeId): self
    {
        $this->initialized['costTypeId'] = true;
        $this->costTypeId = $costTypeId;

        return $this;
    }

    public function getInterval(): ?string
    {
        return $this->interval;
    }

    public function setInterval(?string $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;

        return $this;
    }

    public function getIntervalType(): ?string
    {
        return $this->intervalType;
    }

    public function setIntervalType(?string $intervalType): self
    {
        $this->initialized['intervalType'] = true;
        $this->intervalType = $intervalType;

        return $this;
    }

    public function getNextContractBillingDate(): ?int
    {
        return $this->nextContractBillingDate;
    }

    public function setNextContractBillingDate(?int $nextContractBillingDate): self
    {
        $this->initialized['nextContractBillingDate'] = true;
        $this->nextContractBillingDate = $nextContractBillingDate;

        return $this;
    }

    public function getPreviousContractBillingDate(): ?int
    {
        return $this->previousContractBillingDate;
    }

    public function setPreviousContractBillingDate(?int $previousContractBillingDate): self
    {
        $this->initialized['previousContractBillingDate'] = true;
        $this->previousContractBillingDate = $previousContractBillingDate;

        return $this;
    }

    public function getServicePeriodFromDate(): ?int
    {
        return $this->servicePeriodFromDate;
    }

    public function setServicePeriodFromDate(?int $servicePeriodFromDate): self
    {
        $this->initialized['servicePeriodFromDate'] = true;
        $this->servicePeriodFromDate = $servicePeriodFromDate;

        return $this;
    }

    public function getServicePeriodToDate(): ?int
    {
        return $this->servicePeriodToDate;
    }

    public function setServicePeriodToDate(?int $servicePeriodToDate): self
    {
        $this->initialized['servicePeriodToDate'] = true;
        $this->servicePeriodToDate = $servicePeriodToDate;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
