<?php

namespace Webhubworks\WeclappApiCore\Model;

class AccountingTransactionBatchBookingPostBody extends \ArrayObject
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
     * @var AccountingTransactionBatchBookingPostBodyBatchBooking|null
     */
    protected $batchBooking;
    /**
     * 
     *
     * @return AccountingTransactionBatchBookingPostBodyBatchBooking|null
     */
    public function getBatchBooking(): ?AccountingTransactionBatchBookingPostBodyBatchBooking
    {
        return $this->batchBooking;
    }
    /**
     * 
     *
     * @param AccountingTransactionBatchBookingPostBodyBatchBooking|null $batchBooking
     *
     * @return self
     */
    public function setBatchBooking(?AccountingTransactionBatchBookingPostBodyBatchBooking $batchBooking): self
    {
        $this->initialized['batchBooking'] = true;
        $this->batchBooking = $batchBooking;
        return $this;
    }
}