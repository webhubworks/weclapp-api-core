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
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @var int|null
     */
    protected $accountingImportDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $conversionRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $conversionRateDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $currencyId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $draft;
    /**
     * 
     *
     * @var string|null
     */
    protected $externalRecordNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $internalRecordNumber;
    /**
     * 
     *
     * @var bool|null
     */
    protected $reverseTransaction;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var int|null
     */
    protected $transactionDate;
    /**
     * 
     *
     * @var list<AccountingTransactionDetail>|null
     */
    protected $transactionDetails;
    /**
     * 
     *
     * @var int|null
     */
    protected $transactionEstablishDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $transactionNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int|null $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int|null $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAccountingImportDate(): ?int
    {
        return $this->accountingImportDate;
    }
    /**
     * 
     *
     * @param int|null $accountingImportDate
     *
     * @return self
     */
    public function setAccountingImportDate(?int $accountingImportDate): self
    {
        $this->initialized['accountingImportDate'] = true;
        $this->accountingImportDate = $accountingImportDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConversionRate(): ?string
    {
        return $this->conversionRate;
    }
    /**
     * 
     *
     * @param string|null $conversionRate
     *
     * @return self
     */
    public function setConversionRate(?string $conversionRate): self
    {
        $this->initialized['conversionRate'] = true;
        $this->conversionRate = $conversionRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConversionRateDate(): ?int
    {
        return $this->conversionRateDate;
    }
    /**
     * 
     *
     * @param int|null $conversionRateDate
     *
     * @return self
     */
    public function setConversionRateDate(?int $conversionRateDate): self
    {
        $this->initialized['conversionRateDate'] = true;
        $this->conversionRateDate = $conversionRateDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }
    /**
     * 
     *
     * @param string|null $currencyId
     *
     * @return self
     */
    public function setCurrencyId(?string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDraft(): ?bool
    {
        return $this->draft;
    }
    /**
     * 
     *
     * @param bool|null $draft
     *
     * @return self
     */
    public function setDraft(?bool $draft): self
    {
        $this->initialized['draft'] = true;
        $this->draft = $draft;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExternalRecordNumber(): ?string
    {
        return $this->externalRecordNumber;
    }
    /**
     * 
     *
     * @param string|null $externalRecordNumber
     *
     * @return self
     */
    public function setExternalRecordNumber(?string $externalRecordNumber): self
    {
        $this->initialized['externalRecordNumber'] = true;
        $this->externalRecordNumber = $externalRecordNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInternalRecordNumber(): ?string
    {
        return $this->internalRecordNumber;
    }
    /**
     * 
     *
     * @param string|null $internalRecordNumber
     *
     * @return self
     */
    public function setInternalRecordNumber(?string $internalRecordNumber): self
    {
        $this->initialized['internalRecordNumber'] = true;
        $this->internalRecordNumber = $internalRecordNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getReverseTransaction(): ?bool
    {
        return $this->reverseTransaction;
    }
    /**
     * 
     *
     * @param bool|null $reverseTransaction
     *
     * @return self
     */
    public function setReverseTransaction(?bool $reverseTransaction): self
    {
        $this->initialized['reverseTransaction'] = true;
        $this->reverseTransaction = $reverseTransaction;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTransactionDate(): ?int
    {
        return $this->transactionDate;
    }
    /**
     * 
     *
     * @param int|null $transactionDate
     *
     * @return self
     */
    public function setTransactionDate(?int $transactionDate): self
    {
        $this->initialized['transactionDate'] = true;
        $this->transactionDate = $transactionDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<AccountingTransactionDetail>|null
     */
    public function getTransactionDetails(): ?array
    {
        return $this->transactionDetails;
    }
    /**
     * 
     *
     * @param list<AccountingTransactionDetail>|null $transactionDetails
     *
     * @return self
     */
    public function setTransactionDetails(?array $transactionDetails): self
    {
        $this->initialized['transactionDetails'] = true;
        $this->transactionDetails = $transactionDetails;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTransactionEstablishDate(): ?int
    {
        return $this->transactionEstablishDate;
    }
    /**
     * 
     *
     * @param int|null $transactionEstablishDate
     *
     * @return self
     */
    public function setTransactionEstablishDate(?int $transactionEstablishDate): self
    {
        $this->initialized['transactionEstablishDate'] = true;
        $this->transactionEstablishDate = $transactionEstablishDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTransactionNumber(): ?string
    {
        return $this->transactionNumber;
    }
    /**
     * 
     *
     * @param string|null $transactionNumber
     *
     * @return self
     */
    public function setTransactionNumber(?string $transactionNumber): self
    {
        $this->initialized['transactionNumber'] = true;
        $this->transactionNumber = $transactionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}