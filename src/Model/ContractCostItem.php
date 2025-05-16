<?php

namespace Webhubworks\WeclappApiCore\Model;

class ContractCostItem extends \ArrayObject
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
     * @var string
     */
    protected $articleId;

    /**
     * @var string
     */
    protected $description;

    /**
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
    protected $interval;

    /**
     * @var string
     */
    protected $intervalType;

    /**
     * @var bool
     */
    protected $manualUnitPrice;

    /**
     * @var string
     */
    protected $netAmount;

    /**
     * @var string
     */
    protected $netAmountInCompanyCurrency;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var string
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $servicePeriodFrom;

    /**
     * @var int
     */
    protected $servicePeriodTo;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $unitId;

    /**
     * @var string
     */
    protected $unitPrice;

    /**
     * @var string
     */
    protected $unitPriceInCompanyCurrency;

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

    public function getArticleId(): string
    {
        return $this->articleId;
    }

    public function setArticleId(string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

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

    public function getDescriptionFixed(): bool
    {
        return $this->descriptionFixed;
    }

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

    public function getInterval(): string
    {
        return $this->interval;
    }

    public function setInterval(string $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;

        return $this;
    }

    public function getIntervalType(): string
    {
        return $this->intervalType;
    }

    public function setIntervalType(string $intervalType): self
    {
        $this->initialized['intervalType'] = true;
        $this->intervalType = $intervalType;

        return $this;
    }

    public function getManualUnitPrice(): bool
    {
        return $this->manualUnitPrice;
    }

    public function setManualUnitPrice(bool $manualUnitPrice): self
    {
        $this->initialized['manualUnitPrice'] = true;
        $this->manualUnitPrice = $manualUnitPrice;

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

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getServicePeriodFrom(): int
    {
        return $this->servicePeriodFrom;
    }

    public function setServicePeriodFrom(int $servicePeriodFrom): self
    {
        $this->initialized['servicePeriodFrom'] = true;
        $this->servicePeriodFrom = $servicePeriodFrom;

        return $this;
    }

    public function getServicePeriodTo(): int
    {
        return $this->servicePeriodTo;
    }

    public function setServicePeriodTo(int $servicePeriodTo): self
    {
        $this->initialized['servicePeriodTo'] = true;
        $this->servicePeriodTo = $servicePeriodTo;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

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
}
