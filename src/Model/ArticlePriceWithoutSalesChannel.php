<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArticlePriceWithoutSalesChannel extends \ArrayObject
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
     * @var string|null
     */
    protected $currencyId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $currencyName;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var int|null
     */
    protected $endDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastModifiedByUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $price;
    /**
     * 
     *
     * @var string|null
     */
    protected $priceScaleType;
    /**
     * 
     *
     * @var string|null
     */
    protected $priceScaleValue;
    /**
     * 
     *
     * @var list<ReductionAddition>|null
     */
    protected $reductionAdditions;
    /**
     * 
     *
     * @var int|null
     */
    protected $startDate;
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
     * @return string|null
     */
    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }
    /**
     * 
     *
     * @param string|null $currencyId
     *
     * @return self
     */
    public function setCurrencyId(?string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getCurrencyName(): ?string
    {
        return $this->currencyName;
    }
    /**
     * 
     *
     * @param string|null $currencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCurrencyName(?string $currencyName): self
    {
        $this->initialized['currencyName'] = true;
        $this->currencyName = $currencyName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
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
     * @return int|null
     */
    public function getEndDate(): ?int
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param int|null $endDate
     *
     * @return self
     */
    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastModifiedByUserId(): ?string
    {
        return $this->lastModifiedByUserId;
    }
    /**
     * 
     *
     * @param string|null $lastModifiedByUserId
     *
     * @return self
     */
    public function setLastModifiedByUserId(?string $lastModifiedByUserId): self
    {
        $this->initialized['lastModifiedByUserId'] = true;
        $this->lastModifiedByUserId = $lastModifiedByUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param string|null $price
     *
     * @return self
     */
    public function setPrice(?string $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPriceScaleType(): ?string
    {
        return $this->priceScaleType;
    }
    /**
     * 
     *
     * @param string|null $priceScaleType
     *
     * @return self
     */
    public function setPriceScaleType(?string $priceScaleType): self
    {
        $this->initialized['priceScaleType'] = true;
        $this->priceScaleType = $priceScaleType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPriceScaleValue(): ?string
    {
        return $this->priceScaleValue;
    }
    /**
     * 
     *
     * @param string|null $priceScaleValue
     *
     * @return self
     */
    public function setPriceScaleValue(?string $priceScaleValue): self
    {
        $this->initialized['priceScaleValue'] = true;
        $this->priceScaleValue = $priceScaleValue;
        return $this;
    }
    /**
     * 
     *
     * @return list<ReductionAddition>|null
     */
    public function getReductionAdditions(): ?array
    {
        return $this->reductionAdditions;
    }
    /**
     * 
     *
     * @param list<ReductionAddition>|null $reductionAdditions
     *
     * @return self
     */
    public function setReductionAdditions(?array $reductionAdditions): self
    {
        $this->initialized['reductionAdditions'] = true;
        $this->reductionAdditions = $reductionAdditions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStartDate(): ?int
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param int|null $startDate
     *
     * @return self
     */
    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
}