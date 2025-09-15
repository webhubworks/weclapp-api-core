<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionWorkScheduleAssignment extends \ArrayObject
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
     * @var list<mixed>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var bool|null
     */
    protected $alternative;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $productionWorkScheduleId;
    /**
     * 
     *
     * @var int|null
     */
    protected $validFrom;
    /**
     * 
     *
     * @var int|null
     */
    protected $validTo;
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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed>|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAlternative(): ?bool
    {
        return $this->alternative;
    }
    /**
     * 
     *
     * @param bool|null $alternative
     *
     * @return self
     */
    public function setAlternative(?bool $alternative): self
    {
        $this->initialized['alternative'] = true;
        $this->alternative = $alternative;
        return $this;
    }
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
     * @return string|null
     */
    public function getProductionWorkScheduleId(): ?string
    {
        return $this->productionWorkScheduleId;
    }
    /**
     * 
     *
     * @param string|null $productionWorkScheduleId
     *
     * @return self
     */
    public function setProductionWorkScheduleId(?string $productionWorkScheduleId): self
    {
        $this->initialized['productionWorkScheduleId'] = true;
        $this->productionWorkScheduleId = $productionWorkScheduleId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getValidFrom(): ?int
    {
        return $this->validFrom;
    }
    /**
     * 
     *
     * @param int|null $validFrom
     *
     * @return self
     */
    public function setValidFrom(?int $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getValidTo(): ?int
    {
        return $this->validTo;
    }
    /**
     * 
     *
     * @param int|null $validTo
     *
     * @return self
     */
    public function setValidTo(?int $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;
        return $this;
    }
}