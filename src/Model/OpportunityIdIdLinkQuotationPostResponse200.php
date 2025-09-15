<?php

namespace Webhubworks\WeclappApiCore\Model;

class OpportunityIdIdLinkQuotationPostResponse200 extends \ArrayObject
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
     * @var Opportunity|null
     */
    protected $result;
    /**
     * 
     *
     * @return Opportunity|null
     */
    public function getResult(): ?Opportunity
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Opportunity|null $result
     *
     * @return self
     */
    public function setResult(?Opportunity $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}