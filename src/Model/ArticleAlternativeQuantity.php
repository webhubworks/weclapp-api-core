<?php

namespace Webhub\Weclapp\Model;

class ArticleAlternativeQuantity extends \ArrayObject
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
    protected $minimumOrderQuantity;

    /**
     * @var string
     */
    protected $minimumStockQuantity;

    /**
     * @var string
     */
    protected $targetStockQuantity;

    /**
     * @var string
     */
    protected $warehouseId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $warehouseName;

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

    public function getMinimumOrderQuantity(): string
    {
        return $this->minimumOrderQuantity;
    }

    public function setMinimumOrderQuantity(string $minimumOrderQuantity): self
    {
        $this->initialized['minimumOrderQuantity'] = true;
        $this->minimumOrderQuantity = $minimumOrderQuantity;

        return $this;
    }

    public function getMinimumStockQuantity(): string
    {
        return $this->minimumStockQuantity;
    }

    public function setMinimumStockQuantity(string $minimumStockQuantity): self
    {
        $this->initialized['minimumStockQuantity'] = true;
        $this->minimumStockQuantity = $minimumStockQuantity;

        return $this;
    }

    public function getTargetStockQuantity(): string
    {
        return $this->targetStockQuantity;
    }

    public function setTargetStockQuantity(string $targetStockQuantity): self
    {
        $this->initialized['targetStockQuantity'] = true;
        $this->targetStockQuantity = $targetStockQuantity;

        return $this;
    }

    public function getWarehouseId(): string
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getWarehouseName(): string
    {
        return $this->warehouseName;
    }

    /**
     * @deprecated
     */
    public function setWarehouseName(string $warehouseName): self
    {
        $this->initialized['warehouseName'] = true;
        $this->warehouseName = $warehouseName;

        return $this;
    }
}
