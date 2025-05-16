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
     * @var AccountingTransactionBatchBookingPostBodyBatchBookingDto
     */
    protected $batchBookingDto;
    /**
     * 
     *
     * @return AccountingTransactionBatchBookingPostBodyBatchBookingDto
     */
    public function getBatchBookingDto(): AccountingTransactionBatchBookingPostBodyBatchBookingDto
    {
        return $this->batchBookingDto;
    }
    /**
     * 
     *
     * @param AccountingTransactionBatchBookingPostBodyBatchBookingDto $batchBookingDto
     *
     * @return self
     */
    public function setBatchBookingDto(AccountingTransactionBatchBookingPostBodyBatchBookingDto $batchBookingDto): self
    {
        $this->initialized['batchBookingDto'] = true;
        $this->batchBookingDto = $batchBookingDto;
        return $this;
    }
}