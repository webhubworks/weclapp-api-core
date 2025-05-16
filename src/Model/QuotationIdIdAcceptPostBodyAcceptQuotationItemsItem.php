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
     * @var string|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $quotationItemId;

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getQuotationItemId(): ?string
    {
        return $this->quotationItemId;
    }

    public function setQuotationItemId(?string $quotationItemId): self
    {
        $this->initialized['quotationItemId'] = true;
        $this->quotationItemId = $quotationItemId;

        return $this;
    }
}
