<?php

namespace Webhubworks\WeclappApiCore\Model;

class AggregatePackagingUnit extends \ArrayObject
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
    protected $articleId;
    /**
     * 
     *
     * @var string
     */
    protected $articleName;
    /**
     * 
     *
     * @var string
     */
    protected $articleNumber;
    /**
     * 
     *
     * @var int
     */
    protected $baseArticleQuantity;
    /**
     * 
     *
     * @var int
     */
    protected $packagingUnitQuantity;
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
     * @return string
     */
    public function getArticleName(): string
    {
        return $this->articleName;
    }
    /**
     * 
     *
     * @param string $articleName
     *
     * @return self
     */
    public function setArticleName(string $articleName): self
    {
        $this->initialized['articleName'] = true;
        $this->articleName = $articleName;
        return $this;
    }
    /**
     * 
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
     * @return self
     */
    public function setArticleNumber(string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBaseArticleQuantity(): int
    {
        return $this->baseArticleQuantity;
    }
    /**
     * 
     *
     * @param int $baseArticleQuantity
     *
     * @return self
     */
    public function setBaseArticleQuantity(int $baseArticleQuantity): self
    {
        $this->initialized['baseArticleQuantity'] = true;
        $this->baseArticleQuantity = $baseArticleQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPackagingUnitQuantity(): int
    {
        return $this->packagingUnitQuantity;
    }
    /**
     * 
     *
     * @param int $packagingUnitQuantity
     *
     * @return self
     */
    public function setPackagingUnitQuantity(int $packagingUnitQuantity): self
    {
        $this->initialized['packagingUnitQuantity'] = true;
        $this->packagingUnitQuantity = $packagingUnitQuantity;
        return $this;
    }
}