<?php

namespace Webhubworks\WeclappApiCore\Model;

class MoneyTransaction extends \ArrayObject
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
    protected $accountForCostsOfMonetaryTrafficId;
    /**
     * 
     *
     * @var string|null
     */
    protected $accountForCostsOfMonetaryTrafficNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $accountForDunningFeeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $accountForDunningFeeNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $accountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $accountNumber;
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
    protected $amountDiscount;
    /**
     * 
     *
     * @var string|null
     */
    protected $cashAccountSheetId;
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
     * @deprecated
     *
     * @var string|null
     */
    protected $currencyName;
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
    protected $partyId;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $paymentMethodName;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentToleranceAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentToleranceAccountNumber;
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
     * @deprecated
     *
     * @var string|null
     */
    protected $taxName;
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
    public function getAccountForCostsOfMonetaryTrafficId(): ?string
    {
        return $this->accountForCostsOfMonetaryTrafficId;
    }
    /**
     * 
     *
     * @param string|null $accountForCostsOfMonetaryTrafficId
     *
     * @return self
     */
    public function setAccountForCostsOfMonetaryTrafficId(?string $accountForCostsOfMonetaryTrafficId): self
    {
        $this->initialized['accountForCostsOfMonetaryTrafficId'] = true;
        $this->accountForCostsOfMonetaryTrafficId = $accountForCostsOfMonetaryTrafficId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAccountForCostsOfMonetaryTrafficNumber(): ?string
    {
        return $this->accountForCostsOfMonetaryTrafficNumber;
    }
    /**
     * 
     *
     * @param string|null $accountForCostsOfMonetaryTrafficNumber
     *
     * @return self
     */
    public function setAccountForCostsOfMonetaryTrafficNumber(?string $accountForCostsOfMonetaryTrafficNumber): self
    {
        $this->initialized['accountForCostsOfMonetaryTrafficNumber'] = true;
        $this->accountForCostsOfMonetaryTrafficNumber = $accountForCostsOfMonetaryTrafficNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAccountForDunningFeeId(): ?string
    {
        return $this->accountForDunningFeeId;
    }
    /**
     * 
     *
     * @param string|null $accountForDunningFeeId
     *
     * @return self
     */
    public function setAccountForDunningFeeId(?string $accountForDunningFeeId): self
    {
        $this->initialized['accountForDunningFeeId'] = true;
        $this->accountForDunningFeeId = $accountForDunningFeeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAccountForDunningFeeNumber(): ?string
    {
        return $this->accountForDunningFeeNumber;
    }
    /**
     * 
     *
     * @param string|null $accountForDunningFeeNumber
     *
     * @return self
     */
    public function setAccountForDunningFeeNumber(?string $accountForDunningFeeNumber): self
    {
        $this->initialized['accountForDunningFeeNumber'] = true;
        $this->accountForDunningFeeNumber = $accountForDunningFeeNumber;
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
     * @deprecated
     *
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * 
     *
     * @param string|null $accountNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setAccountNumber(?string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
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
    public function getAmountDiscount(): ?string
    {
        return $this->amountDiscount;
    }
    /**
     * 
     *
     * @param string|null $amountDiscount
     *
     * @return self
     */
    public function setAmountDiscount(?string $amountDiscount): self
    {
        $this->initialized['amountDiscount'] = true;
        $this->amountDiscount = $amountDiscount;
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
     * @deprecated
     *
     * @return string|null
     */
    public function getCurrencyName(): ?string
    {
        return $this->currencyName;
    }
    /**
     * 
     *
     * @param string|null $currencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setCurrencyName(?string $currencyName): self
    {
        $this->initialized['currencyName'] = true;
        $this->currencyName = $currencyName;
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
    public function getPartyId(): ?string
    {
        return $this->partyId;
    }
    /**
     * 
     *
     * @param string|null $partyId
     *
     * @return self
     */
    public function setPartyId(?string $partyId): self
    {
        $this->initialized['partyId'] = true;
        $this->partyId = $partyId;
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
     * @deprecated
     *
     * @return string|null
     */
    public function getPaymentMethodName(): ?string
    {
        return $this->paymentMethodName;
    }
    /**
     * 
     *
     * @param string|null $paymentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setPaymentMethodName(?string $paymentMethodName): self
    {
        $this->initialized['paymentMethodName'] = true;
        $this->paymentMethodName = $paymentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentToleranceAccountId(): ?string
    {
        return $this->paymentToleranceAccountId;
    }
    /**
     * 
     *
     * @param string|null $paymentToleranceAccountId
     *
     * @return self
     */
    public function setPaymentToleranceAccountId(?string $paymentToleranceAccountId): self
    {
        $this->initialized['paymentToleranceAccountId'] = true;
        $this->paymentToleranceAccountId = $paymentToleranceAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentToleranceAccountNumber(): ?string
    {
        return $this->paymentToleranceAccountNumber;
    }
    /**
     * 
     *
     * @param string|null $paymentToleranceAccountNumber
     *
     * @return self
     */
    public function setPaymentToleranceAccountNumber(?string $paymentToleranceAccountNumber): self
    {
        $this->initialized['paymentToleranceAccountNumber'] = true;
        $this->paymentToleranceAccountNumber = $paymentToleranceAccountNumber;
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
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getTaxName(): ?string
    {
        return $this->taxName;
    }
    /**
     * 
     *
     * @param string|null $taxName
     *
     * @deprecated
     *
     * @return self
     */
    public function setTaxName(?string $taxName): self
    {
        $this->initialized['taxName'] = true;
        $this->taxName = $taxName;
        return $this;
    }
}