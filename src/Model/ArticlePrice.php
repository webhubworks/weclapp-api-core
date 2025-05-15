<?php

namespace Webhub\Weclapp\Model;

class ArticlePrice extends \ArrayObject
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
     * @var string
     */
    protected $currencyId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $currencyName;
    /**
     * 
     *
     * @var string
     */
    protected $customerId;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $endDate;
    /**
     * 
     *
     * @var string
     */
    protected $lastModifiedByUserId;
    /**
     * 
     *
     * @var string
     */
    protected $price;
    /**
     * 
     *
     * @var string
     */
    protected $priceScaleType;
    /**
     * 
     *
     * @var string
     */
    protected $priceScaleValue;
    /**
     * 
     *
     * @var list<ReductionAddition>
     */
    protected $reductionAdditions;
    /**
     * 
     *
     * @var int
     */
    protected $startDate;
    /**
     * 
     *
     * @var string
     */
    protected $salesChannel;
    /**
     * 
     *
     * @var string
     */
    protected $articleId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $articleNumber;
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
     * @return string
     */
    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }
    /**
     * 
     *
     * @param string $currencyId
     *
     * @return self
     */
    public function setCurrencyId(string $currencyId): self
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
     * @return string
     */
    public function getCurrencyName(): string
    {
        return $this->currencyName;
    }
    /**
     * 
     *
     * @param string $currencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCurrencyName(string $currencyName): self
    {
        $this->initialized['currencyName'] = true;
        $this->currencyName = $currencyName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string $customerId
     *
     * @return self
     */
    public function setCustomerId(string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
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
     * @return int
     */
    public function getEndDate(): int
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param int $endDate
     *
     * @return self
     */
    public function setEndDate(int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastModifiedByUserId(): string
    {
        return $this->lastModifiedByUserId;
    }
    /**
     * 
     *
     * @param string $lastModifiedByUserId
     *
     * @return self
     */
    public function setLastModifiedByUserId(string $lastModifiedByUserId): self
    {
        $this->initialized['lastModifiedByUserId'] = true;
        $this->lastModifiedByUserId = $lastModifiedByUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param string $price
     *
     * @return self
     */
    public function setPrice(string $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPriceScaleType(): string
    {
        return $this->priceScaleType;
    }
    /**
     * 
     *
     * @param string $priceScaleType
     *
     * @return self
     */
    public function setPriceScaleType(string $priceScaleType): self
    {
        $this->initialized['priceScaleType'] = true;
        $this->priceScaleType = $priceScaleType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPriceScaleValue(): string
    {
        return $this->priceScaleValue;
    }
    /**
     * 
     *
     * @param string $priceScaleValue
     *
     * @return self
     */
    public function setPriceScaleValue(string $priceScaleValue): self
    {
        $this->initialized['priceScaleValue'] = true;
        $this->priceScaleValue = $priceScaleValue;
        return $this;
    }
    /**
     * 
     *
     * @return list<ReductionAddition>
     */
    public function getReductionAdditions(): array
    {
        return $this->reductionAdditions;
    }
    /**
     * 
     *
     * @param list<ReductionAddition> $reductionAdditions
     *
     * @return self
     */
    public function setReductionAdditions(array $reductionAdditions): self
    {
        $this->initialized['reductionAdditions'] = true;
        $this->reductionAdditions = $reductionAdditions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param int $startDate
     *
     * @return self
     */
    public function setStartDate(int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesChannel(): string
    {
        return $this->salesChannel;
    }
    /**
     * 
     *
     * @param string $salesChannel
     *
     * @return self
     */
    public function setSalesChannel(string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArticleId(): string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string $articleId
     *
     * @return self
     */
    public function setArticleId(string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
     *
     * @return self
     */
    public function setArticleNumber(string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;
        return $this;
    }
}