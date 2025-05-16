<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesInvoiceGetResponse200 extends \ArrayObject
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
     * @var list<SalesInvoice>
     */
    protected $result;

    /**
     * @return list<SalesInvoice>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<SalesInvoice>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
