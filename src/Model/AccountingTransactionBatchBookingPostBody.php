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
     * @var AccountingTransactionBatchBookingPostBodyBatchBookingDto|null
     */
    protected $batchBookingDto;

    public function getBatchBookingDto(): ?AccountingTransactionBatchBookingPostBodyBatchBookingDto
    {
        return $this->batchBookingDto;
    }

    public function setBatchBookingDto(?AccountingTransactionBatchBookingPostBodyBatchBookingDto $batchBookingDto): self
    {
        $this->initialized['batchBookingDto'] = true;
        $this->batchBookingDto = $batchBookingDto;

        return $this;
    }
}
