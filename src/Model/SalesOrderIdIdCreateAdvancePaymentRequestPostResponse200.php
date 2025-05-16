<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdCreateAdvancePaymentRequestPostResponse200 extends \ArrayObject
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
     * @var SalesInvoice|null
     */
    protected $result;
    /**
     * 
     *
     * @return SalesInvoice|null
     */
    public function getResult(): ?SalesInvoice
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param SalesInvoice|null $result
     *
     * @return self
     */
    public function setResult(?SalesInvoice $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}