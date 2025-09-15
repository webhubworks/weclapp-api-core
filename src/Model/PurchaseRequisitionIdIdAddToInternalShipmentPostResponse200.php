<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseRequisitionIdIdAddToInternalShipmentPostResponse200 extends \ArrayObject
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
     * @var PurchaseRequisition|null
     */
    protected $result;
    /**
     * 
     *
     * @return PurchaseRequisition|null
     */
    public function getResult(): ?PurchaseRequisition
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param PurchaseRequisition|null $result
     *
     * @return self
     */
    public function setResult(?PurchaseRequisition $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}