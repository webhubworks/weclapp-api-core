<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationIdIdCreatePurchaseOrderRequestPostResponse200 extends \ArrayObject
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
     * @var PurchaseOrderRequest
     */
    protected $result;
    /**
     * 
     *
     * @return PurchaseOrderRequest
     */
    public function getResult(): PurchaseOrderRequest
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param PurchaseOrderRequest $result
     *
     * @return self
     */
    public function setResult(PurchaseOrderRequest $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}