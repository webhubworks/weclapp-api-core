<?php

namespace Webhubworks\WeclappApiCore\Model;

class PaymentRunItem extends \ArrayObject
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
    protected $amountDiscount;
    /**
     * 
     *
     * @var string|null
     */
    protected $amountPayment;
    /**
     * 
     *
     * @var string|null
     */
    protected $bankAccountId;
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
     * @var MoneyTransaction|null
     */
    protected $moneyTransaction;
    /**
     * 
     *
     * @var string|null
     */
    protected $partyBankAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentRunId;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentRunPaymentType;
    /**
     * 
     *
     * @var string|null
     */
    protected $purchaseOpenItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $purpose;
    /**
     * 
     *
     * @var Currency|null
     */
    protected $recordCurrency;
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
    public function getAmountPayment(): ?string
    {
        return $this->amountPayment;
    }
    /**
     * 
     *
     * @param string|null $amountPayment
     *
     * @return self
     */
    public function setAmountPayment(?string $amountPayment): self
    {
        $this->initialized['amountPayment'] = true;
        $this->amountPayment = $amountPayment;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBankAccountId(): ?string
    {
        return $this->bankAccountId;
    }
    /**
     * 
     *
     * @param string|null $bankAccountId
     *
     * @return self
     */
    public function setBankAccountId(?string $bankAccountId): self
    {
        $this->initialized['bankAccountId'] = true;
        $this->bankAccountId = $bankAccountId;
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
     * @return MoneyTransaction|null
     */
    public function getMoneyTransaction(): ?MoneyTransaction
    {
        return $this->moneyTransaction;
    }
    /**
     * 
     *
     * @param MoneyTransaction|null $moneyTransaction
     *
     * @return self
     */
    public function setMoneyTransaction(?MoneyTransaction $moneyTransaction): self
    {
        $this->initialized['moneyTransaction'] = true;
        $this->moneyTransaction = $moneyTransaction;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPartyBankAccountId(): ?string
    {
        return $this->partyBankAccountId;
    }
    /**
     * 
     *
     * @param string|null $partyBankAccountId
     *
     * @return self
     */
    public function setPartyBankAccountId(?string $partyBankAccountId): self
    {
        $this->initialized['partyBankAccountId'] = true;
        $this->partyBankAccountId = $partyBankAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentRunId(): ?string
    {
        return $this->paymentRunId;
    }
    /**
     * 
     *
     * @param string|null $paymentRunId
     *
     * @return self
     */
    public function setPaymentRunId(?string $paymentRunId): self
    {
        $this->initialized['paymentRunId'] = true;
        $this->paymentRunId = $paymentRunId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentRunPaymentType(): ?string
    {
        return $this->paymentRunPaymentType;
    }
    /**
     * 
     *
     * @param string|null $paymentRunPaymentType
     *
     * @return self
     */
    public function setPaymentRunPaymentType(?string $paymentRunPaymentType): self
    {
        $this->initialized['paymentRunPaymentType'] = true;
        $this->paymentRunPaymentType = $paymentRunPaymentType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseOpenItemId(): ?string
    {
        return $this->purchaseOpenItemId;
    }
    /**
     * 
     *
     * @param string|null $purchaseOpenItemId
     *
     * @return self
     */
    public function setPurchaseOpenItemId(?string $purchaseOpenItemId): self
    {
        $this->initialized['purchaseOpenItemId'] = true;
        $this->purchaseOpenItemId = $purchaseOpenItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurpose(): ?string
    {
        return $this->purpose;
    }
    /**
     * 
     *
     * @param string|null $purpose
     *
     * @return self
     */
    public function setPurpose(?string $purpose): self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;
        return $this;
    }
    /**
     * 
     *
     * @return Currency|null
     */
    public function getRecordCurrency(): ?Currency
    {
        return $this->recordCurrency;
    }
    /**
     * 
     *
     * @param Currency|null $recordCurrency
     *
     * @return self
     */
    public function setRecordCurrency(?Currency $recordCurrency): self
    {
        $this->initialized['recordCurrency'] = true;
        $this->recordCurrency = $recordCurrency;
        return $this;
    }
}