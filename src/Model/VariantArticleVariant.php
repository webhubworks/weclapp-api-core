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
     * @var list<OnlyId>
     */
    protected $attributeOptions;
    /**
     * 
     *
     * @var int
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $variantArticleId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $variantArticleNumber;
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
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getAttributeOptions(): array
    {
        return $this->attributeOptions;
    }
    /**
     * 
     *
     * @param list<OnlyId> $attributeOptions
     *
     * @return self
     */
    public function setAttributeOptions(array $attributeOptions): self
    {
        $this->initialized['attributeOptions'] = true;
        $this->attributeOptions = $attributeOptions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVariantArticleId(): string
    {
        return $this->variantArticleId;
    }
    /**
     * 
     *
     * @param string $variantArticleId
     *
     * @return self
     */
    public function setVariantArticleId(string $variantArticleId): self
    {
        $this->initialized['variantArticleId'] = true;
        $this->variantArticleId = $variantArticleId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getVariantArticleNumber(): string
    {
        return $this->variantArticleNumber;
    }
    /**
     * 
     *
     * @param string $variantArticleNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setVariantArticleNumber(string $variantArticleNumber): self
    {
        $this->initialized['variantArticleNumber'] = true;
        $this->variantArticleNumber = $variantArticleNumber;
        return $this;
    }
}