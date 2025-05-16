<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdCreateDropshippingPostBody extends \ArrayObject
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
     * @var list<string>
     */
    protected $orderItemIds;

    /**
     * @var string
     */
    protected $supplierId;

    /**
     * @return list<string>
     */
    public function getOrderItemIds(): array
    {
        return $this->orderItemIds;
    }

    /**
     * @param  list<string>  $orderItemIds
     */
    public function setOrderItemIds(array $orderItemIds): self
    {
        $this->initialized['orderItemIds'] = true;
        $this->orderItemIds = $orderItemIds;

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
}
