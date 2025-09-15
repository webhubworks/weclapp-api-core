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
     * @var string|null
     */
    protected $quotationId;
    /**
     * 
     *
     * @return string|null
     */
    public function getQuotationId(): ?string
    {
        return $this->quotationId;
    }
    /**
     * 
     *
     * @param string|null $quotationId
     *
     * @return self
     */
    public function setQuotationId(?string $quotationId): self
    {
        $this->initialized['quotationId'] = true;
        $this->quotationId = $quotationId;
        return $this;
    }
}