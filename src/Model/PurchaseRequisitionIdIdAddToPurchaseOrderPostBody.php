<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseRequisitionIdIdAddToPurchaseOrderPostBody extends \ArrayObject
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
    protected $purchaseOrderId;
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseOrderId(): ?string
    {
        return $this->purchaseOrderId;
    }
    /**
     * 
     *
     * @param string|null $purchaseOrderId
     *
     * @return self
     */
    public function setPurchaseOrderId(?string $purchaseOrderId): self
    {
        $this->initialized['purchaseOrderId'] = true;
        $this->purchaseOrderId = $purchaseOrderId;
        return $this;
    }
}