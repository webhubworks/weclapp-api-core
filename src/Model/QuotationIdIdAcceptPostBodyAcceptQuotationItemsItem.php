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
     * @var string|null
     */
    protected $quantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $quotationItemId;
    /**
     * 
     *
     * @return string|null
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuotationItemId(): ?string
    {
        return $this->quotationItemId;
    }
    /**
     * 
     *
     * @param string|null $quotationItemId
     *
     * @return self
     */
    public function setQuotationItemId(?string $quotationItemId): self
    {
        $this->initialized['quotationItemId'] = true;
        $this->quotationItemId = $quotationItemId;
        return $this;
    }
}