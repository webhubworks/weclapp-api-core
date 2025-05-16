<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationIdIdCreateNewVersionPostResponse200 extends \ArrayObject
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
     * @var Quotation
     */
    protected $result;
    /**
     * 
     *
     * @return Quotation
     */
    public function getResult(): Quotation
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Quotation $result
     *
     * @return self
     */
    public function setResult(Quotation $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}