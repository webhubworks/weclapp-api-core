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
     * @var string|null
     */
    protected $purchaseOrderItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $quantity;
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseOrderItemId(): ?string
    {
        return $this->purchaseOrderItemId;
    }
    /**
     * 
     *
     * @param string|null $purchaseOrderItemId
     *
     * @return self
     */
    public function setPurchaseOrderItemId(?string $purchaseOrderItemId): self
    {
        $this->initialized['purchaseOrderItemId'] = true;
        $this->purchaseOrderItemId = $purchaseOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
}