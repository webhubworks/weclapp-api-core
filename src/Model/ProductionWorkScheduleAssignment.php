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
     * @var list<mixed>
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var bool
     */
    protected $alternative;
    /**
     * 
     *
     * @var string
     */
    protected $articleId;
    /**
     * 
     *
     * @var string
     */
    protected $productionWorkScheduleId;
    /**
     * 
     *
     * @var int
     */
    protected $validFrom;
    /**
     * 
     *
     * @var int
     */
    protected $validTo;
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
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed> $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAlternative(): bool
    {
        return $this->alternative;
    }
    /**
     * 
     *
     * @param bool $alternative
     *
     * @return self
     */
    public function setAlternative(bool $alternative): self
    {
        $this->initialized['alternative'] = true;
        $this->alternative = $alternative;
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
     * @return string
     */
    public function getProductionWorkScheduleId(): string
    {
        return $this->productionWorkScheduleId;
    }
    /**
     * 
     *
     * @param string $productionWorkScheduleId
     *
     * @return self
     */
    public function setProductionWorkScheduleId(string $productionWorkScheduleId): self
    {
        $this->initialized['productionWorkScheduleId'] = true;
        $this->productionWorkScheduleId = $productionWorkScheduleId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValidFrom(): int
    {
        return $this->validFrom;
    }
    /**
     * 
     *
     * @param int $validFrom
     *
     * @return self
     */
    public function setValidFrom(int $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValidTo(): int
    {
        return $this->validTo;
    }
    /**
     * 
     *
     * @param int $validTo
     *
     * @return self
     */
    public function setValidTo(int $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;
        return $this;
    }
}