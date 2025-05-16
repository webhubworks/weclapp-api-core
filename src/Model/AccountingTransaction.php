<?php

namespace Webhubworks\WeclappApiCore\Model;

class AccountingTransaction extends \ArrayObject
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
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @var int
     */
    protected $accountingImportDate;
    /**
     * 
     *
     * @var string
     */
    protected $conversionRate;
    /**
     * 
     *
     * @var int
     */
    protected $conversionRateDate;
    /**
     * 
     *
     * @var string
     */
    protected $currencyId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $currencyName;
    /**
     * 
     *
     * @var bool
     */
    protected $draft;
    /**
     * 
     *
     * @var string
     */
    protected $externalRecordNumber;
    /**
     * 
     *
     * @var string
     */
    protected $internalRecordNumber;
    /**
     * 
     *
     * @var bool
     */
    protected $reverseTransaction;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $transactionDate;
    /**
     * 
     *
     * @var list<AccountingTransactionDetail>
     */
    protected $transactionDetails;
    /**
     * 
     *
     * @var int
     */
    protected $transactionEstablishDate;
    /**
     * 
     *
     * @var string
     */
    protected $transactionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAccountingImportDate(): int
    {
        return $this->accountingImportDate;
    }
    /**
     * 
     *
     * @param int $accountingImportDate
     *
     * @return self
     */
    public function setAccountingImportDate(int $accountingImportDate): self
    {
        $this->initialized['accountingImportDate'] = true;
        $this->accountingImportDate = $accountingImportDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConversionRate(): string
    {
        return $this->conversionRate;
    }
    /**
     * 
     *
     * @param string $conversionRate
     *
     * @return self
     */
    public function setConversionRate(string $conversionRate): self
    {
        $this->initialized['conversionRate'] = true;
        $this->conversionRate = $conversionRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConversionRateDate(): int
    {
        return $this->conversionRateDate;
    }
    /**
     * 
     *
     * @param int $conversionRateDate
     *
     * @return self
     */
    public function setConversionRateDate(int $conversionRateDate): self
    {
        $this->initialized['conversionRateDate'] = true;
        $this->conversionRateDate = $conversionRateDate;
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
     * @deprecated
     *
     * @return string
     */
    public function getCurrencyName(): string
    {
        return $this->currencyName;
    }
    /**
     * 
     *
     * @param string $currencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCurrencyName(string $currencyName): self
    {
        $this->initialized['currencyName'] = true;
        $this->currencyName = $currencyName;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDraft(): bool
    {
        return $this->draft;
    }
    /**
     * 
     *
     * @param bool $draft
     *
     * @return self
     */
    public function setDraft(bool $draft): self
    {
        $this->initialized['draft'] = true;
        $this->draft = $draft;
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
     * @return string
     */
    public function getInternalRecordNumber(): string
    {
        return $this->internalRecordNumber;
    }
    /**
     * 
     *
     * @param string $internalRecordNumber
     *
     * @return self
     */
    public function setInternalRecordNumber(string $internalRecordNumber): self
    {
        $this->initialized['internalRecordNumber'] = true;
        $this->internalRecordNumber = $internalRecordNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getReverseTransaction(): bool
    {
        return $this->reverseTransaction;
    }
    /**
     * 
     *
     * @param bool $reverseTransaction
     *
     * @return self
     */
    public function setReverseTransaction(bool $reverseTransaction): self
    {
        $this->initialized['reverseTransaction'] = true;
        $this->reverseTransaction = $reverseTransaction;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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
    /**
     * 
     *
     * @return list<AccountingTransactionDetail>
     */
    public function getTransactionDetails(): array
    {
        return $this->transactionDetails;
    }
    /**
     * 
     *
     * @param list<AccountingTransactionDetail> $transactionDetails
     *
     * @return self
     */
    public function setTransactionDetails(array $transactionDetails): self
    {
        $this->initialized['transactionDetails'] = true;
        $this->transactionDetails = $transactionDetails;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTransactionEstablishDate(): int
    {
        return $this->transactionEstablishDate;
    }
    /**
     * 
     *
     * @param int $transactionEstablishDate
     *
     * @return self
     */
    public function setTransactionEstablishDate(int $transactionEstablishDate): self
    {
        $this->initialized['transactionEstablishDate'] = true;
        $this->transactionEstablishDate = $transactionEstablishDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransactionNumber(): string
    {
        return $this->transactionNumber;
    }
    /**
     * 
     *
     * @param string $transactionNumber
     *
     * @return self
     */
    public function setTransactionNumber(string $transactionNumber): self
    {
        $this->initialized['transactionNumber'] = true;
        $this->transactionNumber = $transactionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}