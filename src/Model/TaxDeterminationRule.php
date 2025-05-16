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
    protected $accountingCodeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerDebtorAccountingCodeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $dispatchCountryCode;
    /**
     * 
     *
     * @var int|null
     */
    protected $endDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $partyType;
    /**
     * 
     *
     * @var string|null
     */
    protected $recipientCountryCode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $sales;
    /**
     * 
     *
     * @var int|null
     */
    protected $startDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $taxId;
    /**
     * 
     *
     * @var string|null
     */
    protected $taxRateType;
    /**
     * 
     *
     * @var bool|null
     */
    protected $validVatId;
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
    public function getAccountingCodeId(): ?string
    {
        return $this->accountingCodeId;
    }
    /**
     * 
     *
     * @param string|null $accountingCodeId
     *
     * @return self
     */
    public function setAccountingCodeId(?string $accountingCodeId): self
    {
        $this->initialized['accountingCodeId'] = true;
        $this->accountingCodeId = $accountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerDebtorAccountingCodeId(): ?string
    {
        return $this->customerDebtorAccountingCodeId;
    }
    /**
     * 
     *
     * @param string|null $customerDebtorAccountingCodeId
     *
     * @return self
     */
    public function setCustomerDebtorAccountingCodeId(?string $customerDebtorAccountingCodeId): self
    {
        $this->initialized['customerDebtorAccountingCodeId'] = true;
        $this->customerDebtorAccountingCodeId = $customerDebtorAccountingCodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDispatchCountryCode(): ?string
    {
        return $this->dispatchCountryCode;
    }
    /**
     * 
     *
     * @param string|null $dispatchCountryCode
     *
     * @return self
     */
    public function setDispatchCountryCode(?string $dispatchCountryCode): self
    {
        $this->initialized['dispatchCountryCode'] = true;
        $this->dispatchCountryCode = $dispatchCountryCode;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEndDate(): ?int
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param int|null $endDate
     *
     * @return self
     */
    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPartyType(): ?string
    {
        return $this->partyType;
    }
    /**
     * 
     *
     * @param string|null $partyType
     *
     * @return self
     */
    public function setPartyType(?string $partyType): self
    {
        $this->initialized['partyType'] = true;
        $this->partyType = $partyType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecipientCountryCode(): ?string
    {
        return $this->recipientCountryCode;
    }
    /**
     * 
     *
     * @param string|null $recipientCountryCode
     *
     * @return self
     */
    public function setRecipientCountryCode(?string $recipientCountryCode): self
    {
        $this->initialized['recipientCountryCode'] = true;
        $this->recipientCountryCode = $recipientCountryCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSales(): ?bool
    {
        return $this->sales;
    }
    /**
     * 
     *
     * @param bool|null $sales
     *
     * @return self
     */
    public function setSales(?bool $sales): self
    {
        $this->initialized['sales'] = true;
        $this->sales = $sales;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStartDate(): ?int
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param int|null $startDate
     *
     * @return self
     */
    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getTaxRateType(): ?string
    {
        return $this->taxRateType;
    }
    /**
     * 
     *
     * @param string|null $taxRateType
     *
     * @return self
     */
    public function setTaxRateType(?string $taxRateType): self
    {
        $this->initialized['taxRateType'] = true;
        $this->taxRateType = $taxRateType;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getValidVatId(): ?bool
    {
        return $this->validVatId;
    }
    /**
     * 
     *
     * @param bool|null $validVatId
     *
     * @return self
     */
    public function setValidVatId(?bool $validVatId): self
    {
        $this->initialized['validVatId'] = true;
        $this->validVatId = $validVatId;
        return $this;
    }
}