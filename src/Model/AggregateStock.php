<?php

namespace Webhubworks\WeclappApiCore\Model;

class AggregateStock extends \ArrayObject
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
    protected $articleId;

    /**
     * @var list<AggregatePackagingUnit>
     */
    protected $packagingUnits;

    /**
     * @var string
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $salesOrderItemId;

    /**
     * @var string
     */
    protected $warehouseId;

    public function getArticleId(): string
    {
        return $this->articleId;
    }

    public function setArticleId(string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @return list<AggregatePackagingUnit>
     */
    public function getPackagingUnits(): array
    {
        return $this->packagingUnits;
    }

    /**
     * @param  list<AggregatePackagingUnit>  $packagingUnits
     */
    public function setPackagingUnits(array $packagingUnits): self
    {
        $this->initialized['packagingUnits'] = true;
        $this->packagingUnits = $packagingUnits;

        return $this;
    }

    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getSalesOrderItemId(): string
    {
        return $this->salesOrderItemId;
    }

    public function setSalesOrderItemId(string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;

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
}
