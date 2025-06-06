<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdCreateProductionOrdersPostBody extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $orderItemIds;

    /**
     * @return list<string>|null
     */
    public function getOrderItemIds(): ?array
    {
        return $this->orderItemIds;
    }

    /**
     * @param  list<string>|null  $orderItemIds
     */
    public function setOrderItemIds(?array $orderItemIds): self
    {
        $this->initialized['orderItemIds'] = true;
        $this->orderItemIds = $orderItemIds;

        return $this;
    }
}
