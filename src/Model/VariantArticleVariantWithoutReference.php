<?php

namespace Webhubworks\WeclappApiCore\Model;

class VariantArticleVariantWithoutReference extends \ArrayObject
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
    protected $articleId;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $attributeOptions;
    /**
     * 
     *
     * @var int|null
     */
    protected $positionNumber;
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
     * @return list<OnlyId>|null
     */
    public function getAttributeOptions(): ?array
    {
        return $this->attributeOptions;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $attributeOptions
     *
     * @return self
     */
    public function setAttributeOptions(?array $attributeOptions): self
    {
        $this->initialized['attributeOptions'] = true;
        $this->attributeOptions = $attributeOptions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int|null $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
}