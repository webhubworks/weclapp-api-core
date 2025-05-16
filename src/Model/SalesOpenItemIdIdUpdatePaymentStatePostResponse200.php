<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOpenItemIdIdUpdatePaymentStatePostResponse200 extends \ArrayObject
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
     * @var SalesOpenItem
     */
    protected $result;
    /**
     * 
     *
     * @return SalesOpenItem
     */
    public function getResult(): SalesOpenItem
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param SalesOpenItem $result
     *
     * @return self
     */
    public function setResult(SalesOpenItem $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}