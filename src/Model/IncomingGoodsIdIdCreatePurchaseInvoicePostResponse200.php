<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoodsIdIdCreatePurchaseInvoicePostResponse200 extends \ArrayObject
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
     * @var PurchaseInvoice|null
     */
    protected $result;
    /**
     * 
     *
     * @return PurchaseInvoice|null
     */
    public function getResult(): ?PurchaseInvoice
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param PurchaseInvoice|null $result
     *
     * @return self
     */
    public function setResult(?PurchaseInvoice $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}