<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArticleCalculationPrice extends \ArrayObject
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
    protected $articleCalculationPriceType;
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
    protected $price;
    /**
     * 
     *
     * @var string
     */
    protected $salesChannel;
    /**
     * 
     *
     * @var int
     */
    protected $startDate;
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
    public function getArticleCalculationPriceType(): string
    {
        return $this->articleCalculationPriceType;
    }
    /**
     * 
     *
     * @param string $articleCalculationPriceType
     *
     * @return self
     */
    public function setArticleCalculationPriceType(string $articleCalculationPriceType): self
    {
        $this->initialized['articleCalculationPriceType'] = true;
        $this->articleCalculationPriceType = $articleCalculationPriceType;
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
}