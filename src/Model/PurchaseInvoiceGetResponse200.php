<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseInvoiceGetResponse200 extends \ArrayObject
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
     * @var list<PurchaseInvoice>
     */
    protected $result;
    /**
     * 
     *
     * @return list<PurchaseInvoice>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<PurchaseInvoice> $result
     *
     * @return self
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}