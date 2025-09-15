<?php

namespace Webhubworks\WeclappApiCore\Model;

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
    protected $minimumOrderQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $minimumStockQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $targetStockQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $warehouseId;
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
    public function getMinimumOrderQuantity(): ?string
    {
        return $this->minimumOrderQuantity;
    }
    /**
     * 
     *
     * @param string|null $minimumOrderQuantity
     *
     * @return self
     */
    public function setMinimumOrderQuantity(?string $minimumOrderQuantity): self
    {
        $this->initialized['minimumOrderQuantity'] = true;
        $this->minimumOrderQuantity = $minimumOrderQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMinimumStockQuantity(): ?string
    {
        return $this->minimumStockQuantity;
    }
    /**
     * 
     *
     * @param string|null $minimumStockQuantity
     *
     * @return self
     */
    public function setMinimumStockQuantity(?string $minimumStockQuantity): self
    {
        $this->initialized['minimumStockQuantity'] = true;
        $this->minimumStockQuantity = $minimumStockQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTargetStockQuantity(): ?string
    {
        return $this->targetStockQuantity;
    }
    /**
     * 
     *
     * @param string|null $targetStockQuantity
     *
     * @return self
     */
    public function setTargetStockQuantity(?string $targetStockQuantity): self
    {
        $this->initialized['targetStockQuantity'] = true;
        $this->targetStockQuantity = $targetStockQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }
    /**
     * 
     *
     * @param string|null $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(?string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;
        return $this;
    }
}