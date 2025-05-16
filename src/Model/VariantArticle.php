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
    protected $primaryArticleId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $primaryArticleNumber;

    /**
     * @var string|null
     */
    protected $variantArticleName;

    /**
     * @var string|null
     */
    protected $variantArticleNumber;

    /**
     * @var list<VariantArticleVariantWithoutReference>|null
     */
    protected $variants;

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

    public function getPrimaryArticleId(): ?string
    {
        return $this->primaryArticleId;
    }

    public function setPrimaryArticleId(?string $primaryArticleId): self
    {
        $this->initialized['primaryArticleId'] = true;
        $this->primaryArticleId = $primaryArticleId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPrimaryArticleNumber(): ?string
    {
        return $this->primaryArticleNumber;
    }

    /**
     * @deprecated
     */
    public function setPrimaryArticleNumber(?string $primaryArticleNumber): self
    {
        $this->initialized['primaryArticleNumber'] = true;
        $this->primaryArticleNumber = $primaryArticleNumber;

        return $this;
    }

    public function getVariantArticleName(): ?string
    {
        return $this->variantArticleName;
    }

    public function setVariantArticleName(?string $variantArticleName): self
    {
        $this->initialized['variantArticleName'] = true;
        $this->variantArticleName = $variantArticleName;

        return $this;
    }

    public function getVariantArticleNumber(): ?string
    {
        return $this->variantArticleNumber;
    }

    public function setVariantArticleNumber(?string $variantArticleNumber): self
    {
        $this->initialized['variantArticleNumber'] = true;
        $this->variantArticleNumber = $variantArticleNumber;

        return $this;
    }

    /**
     * @return list<VariantArticleVariantWithoutReference>|null
     */
    public function getVariants(): ?array
    {
        return $this->variants;
    }

    /**
     * @param  list<VariantArticleVariantWithoutReference>|null  $variants
     */
    public function setVariants(?array $variants): self
    {
        $this->initialized['variants'] = true;
        $this->variants = $variants;

        return $this;
    }
}
