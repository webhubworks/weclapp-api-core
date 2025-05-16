<?php

namespace Webhubworks\WeclappApiCore\Model;

class AccountingTransactionBatchBookingPostBodyBatchBookingDto extends \ArrayObject
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
     * @var list<BatchBookingRecord>|null
     */
    protected $batchBookingRecords;

    /**
     * @var string|null
     */
    protected $bookingText;

    /**
     * @var string|null
     */
    protected $costCenterId;

    /**
     * @var string|null
     */
    protected $currencyId;

    /**
     * @var string|null
     */
    protected $externalRecordNumber;

    /**
     * @var int|null
     */
    protected $transactionDate;

    /**
     * @return list<BatchBookingRecord>|null
     */
    public function getBatchBookingRecords(): ?array
    {
        return $this->batchBookingRecords;
    }

    /**
     * @param  list<BatchBookingRecord>|null  $batchBookingRecords
     */
    public function setBatchBookingRecords(?array $batchBookingRecords): self
    {
        $this->initialized['batchBookingRecords'] = true;
        $this->batchBookingRecords = $batchBookingRecords;

        return $this;
    }

    public function getBookingText(): ?string
    {
        return $this->bookingText;
    }

    public function setBookingText(?string $bookingText): self
    {
        $this->initialized['bookingText'] = true;
        $this->bookingText = $bookingText;

        return $this;
    }

    public function getCostCenterId(): ?string
    {
        return $this->costCenterId;
    }

    public function setCostCenterId(?string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;

        return $this;
    }

    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(?string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;

        return $this;
    }

    public function getExternalRecordNumber(): ?string
    {
        return $this->externalRecordNumber;
    }

    public function setExternalRecordNumber(?string $externalRecordNumber): self
    {
        $this->initialized['externalRecordNumber'] = true;
        $this->externalRecordNumber = $externalRecordNumber;

        return $this;
    }

    public function getTransactionDate(): ?int
    {
        return $this->transactionDate;
    }

    public function setTransactionDate(?int $transactionDate): self
    {
        $this->initialized['transactionDate'] = true;
        $this->transactionDate = $transactionDate;

        return $this;
    }
}
