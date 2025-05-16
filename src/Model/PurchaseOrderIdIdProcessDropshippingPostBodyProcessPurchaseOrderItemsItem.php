<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderIdIdProcessDropshippingPostBodyProcessPurchaseOrderItemsItem extends \ArrayObject
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
    protected $purchaseOrderItemId;
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseOrderItemId(): string
    {
        return $this->purchaseOrderItemId;
    }
    /**
     * 
     *
     * @param string $purchaseOrderItemId
     *
     * @return self
     */
    public function setPurchaseOrderItemId(string $purchaseOrderItemId): self
    {
        $this->initialized['purchaseOrderItemId'] = true;
        $this->purchaseOrderItemId = $purchaseOrderItemId;
        return $this;
    }
}