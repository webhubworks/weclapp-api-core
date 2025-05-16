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
    protected $accountForCostsOfMonetaryTrafficId;
    /**
     * 
     *
     * @var string
     */
    protected $accountForCostsOfMonetaryTrafficNumber;
    /**
     * 
     *
     * @var string
     */
    protected $accountForDunningFeeId;
    /**
     * 
     *
     * @var string
     */
    protected $accountForDunningFeeNumber;
    /**
     * 
     *
     * @var string
     */
    protected $accountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $amount;
    /**
     * 
     *
     * @var string
     */
    protected $amountDiscount;
    /**
     * 
     *
     * @var string
     */
    protected $cashAccountSheetId;
    /**
     * 
     *
     * @var string
     */
    protected $createdById;
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
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $effectiveDate;
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
    protected $origin;
    /**
     * 
     *
     * @var string
     */
    protected $partyId;
    /**
     * 
     *
     * @var string
     */
    protected $paymentMethodId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $paymentMethodName;
    /**
     * 
     *
     * @var string
     */
    protected $paymentToleranceAccountId;
    /**
     * 
     *
     * @var string
     */
    protected $paymentToleranceAccountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $paymentType;
    /**
     * 
     *
     * @var string
     */
    protected $taxId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $taxName;
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
    public function getAccountForCostsOfMonetaryTrafficId(): string
    {
        return $this->accountForCostsOfMonetaryTrafficId;
    }
    /**
     * 
     *
     * @param string $accountForCostsOfMonetaryTrafficId
     *
     * @return self
     */
    public function setAccountForCostsOfMonetaryTrafficId(string $accountForCostsOfMonetaryTrafficId): self
    {
        $this->initialized['accountForCostsOfMonetaryTrafficId'] = true;
        $this->accountForCostsOfMonetaryTrafficId = $accountForCostsOfMonetaryTrafficId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAccountForCostsOfMonetaryTrafficNumber(): string
    {
        return $this->accountForCostsOfMonetaryTrafficNumber;
    }
    /**
     * 
     *
     * @param string $accountForCostsOfMonetaryTrafficNumber
     *
     * @return self
     */
    public function setAccountForCostsOfMonetaryTrafficNumber(string $accountForCostsOfMonetaryTrafficNumber): self
    {
        $this->initialized['accountForCostsOfMonetaryTrafficNumber'] = true;
        $this->accountForCostsOfMonetaryTrafficNumber = $accountForCostsOfMonetaryTrafficNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAccountForDunningFeeId(): string
    {
        return $this->accountForDunningFeeId;
    }
    /**
     * 
     *
     * @param string $accountForDunningFeeId
     *
     * @return self
     */
    public function setAccountForDunningFeeId(string $accountForDunningFeeId): self
    {
        $this->initialized['accountForDunningFeeId'] = true;
        $this->accountForDunningFeeId = $accountForDunningFeeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAccountForDunningFeeNumber(): string
    {
        return $this->accountForDunningFeeNumber;
    }
    /**
     * 
     *
     * @param string $accountForDunningFeeNumber
     *
     * @return self
     */
    public function setAccountForDunningFeeNumber(string $accountForDunningFeeNumber): self
    {
        $this->initialized['accountForDunningFeeNumber'] = true;
        $this->accountForDunningFeeNumber = $accountForDunningFeeNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }
    /**
     * 
     *
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId(string $accountId): self
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
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }
    /**
     * 
     *
     * @param string $accountNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAmountDiscount(): string
    {
        return $this->amountDiscount;
    }
    /**
     * 
     *
     * @param string $amountDiscount
     *
     * @return self
     */
    public function setAmountDiscount(string $amountDiscount): self
    {
        $this->initialized['amountDiscount'] = true;
        $this->amountDiscount = $amountDiscount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCashAccountSheetId(): string
    {
        return $this->cashAccountSheetId;
    }
    /**
     * 
     *
     * @param string $cashAccountSheetId
     *
     * @return self
     */
    public function setCashAccountSheetId(string $cashAccountSheetId): self
    {
        $this->initialized['cashAccountSheetId'] = true;
        $this->cashAccountSheetId = $cashAccountSheetId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedById(): string
    {
        return $this->createdById;
    }
    /**
     * 
     *
     * @param string $createdById
     *
     * @return self
     */
    public function setCreatedById(string $createdById): self
    {
        $this->initialized['createdById'] = true;
        $this->createdById = $createdById;
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEffectiveDate(): int
    {
        return $this->effectiveDate;
    }
    /**
     * 
     *
     * @param int $effectiveDate
     *
     * @return self
     */
    public function setEffectiveDate(int $effectiveDate): self
    {
        $this->initialized['effectiveDate'] = true;
        $this->effectiveDate = $effectiveDate;
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
    public function getOrigin(): string
    {
        return $this->origin;
    }
    /**
     * 
     *
     * @param string $origin
     *
     * @return self
     */
    public function setOrigin(string $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPartyId(): string
    {
        return $this->partyId;
    }
    /**
     * 
     *
     * @param string $partyId
     *
     * @return self
     */
    public function setPartyId(string $partyId): self
    {
        $this->initialized['partyId'] = true;
        $this->partyId = $partyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentMethodId(): string
    {
        return $this->paymentMethodId;
    }
    /**
     * 
     *
     * @param string $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(string $paymentMethodId): self
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
     * @return string
     */
    public function getPaymentMethodName(): string
    {
        return $this->paymentMethodName;
    }
    /**
     * 
     *
     * @param string $paymentMethodName
     *
     * @deprecated
     *
     * @return self
     */
    public function setPaymentMethodName(string $paymentMethodName): self
    {
        $this->initialized['paymentMethodName'] = true;
        $this->paymentMethodName = $paymentMethodName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentToleranceAccountId(): string
    {
        return $this->paymentToleranceAccountId;
    }
    /**
     * 
     *
     * @param string $paymentToleranceAccountId
     *
     * @return self
     */
    public function setPaymentToleranceAccountId(string $paymentToleranceAccountId): self
    {
        $this->initialized['paymentToleranceAccountId'] = true;
        $this->paymentToleranceAccountId = $paymentToleranceAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentToleranceAccountNumber(): string
    {
        return $this->paymentToleranceAccountNumber;
    }
    /**
     * 
     *
     * @param string $paymentToleranceAccountNumber
     *
     * @return self
     */
    public function setPaymentToleranceAccountNumber(string $paymentToleranceAccountNumber): self
    {
        $this->initialized['paymentToleranceAccountNumber'] = true;
        $this->paymentToleranceAccountNumber = $paymentToleranceAccountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }
    /**
     * 
     *
     * @param string $paymentType
     *
     * @return self
     */
    public function setPaymentType(string $paymentType): self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;
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
     * @deprecated
     *
     * @return string
     */
    public function getTaxName(): string
    {
        return $this->taxName;
    }
    /**
     * 
     *
     * @param string $taxName
     *
     * @deprecated
     *
     * @return self
     */
    public function setTaxName(string $taxName): self
    {
        $this->initialized['taxName'] = true;
        $this->taxName = $taxName;
        return $this;
    }
}