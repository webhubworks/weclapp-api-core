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
    protected $conversionQuantity;

    /**
     * @var string
     */
    protected $createdUserId;

    /**
     * @var string
     */
    protected $lastEditedUserId;

    /**
     * @var bool
     */
    protected $oppositeDirection;

    /**
     * @var string
     */
    protected $unitId;

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

    public function getConversionQuantity(): string
    {
        return $this->conversionQuantity;
    }

    public function setConversionQuantity(string $conversionQuantity): self
    {
        $this->initialized['conversionQuantity'] = true;
        $this->conversionQuantity = $conversionQuantity;

        return $this;
    }

    public function getCreatedUserId(): string
    {
        return $this->createdUserId;
    }

    public function setCreatedUserId(string $createdUserId): self
    {
        $this->initialized['createdUserId'] = true;
        $this->createdUserId = $createdUserId;

        return $this;
    }

    public function getLastEditedUserId(): string
    {
        return $this->lastEditedUserId;
    }

    public function setLastEditedUserId(string $lastEditedUserId): self
    {
        $this->initialized['lastEditedUserId'] = true;
        $this->lastEditedUserId = $lastEditedUserId;

        return $this;
    }

    public function getOppositeDirection(): bool
    {
        return $this->oppositeDirection;
    }

    public function setOppositeDirection(bool $oppositeDirection): self
    {
        $this->initialized['oppositeDirection'] = true;
        $this->oppositeDirection = $oppositeDirection;

        return $this;
    }

    public function getUnitId(): string
    {
        return $this->unitId;
    }

    public function setUnitId(string $unitId): self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;

        return $this;
    }
}
