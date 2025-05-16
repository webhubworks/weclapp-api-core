<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseInvoiceIdIdCreateContractPostResponse200 extends \ArrayObject
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
     * @var Contract
     */
    protected $result;
    /**
     * 
     *
     * @return Contract
     */
    public function getResult(): Contract
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Contract $result
     *
     * @return self
     */
    public function setResult(Contract $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}