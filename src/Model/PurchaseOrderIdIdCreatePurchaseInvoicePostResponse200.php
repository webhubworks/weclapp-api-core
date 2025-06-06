<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderIdIdCreatePurchaseInvoicePostResponse200 extends \ArrayObject
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
     * @var PurchaseInvoice|null
     */
    protected $result;

    public function getResult(): ?PurchaseInvoice
    {
        return $this->result;
    }

    public function setResult(?PurchaseInvoice $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
