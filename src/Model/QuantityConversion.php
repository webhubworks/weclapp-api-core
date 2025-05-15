<?php

namespace Webhub\Weclapp\Model;

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
    protected $conversionQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $createdUserId;
    /**
     * 
     *
     * @var string
     */
    protected $lastEditedUserId;
    /**
     * 
     *
     * @var bool
     */
    protected $oppositeDirection;
    /**
     * 
     *
     * @var string
     */
    protected $unitId;
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
    public function getConversionQuantity(): string
    {
        return $this->conversionQuantity;
    }
    /**
     * 
     *
     * @param string $conversionQuantity
     *
     * @return self
     */
    public function setConversionQuantity(string $conversionQuantity): self
    {
        $this->initialized['conversionQuantity'] = true;
        $this->conversionQuantity = $conversionQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedUserId(): string
    {
        return $this->createdUserId;
    }
    /**
     * 
     *
     * @param string $createdUserId
     *
     * @return self
     */
    public function setCreatedUserId(string $createdUserId): self
    {
        $this->initialized['createdUserId'] = true;
        $this->createdUserId = $createdUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastEditedUserId(): string
    {
        return $this->lastEditedUserId;
    }
    /**
     * 
     *
     * @param string $lastEditedUserId
     *
     * @return self
     */
    public function setLastEditedUserId(string $lastEditedUserId): self
    {
        $this->initialized['lastEditedUserId'] = true;
        $this->lastEditedUserId = $lastEditedUserId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOppositeDirection(): bool
    {
        return $this->oppositeDirection;
    }
    /**
     * 
     *
     * @param bool $oppositeDirection
     *
     * @return self
     */
    public function setOppositeDirection(bool $oppositeDirection): self
    {
        $this->initialized['oppositeDirection'] = true;
        $this->oppositeDirection = $oppositeDirection;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUnitId(): string
    {
        return $this->unitId;
    }
    /**
     * 
     *
     * @param string $unitId
     *
     * @return self
     */
    public function setUnitId(string $unitId): self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;
        return $this;
    }
}