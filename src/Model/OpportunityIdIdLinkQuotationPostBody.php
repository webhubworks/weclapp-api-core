<?php

namespace Webhubworks\WeclappApiCore\Model;

class OpportunityIdIdLinkQuotationPostBody extends \ArrayObject
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
     * @var string
     */
    protected $quotationId;
    /**
     * 
     *
     * @return string
     */
    public function getQuotationId(): string
    {
        return $this->quotationId;
    }
    /**
     * 
     *
     * @param string $quotationId
     *
     * @return self
     */
    public function setQuotationId(string $quotationId): self
    {
        $this->initialized['quotationId'] = true;
        $this->quotationId = $quotationId;
        return $this;
    }
}