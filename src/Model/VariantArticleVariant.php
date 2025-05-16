<?php

namespace Webhubworks\WeclappApiCore\Model;

class VariantArticleVariant extends \ArrayObject
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
    protected $articleId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $articleNumber;

    /**
     * @var list<OnlyId>|null
     */
    protected $attributeOptions;

    /**
     * @var int|null
     */
    protected $positionNumber;

    /**
     * @var string|null
     */
    protected $variantArticleId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $variantArticleNumber;

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

    /**
     * @deprecated
     */
    public function getArticleNumber(): ?string
    {
        return $this->articleNumber;
    }

    /**
     * @deprecated
     */
    public function setArticleNumber(?string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getAttributeOptions(): ?array
    {
        return $this->attributeOptions;
    }

    /**
     * @param  list<OnlyId>|null  $attributeOptions
     */
    public function setAttributeOptions(?array $attributeOptions): self
    {
        $this->initialized['attributeOptions'] = true;
        $this->attributeOptions = $attributeOptions;

        return $this;
    }

    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }

    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getVariantArticleId(): ?string
    {
        return $this->variantArticleId;
    }

    public function setVariantArticleId(?string $variantArticleId): self
    {
        $this->initialized['variantArticleId'] = true;
        $this->variantArticleId = $variantArticleId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getVariantArticleNumber(): ?string
    {
        return $this->variantArticleNumber;
    }

    /**
     * @deprecated
     */
    public function setVariantArticleNumber(?string $variantArticleNumber): self
    {
        $this->initialized['variantArticleNumber'] = true;
        $this->variantArticleNumber = $variantArticleNumber;

        return $this;
    }
}
