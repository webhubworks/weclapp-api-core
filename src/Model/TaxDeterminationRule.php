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
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var string|null
     */
    protected $accountingCodeId;

    /**
     * @var string|null
     */
    protected $customerDebtorAccountingCodeId;

    /**
     * @var string|null
     */
    protected $dispatchCountryCode;

    /**
     * @var int|null
     */
    protected $endDate;

    /**
     * @var string|null
     */
    protected $partyType;

    /**
     * @var string|null
     */
    protected $recipientCountryCode;

    /**
     * @var bool|null
     */
    protected $sales;

    /**
     * @var int|null
     */
    protected $startDate;

    /**
     * @var string|null
     */
    protected $taxId;

    /**
     * @var string|null
     */
    protected $taxRateType;

    /**
     * @var bool|null
     */
    protected $validVatId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getAccountingCodeId(): ?string
    {
        return $this->accountingCodeId;
    }

    public function setAccountingCodeId(?string $accountingCodeId): self
    {
        $this->initialized['accountingCodeId'] = true;
        $this->accountingCodeId = $accountingCodeId;

        return $this;
    }

    public function getCustomerDebtorAccountingCodeId(): ?string
    {
        return $this->customerDebtorAccountingCodeId;
    }

    public function setCustomerDebtorAccountingCodeId(?string $customerDebtorAccountingCodeId): self
    {
        $this->initialized['customerDebtorAccountingCodeId'] = true;
        $this->customerDebtorAccountingCodeId = $customerDebtorAccountingCodeId;

        return $this;
    }

    public function getDispatchCountryCode(): ?string
    {
        return $this->dispatchCountryCode;
    }

    public function setDispatchCountryCode(?string $dispatchCountryCode): self
    {
        $this->initialized['dispatchCountryCode'] = true;
        $this->dispatchCountryCode = $dispatchCountryCode;

        return $this;
    }

    public function getEndDate(): ?int
    {
        return $this->endDate;
    }

    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    public function getPartyType(): ?string
    {
        return $this->partyType;
    }

    public function setPartyType(?string $partyType): self
    {
        $this->initialized['partyType'] = true;
        $this->partyType = $partyType;

        return $this;
    }

    public function getRecipientCountryCode(): ?string
    {
        return $this->recipientCountryCode;
    }

    public function setRecipientCountryCode(?string $recipientCountryCode): self
    {
        $this->initialized['recipientCountryCode'] = true;
        $this->recipientCountryCode = $recipientCountryCode;

        return $this;
    }

    public function getSales(): ?bool
    {
        return $this->sales;
    }

    public function setSales(?bool $sales): self
    {
        $this->initialized['sales'] = true;
        $this->sales = $sales;

        return $this;
    }

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(?string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;

        return $this;
    }

    public function getTaxRateType(): ?string
    {
        return $this->taxRateType;
    }

    public function setTaxRateType(?string $taxRateType): self
    {
        $this->initialized['taxRateType'] = true;
        $this->taxRateType = $taxRateType;

        return $this;
    }

    public function getValidVatId(): ?bool
    {
        return $this->validVatId;
    }

    public function setValidVatId(?bool $validVatId): self
    {
        $this->initialized['validVatId'] = true;
        $this->validVatId = $validVatId;

        return $this;
    }
}
