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
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var int
     */
    protected $accountingImportDate;

    /**
     * @var string
     */
    protected $conversionRate;

    /**
     * @var int
     */
    protected $conversionRateDate;

    /**
     * @var string
     */
    protected $currencyId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $currencyName;

    /**
     * @var bool
     */
    protected $draft;

    /**
     * @var string
     */
    protected $externalRecordNumber;

    /**
     * @var string
     */
    protected $internalRecordNumber;

    /**
     * @var bool
     */
    protected $reverseTransaction;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var int
     */
    protected $transactionDate;

    /**
     * @var list<AccountingTransactionDetail>
     */
    protected $transactionDetails;

    /**
     * @var int
     */
    protected $transactionEstablishDate;

    /**
     * @var string
     */
    protected $transactionNumber;

    /**
     * @var string
     */
    protected $type;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getAccountingImportDate(): int
    {
        return $this->accountingImportDate;
    }

    public function setAccountingImportDate(int $accountingImportDate): self
    {
        $this->initialized['accountingImportDate'] = true;
        $this->accountingImportDate = $accountingImportDate;

        return $this;
    }

    public function getConversionRate(): string
    {
        return $this->conversionRate;
    }

    public function setConversionRate(string $conversionRate): self
    {
        $this->initialized['conversionRate'] = true;
        $this->conversionRate = $conversionRate;

        return $this;
    }

    public function getConversionRateDate(): int
    {
        return $this->conversionRateDate;
    }

    public function setConversionRateDate(int $conversionRateDate): self
    {
        $this->initialized['conversionRateDate'] = true;
        $this->conversionRateDate = $conversionRateDate;

        return $this;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCurrencyName(): string
    {
        return $this->currencyName;
    }

    /**
     * @deprecated
     */
    public function setCurrencyName(string $currencyName): self
    {
        $this->initialized['currencyName'] = true;
        $this->currencyName = $currencyName;

        return $this;
    }

    public function getDraft(): bool
    {
        return $this->draft;
    }

    public function setDraft(bool $draft): self
    {
        $this->initialized['draft'] = true;
        $this->draft = $draft;

        return $this;
    }

    public function getExternalRecordNumber(): string
    {
        return $this->externalRecordNumber;
    }

    public function setExternalRecordNumber(string $externalRecordNumber): self
    {
        $this->initialized['externalRecordNumber'] = true;
        $this->externalRecordNumber = $externalRecordNumber;

        return $this;
    }

    public function getInternalRecordNumber(): string
    {
        return $this->internalRecordNumber;
    }

    public function setInternalRecordNumber(string $internalRecordNumber): self
    {
        $this->initialized['internalRecordNumber'] = true;
        $this->internalRecordNumber = $internalRecordNumber;

        return $this;
    }

    public function getReverseTransaction(): bool
    {
        return $this->reverseTransaction;
    }

    public function setReverseTransaction(bool $reverseTransaction): self
    {
        $this->initialized['reverseTransaction'] = true;
        $this->reverseTransaction = $reverseTransaction;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getTransactionDate(): int
    {
        return $this->transactionDate;
    }

    public function setTransactionDate(int $transactionDate): self
    {
        $this->initialized['transactionDate'] = true;
        $this->transactionDate = $transactionDate;

        return $this;
    }

    /**
     * @return list<AccountingTransactionDetail>
     */
    public function getTransactionDetails(): array
    {
        return $this->transactionDetails;
    }

    /**
     * @param  list<AccountingTransactionDetail>  $transactionDetails
     */
    public function setTransactionDetails(array $transactionDetails): self
    {
        $this->initialized['transactionDetails'] = true;
        $this->transactionDetails = $transactionDetails;

        return $this;
    }

    public function getTransactionEstablishDate(): int
    {
        return $this->transactionEstablishDate;
    }

    public function setTransactionEstablishDate(int $transactionEstablishDate): self
    {
        $this->initialized['transactionEstablishDate'] = true;
        $this->transactionEstablishDate = $transactionEstablishDate;

        return $this;
    }

    public function getTransactionNumber(): string
    {
        return $this->transactionNumber;
    }

    public function setTransactionNumber(string $transactionNumber): self
    {
        $this->initialized['transactionNumber'] = true;
        $this->transactionNumber = $transactionNumber;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
