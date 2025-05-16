<?php

namespace Webhubworks\WeclappApiCore\Model;

class TaxDeterminationRule extends \ArrayObject
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
     * @var string
     */
    protected $accountingCodeId;
    /**
     * 
     *
     * @var string
     */
    protected $customerDebtorAccountingCodeId;
    /**
     * 
     *
     * @var string
     */
    protected $dispatchCountryCode;
    /**
     * 
     *
     * @var int
     */
    protected $endDate;
    /**
     * 
     *
     * @var string
     */
    protected $partyType;
    /**
     * 
     *
     * @var string
     */
    protected $recipientCountryCode;
    /**
     * 
     *
     * @var bool
     */
    protected $sales;
    /**
     * 
     *
     * @var int
     */
    protected $startDate;
    /**
     * 
     *
     * @var string
     */
    protected $taxId;
    /**
     * 
     *
     * @var string
     */
    protected $taxRateType;
    /**
     * 
     *
     * @var bool
     */
    protected $validVatId;
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
     * @return string
     */
    public function getAccountingCodeId(): string
    {
        return $this->accountingCodeId;
    }
    /**
     * 
     *
     * @param string $accountingCodeId
     *
     * @return self
     */
    public function setAccountingCodeId(string $accountingCodeId): self
    {
        $this->initialized['accountingCodeId'] = true;
        $this->accountingCodeId = $accountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerDebtorAccountingCodeId(): string
    {
        return $this->customerDebtorAccountingCodeId;
    }
    /**
     * 
     *
     * @param string $customerDebtorAccountingCodeId
     *
     * @return self
     */
    public function setCustomerDebtorAccountingCodeId(string $customerDebtorAccountingCodeId): self
    {
        $this->initialized['customerDebtorAccountingCodeId'] = true;
        $this->customerDebtorAccountingCodeId = $customerDebtorAccountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDispatchCountryCode(): string
    {
        return $this->dispatchCountryCode;
    }
    /**
     * 
     *
     * @param string $dispatchCountryCode
     *
     * @return self
     */
    public function setDispatchCountryCode(string $dispatchCountryCode): self
    {
        $this->initialized['dispatchCountryCode'] = true;
        $this->dispatchCountryCode = $dispatchCountryCode;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEndDate(): int
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param int $endDate
     *
     * @return self
     */
    public function setEndDate(int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPartyType(): string
    {
        return $this->partyType;
    }
    /**
     * 
     *
     * @param string $partyType
     *
     * @return self
     */
    public function setPartyType(string $partyType): self
    {
        $this->initialized['partyType'] = true;
        $this->partyType = $partyType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecipientCountryCode(): string
    {
        return $this->recipientCountryCode;
    }
    /**
     * 
     *
     * @param string $recipientCountryCode
     *
     * @return self
     */
    public function setRecipientCountryCode(string $recipientCountryCode): self
    {
        $this->initialized['recipientCountryCode'] = true;
        $this->recipientCountryCode = $recipientCountryCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSales(): bool
    {
        return $this->sales;
    }
    /**
     * 
     *
     * @param bool $sales
     *
     * @return self
     */
    public function setSales(bool $sales): self
    {
        $this->initialized['sales'] = true;
        $this->sales = $sales;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param int $startDate
     *
     * @return self
     */
    public function setStartDate(int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }
    /**
     * 
     *
     * @param string $taxId
     *
     * @return self
     */
    public function setTaxId(string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTaxRateType(): string
    {
        return $this->taxRateType;
    }
    /**
     * 
     *
     * @param string $taxRateType
     *
     * @return self
     */
    public function setTaxRateType(string $taxRateType): self
    {
        $this->initialized['taxRateType'] = true;
        $this->taxRateType = $taxRateType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getValidVatId(): bool
    {
        return $this->validVatId;
    }
    /**
     * 
     *
     * @param bool $validVatId
     *
     * @return self
     */
    public function setValidVatId(bool $validVatId): self
    {
        $this->initialized['validVatId'] = true;
        $this->validVatId = $validVatId;
        return $this;
    }
}