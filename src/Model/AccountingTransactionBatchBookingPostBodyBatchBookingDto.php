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
     * 
     *
     * @var list<BatchBookingRecord>
     */
    protected $batchBookingRecords;
    /**
     * 
     *
     * @var string
     */
    protected $bookingText;
    /**
     * 
     *
     * @var string
     */
    protected $costCenterId;
    /**
     * 
     *
     * @var string
     */
    protected $currencyId;
    /**
     * 
     *
     * @var string
     */
    protected $externalRecordNumber;
    /**
     * 
     *
     * @var int
     */
    protected $transactionDate;
    /**
     * 
     *
     * @return list<BatchBookingRecord>
     */
    public function getBatchBookingRecords(): array
    {
        return $this->batchBookingRecords;
    }
    /**
     * 
     *
     * @param list<BatchBookingRecord> $batchBookingRecords
     *
     * @return self
     */
    public function setBatchBookingRecords(array $batchBookingRecords): self
    {
        $this->initialized['batchBookingRecords'] = true;
        $this->batchBookingRecords = $batchBookingRecords;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBookingText(): string
    {
        return $this->bookingText;
    }
    /**
     * 
     *
     * @param string $bookingText
     *
     * @return self
     */
    public function setBookingText(string $bookingText): self
    {
        $this->initialized['bookingText'] = true;
        $this->bookingText = $bookingText;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCostCenterId(): string
    {
        return $this->costCenterId;
    }
    /**
     * 
     *
     * @param string $costCenterId
     *
     * @return self
     */
    public function setCostCenterId(string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }
    /**
     * 
     *
     * @param string $currencyId
     *
     * @return self
     */
    public function setCurrencyId(string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExternalRecordNumber(): string
    {
        return $this->externalRecordNumber;
    }
    /**
     * 
     *
     * @param string $externalRecordNumber
     *
     * @return self
     */
    public function setExternalRecordNumber(string $externalRecordNumber): self
    {
        $this->initialized['externalRecordNumber'] = true;
        $this->externalRecordNumber = $externalRecordNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTransactionDate(): int
    {
        return $this->transactionDate;
    }
    /**
     * 
     *
     * @param int $transactionDate
     *
     * @return self
     */
    public function setTransactionDate(int $transactionDate): self
    {
        $this->initialized['transactionDate'] = true;
        $this->transactionDate = $transactionDate;
        return $this;
    }
}