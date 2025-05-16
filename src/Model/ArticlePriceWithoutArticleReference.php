<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArticlePriceWithoutArticleReference extends \ArrayObject
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
     * @var string|null
     */
    protected $currencyId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $currencyName;

    /**
     * @var string|null
     */
    protected $customerId;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var int|null
     */
    protected $endDate;

    /**
     * @var string|null
     */
    protected $lastModifiedByUserId;

    /**
     * @var string|null
     */
    protected $price;

    /**
     * @var string|null
     */
    protected $priceScaleType;

    /**
     * @var string|null
     */
    protected $priceScaleValue;

    /**
     * @var list<ReductionAddition>|null
     */
    protected $reductionAdditions;

    /**
     * @var int|null
     */
    protected $startDate;

    /**
     * @var string|null
     */
    protected $salesChannel;

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

    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(?string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCurrencyName(): ?string
    {
        return $this->currencyName;
    }

    /**
     * @deprecated
     */
    public function setCurrencyName(?string $currencyName): self
    {
        $this->initialized['currencyName'] = true;
        $this->currencyName = $currencyName;

        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;

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

    public function getEndDate(): ?int
    {
        return $this->endDate;
    }

    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    public function getLastModifiedByUserId(): ?string
    {
        return $this->lastModifiedByUserId;
    }

    public function setLastModifiedByUserId(?string $lastModifiedByUserId): self
    {
        $this->initialized['lastModifiedByUserId'] = true;
        $this->lastModifiedByUserId = $lastModifiedByUserId;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    public function getPriceScaleType(): ?string
    {
        return $this->priceScaleType;
    }

    public function setPriceScaleType(?string $priceScaleType): self
    {
        $this->initialized['priceScaleType'] = true;
        $this->priceScaleType = $priceScaleType;

        return $this;
    }

    public function getPriceScaleValue(): ?string
    {
        return $this->priceScaleValue;
    }

    public function setPriceScaleValue(?string $priceScaleValue): self
    {
        $this->initialized['priceScaleValue'] = true;
        $this->priceScaleValue = $priceScaleValue;

        return $this;
    }

    /**
     * @return list<ReductionAddition>|null
     */
    public function getReductionAdditions(): ?array
    {
        return $this->reductionAdditions;
    }

    /**
     * @param  list<ReductionAddition>|null  $reductionAdditions
     */
    public function setReductionAdditions(?array $reductionAdditions): self
    {
        $this->initialized['reductionAdditions'] = true;
        $this->reductionAdditions = $reductionAdditions;

        return $this;
    }

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    public function getSalesChannel(): ?string
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;

        return $this;
    }
}
