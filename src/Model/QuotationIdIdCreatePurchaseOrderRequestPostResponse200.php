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
     * @var PurchaseOrderRequest|null
     */
    protected $result;

    public function getResult(): ?PurchaseOrderRequest
    {
        return $this->result;
    }

    public function setResult(?PurchaseOrderRequest $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
