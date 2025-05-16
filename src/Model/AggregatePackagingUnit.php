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
     * @var string|null
     */
    protected $articleId;

    /**
     * @var string|null
     */
    protected $articleName;

    /**
     * @var string|null
     */
    protected $articleNumber;

    /**
     * @var int|null
     */
    protected $baseArticleQuantity;

    /**
     * @var int|null
     */
    protected $packagingUnitQuantity;

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

    public function getArticleName(): ?string
    {
        return $this->articleName;
    }

    public function setArticleName(?string $articleName): self
    {
        $this->initialized['articleName'] = true;
        $this->articleName = $articleName;

        return $this;
    }

    public function getArticleNumber(): ?string
    {
        return $this->articleNumber;
    }

    public function setArticleNumber(?string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;

        return $this;
    }

    public function getBaseArticleQuantity(): ?int
    {
        return $this->baseArticleQuantity;
    }

    public function setBaseArticleQuantity(?int $baseArticleQuantity): self
    {
        $this->initialized['baseArticleQuantity'] = true;
        $this->baseArticleQuantity = $baseArticleQuantity;

        return $this;
    }

    public function getPackagingUnitQuantity(): ?int
    {
        return $this->packagingUnitQuantity;
    }

    public function setPackagingUnitQuantity(?int $packagingUnitQuantity): self
    {
        $this->initialized['packagingUnitQuantity'] = true;
        $this->packagingUnitQuantity = $packagingUnitQuantity;

        return $this;
    }
}
