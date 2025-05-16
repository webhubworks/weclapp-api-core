<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationIdIdAcceptPostResponse200 extends \ArrayObject
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
     * @var Quotation|null
     */
    protected $result;
    /**
     * 
     *
     * @return Quotation|null
     */
    public function getResult(): ?Quotation
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Quotation|null $result
     *
     * @return self
     */
    public function setResult(?Quotation $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}