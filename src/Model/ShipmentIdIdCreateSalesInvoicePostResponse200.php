<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShipmentIdIdCreateSalesInvoicePostResponse200 extends \ArrayObject
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
     * @var SalesInvoice
     */
    protected $result;
    /**
     * 
     *
     * @return SalesInvoice
     */
    public function getResult(): SalesInvoice
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param SalesInvoice $result
     *
     * @return self
     */
    public function setResult(SalesInvoice $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}