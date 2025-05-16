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
     * @var string
     */
    protected $accountForCostsOfMonetaryTrafficId;

    /**
     * @var string
     */
    protected $accountForCostsOfMonetaryTrafficNumber;

    /**
     * @var string
     */
    protected $accountForDunningFeeId;

    /**
     * @var string
     */
    protected $accountForDunningFeeNumber;

    /**
     * @var string
     */
    protected $accountId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $accountNumber;

    /**
     * @var string
     */
    protected $amount;

    /**
     * @var string
     */
    protected $amountDiscount;

    /**
     * @var string
     */
    protected $cashAccountSheetId;

    /**
     * @var string
     */
    protected $createdById;

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
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $effectiveDate;

    /**
     * @var string
     */
    protected $externalRecordNumber;

    /**
     * @var string
     */
    protected $origin;

    /**
     * @var string
     */
    protected $partyId;

    /**
     * @var string
     */
    protected $paymentMethodId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $paymentMethodName;

    /**
     * @var string
     */
    protected $paymentToleranceAccountId;

    /**
     * @var string
     */
    protected $paymentToleranceAccountNumber;

    /**
     * @var string
     */
    protected $paymentType;

    /**
     * @var string
     */
    protected $taxId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $taxName;

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

    public function getAccountForCostsOfMonetaryTrafficId(): string
    {
        return $this->accountForCostsOfMonetaryTrafficId;
    }

    public function setAccountForCostsOfMonetaryTrafficId(string $accountForCostsOfMonetaryTrafficId): self
    {
        $this->initialized['accountForCostsOfMonetaryTrafficId'] = true;
        $this->accountForCostsOfMonetaryTrafficId = $accountForCostsOfMonetaryTrafficId;

        return $this;
    }

    public function getAccountForCostsOfMonetaryTrafficNumber(): string
    {
        return $this->accountForCostsOfMonetaryTrafficNumber;
    }

    public function setAccountForCostsOfMonetaryTrafficNumber(string $accountForCostsOfMonetaryTrafficNumber): self
    {
        $this->initialized['accountForCostsOfMonetaryTrafficNumber'] = true;
        $this->accountForCostsOfMonetaryTrafficNumber = $accountForCostsOfMonetaryTrafficNumber;

        return $this;
    }

    public function getAccountForDunningFeeId(): string
    {
        return $this->accountForDunningFeeId;
    }

    public function setAccountForDunningFeeId(string $accountForDunningFeeId): self
    {
        $this->initialized['accountForDunningFeeId'] = true;
        $this->accountForDunningFeeId = $accountForDunningFeeId;

        return $this;
    }

    public function getAccountForDunningFeeNumber(): string
    {
        return $this->accountForDunningFeeNumber;
    }

    public function setAccountForDunningFeeNumber(string $accountForDunningFeeNumber): self
    {
        $this->initialized['accountForDunningFeeNumber'] = true;
        $this->accountForDunningFeeNumber = $accountForDunningFeeNumber;

        return $this;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function setAccountId(string $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @deprecated
     */
    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    public function getAmountDiscount(): string
    {
        return $this->amountDiscount;
    }

    public function setAmountDiscount(string $amountDiscount): self
    {
        $this->initialized['amountDiscount'] = true;
        $this->amountDiscount = $amountDiscount;

        return $this;
    }

    public function getCashAccountSheetId(): string
    {
        return $this->cashAccountSheetId;
    }

    public function setCashAccountSheetId(string $cashAccountSheetId): self
    {
        $this->initialized['cashAccountSheetId'] = true;
        $this->cashAccountSheetId = $cashAccountSheetId;

        return $this;
    }

    public function getCreatedById(): string
    {
        return $this->createdById;
    }

    public function setCreatedById(string $createdById): self
    {
        $this->initialized['createdById'] = true;
        $this->createdById = $createdById;

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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getEffectiveDate(): int
    {
        return $this->effectiveDate;
    }

    public function setEffectiveDate(int $effectiveDate): self
    {
        $this->initialized['effectiveDate'] = true;
        $this->effectiveDate = $effectiveDate;

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

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;

        return $this;
    }

    public function getPartyId(): string
    {
        return $this->partyId;
    }

    public function setPartyId(string $partyId): self
    {
        $this->initialized['partyId'] = true;
        $this->partyId = $partyId;

        return $this;
    }

    public function getPaymentMethodId(): string
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId(string $paymentMethodId): self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPaymentMethodName(): string
    {
        return $this->paymentMethodName;
    }

    /**
     * @deprecated
     */
    public function setPaymentMethodName(string $paymentMethodName): self
    {
        $this->initialized['paymentMethodName'] = true;
        $this->paymentMethodName = $paymentMethodName;

        return $this;
    }

    public function getPaymentToleranceAccountId(): string
    {
        return $this->paymentToleranceAccountId;
    }

    public function setPaymentToleranceAccountId(string $paymentToleranceAccountId): self
    {
        $this->initialized['paymentToleranceAccountId'] = true;
        $this->paymentToleranceAccountId = $paymentToleranceAccountId;

        return $this;
    }

    public function getPaymentToleranceAccountNumber(): string
    {
        return $this->paymentToleranceAccountNumber;
    }

    public function setPaymentToleranceAccountNumber(string $paymentToleranceAccountNumber): self
    {
        $this->initialized['paymentToleranceAccountNumber'] = true;
        $this->paymentToleranceAccountNumber = $paymentToleranceAccountNumber;

        return $this;
    }

    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    public function setPaymentType(string $paymentType): self
    {
        $this->initialized['paymentType'] = true;
        $this->paymentType = $paymentType;

        return $this;
    }

    public function getTaxId(): string
    {
        return $this->taxId;
    }

    public function setTaxId(string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getTaxName(): string
    {
        return $this->taxName;
    }

    /**
     * @deprecated
     */
    public function setTaxName(string $taxName): self
    {
        $this->initialized['taxName'] = true;
        $this->taxName = $taxName;

        return $this;
    }
}
