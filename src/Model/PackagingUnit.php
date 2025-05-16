<?php

namespace Webhubworks\WeclappApiCore\Model;

class PackagingUnit extends \ArrayObject
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
    protected $articleId;
    /**
     * 
     *
     * @var int|null
     */
    protected $baseArticleQuantity;
    /**
     * 
     *
     * @var int|null
     */
    protected $packagingUnitQuantity;
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
     * @return int|null
     */
    public function getBaseArticleQuantity(): ?int
    {
        return $this->baseArticleQuantity;
    }
    /**
     * 
     *
     * @param int|null $baseArticleQuantity
     *
     * @return self
     */
    public function setBaseArticleQuantity(?int $baseArticleQuantity): self
    {
        $this->initialized['baseArticleQuantity'] = true;
        $this->baseArticleQuantity = $baseArticleQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPackagingUnitQuantity(): ?int
    {
        return $this->packagingUnitQuantity;
    }
    /**
     * 
     *
     * @param int|null $packagingUnitQuantity
     *
     * @return self
     */
    public function setPackagingUnitQuantity(?int $packagingUnitQuantity): self
    {
        $this->initialized['packagingUnitQuantity'] = true;
        $this->packagingUnitQuantity = $packagingUnitQuantity;
        return $this;
    }
}