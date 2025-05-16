<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderIdIdCancelDropshippingShipmentsPostResponse200 extends \ArrayObject
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
     * @var PurchaseOrder|null
     */
    protected $result;
    /**
     * 
     *
     * @return PurchaseOrder|null
     */
    public function getResult(): ?PurchaseOrder
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param PurchaseOrder|null $result
     *
     * @return self
     */
    public function setResult(?PurchaseOrder $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}