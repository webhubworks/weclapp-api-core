<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdCreatePurchaseOrderPostBody extends \ArrayObject
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
     * @var bool
     */
    protected $multiplePurchaseOrders;

    /**
     * @var string
     */
    protected $supplierId;

    /**
     * @var string
     */
    protected $warehouseId;

    public function getMultiplePurchaseOrders(): bool
    {
        return $this->multiplePurchaseOrders;
    }

    public function setMultiplePurchaseOrders(bool $multiplePurchaseOrders): self
    {
        $this->initialized['multiplePurchaseOrders'] = true;
        $this->multiplePurchaseOrders = $multiplePurchaseOrders;

        return $this;
    }

    public function getSupplierId(): string
    {
        return $this->supplierId;
    }

    public function setSupplierId(string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;

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
