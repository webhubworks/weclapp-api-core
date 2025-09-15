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
    protected $articleCalculationPriceType;
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
    protected $price;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesChannel;
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
    public function getArticleCalculationPriceType(): ?string
    {
        return $this->articleCalculationPriceType;
    }
    /**
     * 
     *
     * @param string|null $articleCalculationPriceType
     *
     * @return self
     */
    public function setArticleCalculationPriceType(?string $articleCalculationPriceType): self
    {
        $this->initialized['articleCalculationPriceType'] = true;
        $this->articleCalculationPriceType = $articleCalculationPriceType;
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
    public function getSalesChannel(): ?string
    {
        return $this->salesChannel;
    }
    /**
     * 
     *
     * @param string|null $salesChannel
     *
     * @return self
     */
    public function setSalesChannel(?string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;
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