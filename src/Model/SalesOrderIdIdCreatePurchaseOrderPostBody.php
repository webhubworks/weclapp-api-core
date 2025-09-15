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
     * 
     *
     * @var bool|null
     */
    protected $multiplePurchaseOrders;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierId;
    /**
     * 
     *
     * @var string|null
     */
    protected $warehouseId;
    /**
     * 
     *
     * @return bool|null
     */
    public function getMultiplePurchaseOrders(): ?bool
    {
        return $this->multiplePurchaseOrders;
    }
    /**
     * 
     *
     * @param bool|null $multiplePurchaseOrders
     *
     * @return self
     */
    public function setMultiplePurchaseOrders(?bool $multiplePurchaseOrders): self
    {
        $this->initialized['multiplePurchaseOrders'] = true;
        $this->multiplePurchaseOrders = $multiplePurchaseOrders;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * 
     *
     * @param string|null $supplierId
     *
     * @return self
     */
    public function setSupplierId(?string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;
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