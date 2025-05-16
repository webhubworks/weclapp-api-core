<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOpenItemIdIdCreatePaymentApplicationPostResponse200 extends \ArrayObject
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
     * @var SalesOpenItem|null
     */
    protected $result;
    /**
     * 
     *
     * @return SalesOpenItem|null
     */
    public function getResult(): ?SalesOpenItem
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param SalesOpenItem|null $result
     *
     * @return self
     */
    public function setResult(?SalesOpenItem $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}