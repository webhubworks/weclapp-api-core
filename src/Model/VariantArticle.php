<?php

namespace Webhubworks\WeclappApiCore\Model;

class VariantArticle extends \ArrayObject
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
    protected $primaryArticleId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $primaryArticleNumber;
    /**
     * 
     *
     * @var string
     */
    protected $variantArticleName;
    /**
     * 
     *
     * @var string
     */
    protected $variantArticleNumber;
    /**
     * 
     *
     * @var list<VariantArticleVariantWithoutReference>
     */
    protected $variants;
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
    public function getPrimaryArticleId(): string
    {
        return $this->primaryArticleId;
    }
    /**
     * 
     *
     * @param string $primaryArticleId
     *
     * @return self
     */
    public function setPrimaryArticleId(string $primaryArticleId): self
    {
        $this->initialized['primaryArticleId'] = true;
        $this->primaryArticleId = $primaryArticleId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getPrimaryArticleNumber(): string
    {
        return $this->primaryArticleNumber;
    }
    /**
     * 
     *
     * @param string $primaryArticleNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setPrimaryArticleNumber(string $primaryArticleNumber): self
    {
        $this->initialized['primaryArticleNumber'] = true;
        $this->primaryArticleNumber = $primaryArticleNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVariantArticleName(): string
    {
        return $this->variantArticleName;
    }
    /**
     * 
     *
     * @param string $variantArticleName
     *
     * @return self
     */
    public function setVariantArticleName(string $variantArticleName): self
    {
        $this->initialized['variantArticleName'] = true;
        $this->variantArticleName = $variantArticleName;
        return $this;
    }
    /**
     * 
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
     * @return self
     */
    public function setVariantArticleNumber(string $variantArticleNumber): self
    {
        $this->initialized['variantArticleNumber'] = true;
        $this->variantArticleNumber = $variantArticleNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<VariantArticleVariantWithoutReference>
     */
    public function getVariants(): array
    {
        return $this->variants;
    }
    /**
     * 
     *
     * @param list<VariantArticleVariantWithoutReference> $variants
     *
     * @return self
     */
    public function setVariants(array $variants): self
    {
        $this->initialized['variants'] = true;
        $this->variants = $variants;
        return $this;
    }
}