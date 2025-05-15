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
    protected $articleAccountingCodeId;
    /**
     * 
     *
     * @var string
     */
    protected $articleCategoryClassificationId;
    /**
     * 
     *
     * @var string
     */
    protected $costTypeId;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $imageId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $parentCategoryId;
    /**
     * 
     *
     * @var string
     */
    protected $purchaseCostCenterId;
    /**
     * 
     *
     * @var string
     */
    protected $salesCostCenterId;
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
    public function getArticleAccountingCodeId(): string
    {
        return $this->articleAccountingCodeId;
    }
    /**
     * 
     *
     * @param string $articleAccountingCodeId
     *
     * @return self
     */
    public function setArticleAccountingCodeId(string $articleAccountingCodeId): self
    {
        $this->initialized['articleAccountingCodeId'] = true;
        $this->articleAccountingCodeId = $articleAccountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArticleCategoryClassificationId(): string
    {
        return $this->articleCategoryClassificationId;
    }
    /**
     * 
     *
     * @param string $articleCategoryClassificationId
     *
     * @return self
     */
    public function setArticleCategoryClassificationId(string $articleCategoryClassificationId): self
    {
        $this->initialized['articleCategoryClassificationId'] = true;
        $this->articleCategoryClassificationId = $articleCategoryClassificationId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCostTypeId(): string
    {
        return $this->costTypeId;
    }
    /**
     * 
     *
     * @param string $costTypeId
     *
     * @return self
     */
    public function setCostTypeId(string $costTypeId): self
    {
        $this->initialized['costTypeId'] = true;
        $this->costTypeId = $costTypeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImageId(): string
    {
        return $this->imageId;
    }
    /**
     * 
     *
     * @param string $imageId
     *
     * @return self
     */
    public function setImageId(string $imageId): self
    {
        $this->initialized['imageId'] = true;
        $this->imageId = $imageId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getParentCategoryId(): string
    {
        return $this->parentCategoryId;
    }
    /**
     * 
     *
     * @param string $parentCategoryId
     *
     * @return self
     */
    public function setParentCategoryId(string $parentCategoryId): self
    {
        $this->initialized['parentCategoryId'] = true;
        $this->parentCategoryId = $parentCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseCostCenterId(): string
    {
        return $this->purchaseCostCenterId;
    }
    /**
     * 
     *
     * @param string $purchaseCostCenterId
     *
     * @return self
     */
    public function setPurchaseCostCenterId(string $purchaseCostCenterId): self
    {
        $this->initialized['purchaseCostCenterId'] = true;
        $this->purchaseCostCenterId = $purchaseCostCenterId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesCostCenterId(): string
    {
        return $this->salesCostCenterId;
    }
    /**
     * 
     *
     * @param string $salesCostCenterId
     *
     * @return self
     */
    public function setSalesCostCenterId(string $salesCostCenterId): self
    {
        $this->initialized['salesCostCenterId'] = true;
        $this->salesCostCenterId = $salesCostCenterId;
        return $this;
    }
}