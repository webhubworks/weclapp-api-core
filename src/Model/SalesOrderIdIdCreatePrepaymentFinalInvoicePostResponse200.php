<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdCreatePrepaymentFinalInvoicePostResponse200 extends \ArrayObject
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
     * @var SalesInvoice|null
     */
    protected $result;

    public function getResult(): ?SalesInvoice
    {
        return $this->result;
    }

    public function setResult(?SalesInvoice $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
