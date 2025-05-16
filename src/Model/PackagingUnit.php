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
     * @var string
     */
    protected $articleId;

    /**
     * @var int
     */
    protected $baseArticleQuantity;

    /**
     * @var int
     */
    protected $packagingUnitQuantity;

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

    public function getBaseArticleQuantity(): int
    {
        return $this->baseArticleQuantity;
    }

    public function setBaseArticleQuantity(int $baseArticleQuantity): self
    {
        $this->initialized['baseArticleQuantity'] = true;
        $this->baseArticleQuantity = $baseArticleQuantity;

        return $this;
    }

    public function getPackagingUnitQuantity(): int
    {
        return $this->packagingUnitQuantity;
    }

    public function setPackagingUnitQuantity(int $packagingUnitQuantity): self
    {
        $this->initialized['packagingUnitQuantity'] = true;
        $this->packagingUnitQuantity = $packagingUnitQuantity;

        return $this;
    }
}
