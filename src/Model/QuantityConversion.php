<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuantityConversion extends \ArrayObject
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
    protected $conversionQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastEditedUserId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $oppositeDirection;
    /**
     * 
     *
     * @var string|null
     */
    protected $unitId;
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
    public function getConversionQuantity(): ?string
    {
        return $this->conversionQuantity;
    }
    /**
     * 
     *
     * @param string|null $conversionQuantity
     *
     * @return self
     */
    public function setConversionQuantity(?string $conversionQuantity): self
    {
        $this->initialized['conversionQuantity'] = true;
        $this->conversionQuantity = $conversionQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedUserId(): ?string
    {
        return $this->createdUserId;
    }
    /**
     * 
     *
     * @param string|null $createdUserId
     *
     * @return self
     */
    public function setCreatedUserId(?string $createdUserId): self
    {
        $this->initialized['createdUserId'] = true;
        $this->createdUserId = $createdUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastEditedUserId(): ?string
    {
        return $this->lastEditedUserId;
    }
    /**
     * 
     *
     * @param string|null $lastEditedUserId
     *
     * @return self
     */
    public function setLastEditedUserId(?string $lastEditedUserId): self
    {
        $this->initialized['lastEditedUserId'] = true;
        $this->lastEditedUserId = $lastEditedUserId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOppositeDirection(): ?bool
    {
        return $this->oppositeDirection;
    }
    /**
     * 
     *
     * @param bool|null $oppositeDirection
     *
     * @return self
     */
    public function setOppositeDirection(?bool $oppositeDirection): self
    {
        $this->initialized['oppositeDirection'] = true;
        $this->oppositeDirection = $oppositeDirection;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUnitId(): ?string
    {
        return $this->unitId;
    }
    /**
     * 
     *
     * @param string|null $unitId
     *
     * @return self
     */
    public function setUnitId(?string $unitId): self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;
        return $this;
    }
}