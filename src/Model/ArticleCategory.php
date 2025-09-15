<?php

namespace Webhubworks\WeclappApiCore\Model;

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
    protected $articleAccountingCodeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleCategoryClassificationId;
    /**
     * 
     *
     * @var string|null
     */
    protected $costTypeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $imageId;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentCategoryId;
    /**
     * 
     *
     * @var string|null
     */
    protected $purchaseCostCenterId;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesCostCenterId;
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
    public function getArticleAccountingCodeId(): ?string
    {
        return $this->articleAccountingCodeId;
    }
    /**
     * 
     *
     * @param string|null $articleAccountingCodeId
     *
     * @return self
     */
    public function setArticleAccountingCodeId(?string $articleAccountingCodeId): self
    {
        $this->initialized['articleAccountingCodeId'] = true;
        $this->articleAccountingCodeId = $articleAccountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleCategoryClassificationId(): ?string
    {
        return $this->articleCategoryClassificationId;
    }
    /**
     * 
     *
     * @param string|null $articleCategoryClassificationId
     *
     * @return self
     */
    public function setArticleCategoryClassificationId(?string $articleCategoryClassificationId): self
    {
        $this->initialized['articleCategoryClassificationId'] = true;
        $this->articleCategoryClassificationId = $articleCategoryClassificationId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCostTypeId(): ?string
    {
        return $this->costTypeId;
    }
    /**
     * 
     *
     * @param string|null $costTypeId
     *
     * @return self
     */
    public function setCostTypeId(?string $costTypeId): self
    {
        $this->initialized['costTypeId'] = true;
        $this->costTypeId = $costTypeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getImageId(): ?string
    {
        return $this->imageId;
    }
    /**
     * 
     *
     * @param string|null $imageId
     *
     * @return self
     */
    public function setImageId(?string $imageId): self
    {
        $this->initialized['imageId'] = true;
        $this->imageId = $imageId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParentCategoryId(): ?string
    {
        return $this->parentCategoryId;
    }
    /**
     * 
     *
     * @param string|null $parentCategoryId
     *
     * @return self
     */
    public function setParentCategoryId(?string $parentCategoryId): self
    {
        $this->initialized['parentCategoryId'] = true;
        $this->parentCategoryId = $parentCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseCostCenterId(): ?string
    {
        return $this->purchaseCostCenterId;
    }
    /**
     * 
     *
     * @param string|null $purchaseCostCenterId
     *
     * @return self
     */
    public function setPurchaseCostCenterId(?string $purchaseCostCenterId): self
    {
        $this->initialized['purchaseCostCenterId'] = true;
        $this->purchaseCostCenterId = $purchaseCostCenterId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesCostCenterId(): ?string
    {
        return $this->salesCostCenterId;
    }
    /**
     * 
     *
     * @param string|null $salesCostCenterId
     *
     * @return self
     */
    public function setSalesCostCenterId(?string $salesCostCenterId): self
    {
        $this->initialized['salesCostCenterId'] = true;
        $this->salesCostCenterId = $salesCostCenterId;
        return $this;
    }
}