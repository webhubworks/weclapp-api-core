<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseInvoiceIdIdConvertPurchaseInvoiceToCreditNotePostBody extends \ArrayObject
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
     * @var bool|null
     */
    protected $reverseSignsOfPrices;
    /**
     * 
     *
     * @return bool|null
     */
    public function getReverseSignsOfPrices(): ?bool
    {
        return $this->reverseSignsOfPrices;
    }
    /**
     * 
     *
     * @param bool|null $reverseSignsOfPrices
     *
     * @return self
     */
    public function setReverseSignsOfPrices(?bool $reverseSignsOfPrices): self
    {
        $this->initialized['reverseSignsOfPrices'] = true;
        $this->reverseSignsOfPrices = $reverseSignsOfPrices;
        return $this;
    }
}