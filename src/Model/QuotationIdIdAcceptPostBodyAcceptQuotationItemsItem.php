<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationIdIdAcceptPostBodyAcceptQuotationItemsItem extends \ArrayObject
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
    protected $quantity;
    /**
     * 
     *
     * @var string
     */
    protected $quotationItemId;
    /**
     * 
     *
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuotationItemId(): string
    {
        return $this->quotationItemId;
    }
    /**
     * 
     *
     * @param string $quotationItemId
     *
     * @return self
     */
    public function setQuotationItemId(string $quotationItemId): self
    {
        $this->initialized['quotationItemId'] = true;
        $this->quotationItemId = $quotationItemId;
        return $this;
    }
}