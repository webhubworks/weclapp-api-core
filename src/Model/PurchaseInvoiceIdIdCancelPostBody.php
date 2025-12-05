<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseInvoiceIdIdCancelPostBody extends \ArrayObject
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
     * @var int|null
     */
    protected $cancellationDate;
    /**
     * 
     *
     * @return int|null
     */
    public function getCancellationDate(): ?int
    {
        return $this->cancellationDate;
    }
    /**
     * 
     *
     * @param int|null $cancellationDate
     *
     * @return self
     */
    public function setCancellationDate(?int $cancellationDate): self
    {
        $this->initialized['cancellationDate'] = true;
        $this->cancellationDate = $cancellationDate;
        return $this;
    }
}