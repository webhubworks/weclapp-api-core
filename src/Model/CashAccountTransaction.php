<?php

namespace Webhubworks\WeclappApiCore\Model;

class CashAccountTransaction extends \ArrayObject
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
     * @var string|null
     */
    protected $accountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $amount;
    /**
     * 
     *
     * @var string|null
     */
    protected $cashAccountSheetId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $cleared;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdById;
    /**
     * 
     *
     * @var string|null
     */
    protected $currencyId;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var int|null
     */
    protected $effectiveDate;
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
    protected $origin;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentMethodId;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentType;
    /**
     * 
     *
     * @var string|null
     */
    protected $taxId;
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
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * 
     *
     * @param string|null $accountId
     *
     * @return self
     */
    public function setAccountId(?string $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param string|null $amount
     *
     * @return self
     */
    public function setAmount(?string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCashAccountSheetId(): ?string
    {
        return $this->cashAccountSheetId;
    }
    /**
     * 
     *
     * @param string|null $cashAccountSheetId
     *
     * @return self
     */
    public function setCashAccountSheetId(?string $cashAccountSheetId): self
    {
        $this->initialized['cashAccountSheetId'] = true;
        $this->cashAccountSheetId = $cashAccountSheetId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCleared(): ?bool
    {
        return $this->cleared;
    }
    /**
     * 
     *
     * @param bool|null $cleared
     *
     * @return self
     */
    public function setCleared(?bool $cleared): self
    {
        $this->initialized['cleared'] = true;
        $this->cleared = $cleared;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedById(): ?string
    {
        return $this->createdById;
    }
    /**
     * 
     *
     * @param string|null $createdById
     *
     * @return self
     */
    public function setCreatedById(?string $createdById): self
    {
        $this->initialized['createdById'] = true;
        $this->createdById = $createdById;
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
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEffectiveDate(): ?int
    {
        return $this->effectiveDate;
    }
    /**
     * 
     *
     * @param int|null $effectiveDate
     *
     * @return self
     */
    public function setEffectiveDate(?int $effectiveDate): self
    {
        $this->initialized['effectiveDate'] = true;
        $this->effectiveDate = $effectiveDate;
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
    public function getOrigin(): ?string
    {
        return $this->origin;
    }
    /**
     * 
     *
     * @param string|null $origin
     *
     * @return self
     */
    public function setOrigin(?string $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentMethodId(): ?string
    {
        return $this->paymentMethodId;
    }
    /**
     * 
     *
     * @param string|null $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(?string $paymentMethodId): self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * 
     *
     * @param string|null $paymentType
     *
     * @return self
     */
    public function setPaymentType(?string $paymentType): self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaxId(): ?string
    {
        return $this->taxId;
    }
    /**
     * 
     *
     * @param string|null $taxId
     *
     * @return self
     */
    public function setTaxId(?string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;
        return $this;
    }
}