<?php

namespace Weclapp\Generated\Model;

class ArticleCategory extends \ArrayObject
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
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $articleAccountingCodeId;

    /**
     * @var string
     */
    protected $articleCategoryClassificationId;

    /**
     * @var string
     */
    protected $costTypeId;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $imageId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $parentCategoryId;

    /**
     * @var string
     */
    protected $purchaseCostCenterId;

    /**
     * @var string
     */
    protected $salesCostCenterId;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getArticleAccountingCodeId(): string
    {
        return $this->articleAccountingCodeId;
    }

    public function setArticleAccountingCodeId(string $articleAccountingCodeId): self
    {
        $this->initialized['articleAccountingCodeId'] = true;
        $this->articleAccountingCodeId = $articleAccountingCodeId;

        return $this;
    }

    public function getArticleCategoryClassificationId(): string
    {
        return $this->articleCategoryClassificationId;
    }

    public function setArticleCategoryClassificationId(string $articleCategoryClassificationId): self
    {
        $this->initialized['articleCategoryClassificationId'] = true;
        $this->articleCategoryClassificationId = $articleCategoryClassificationId;

        return $this;
    }

    public function getCostTypeId(): string
    {
        return $this->costTypeId;
    }

    public function setCostTypeId(string $costTypeId): self
    {
        $this->initialized['costTypeId'] = true;
        $this->costTypeId = $costTypeId;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getImageId(): string
    {
        return $this->imageId;
    }

    public function setImageId(string $imageId): self
    {
        $this->initialized['imageId'] = true;
        $this->imageId = $imageId;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getParentCategoryId(): string
    {
        return $this->parentCategoryId;
    }

    public function setParentCategoryId(string $parentCategoryId): self
    {
        $this->initialized['parentCategoryId'] = true;
        $this->parentCategoryId = $parentCategoryId;

        return $this;
    }

    public function getPurchaseCostCenterId(): string
    {
        return $this->purchaseCostCenterId;
    }

    public function setPurchaseCostCenterId(string $purchaseCostCenterId): self
    {
        $this->initialized['purchaseCostCenterId'] = true;
        $this->purchaseCostCenterId = $purchaseCostCenterId;

        return $this;
    }

    public function getSalesCostCenterId(): string
    {
        return $this->salesCostCenterId;
    }

    public function setSalesCostCenterId(string $salesCostCenterId): self
    {
        $this->initialized['salesCostCenterId'] = true;
        $this->salesCostCenterId = $salesCostCenterId;

        return $this;
    }
}
