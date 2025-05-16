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
    protected $amountDiscount;
    /**
     * 
     *
     * @var string
     */
    protected $amountPayment;
    /**
     * 
     *
     * @var string
     */
    protected $bankAccountId;
    /**
     * 
     *
     * @var bool
     */
    protected $cleared;
    /**
     * 
     *
     * @var string
     */
    protected $conversionRate;
    /**
     * 
     *
     * @var int
     */
    protected $conversionRateDate;
    /**
     * 
     *
     * @var MoneyTransaction
     */
    protected $moneyTransaction;
    /**
     * 
     *
     * @var string
     */
    protected $partyBankAccountId;
    /**
     * 
     *
     * @var string
     */
    protected $paymentRunId;
    /**
     * 
     *
     * @var string
     */
    protected $paymentRunPaymentType;
    /**
     * 
     *
     * @var string
     */
    protected $purchaseOpenItemId;
    /**
     * 
     *
     * @var string
     */
    protected $purpose;
    /**
     * 
     *
     * @var Currency
     */
    protected $recordCurrency;
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
    public function getAmountPayment(): string
    {
        return $this->amountPayment;
    }
    /**
     * 
     *
     * @param string $amountPayment
     *
     * @return self
     */
    public function setAmountPayment(string $amountPayment): self
    {
        $this->initialized['amountPayment'] = true;
        $this->amountPayment = $amountPayment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBankAccountId(): string
    {
        return $this->bankAccountId;
    }
    /**
     * 
     *
     * @param string $bankAccountId
     *
     * @return self
     */
    public function setBankAccountId(string $bankAccountId): self
    {
        $this->initialized['bankAccountId'] = true;
        $this->bankAccountId = $bankAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCleared(): bool
    {
        return $this->cleared;
    }
    /**
     * 
     *
     * @param bool $cleared
     *
     * @return self
     */
    public function setCleared(bool $cleared): self
    {
        $this->initialized['cleared'] = true;
        $this->cleared = $cleared;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConversionRate(): string
    {
        return $this->conversionRate;
    }
    /**
     * 
     *
     * @param string $conversionRate
     *
     * @return self
     */
    public function setConversionRate(string $conversionRate): self
    {
        $this->initialized['conversionRate'] = true;
        $this->conversionRate = $conversionRate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConversionRateDate(): int
    {
        return $this->conversionRateDate;
    }
    /**
     * 
     *
     * @param int $conversionRateDate
     *
     * @return self
     */
    public function setConversionRateDate(int $conversionRateDate): self
    {
        $this->initialized['conversionRateDate'] = true;
        $this->conversionRateDate = $conversionRateDate;
        return $this;
    }
    /**
     * 
     *
     * @return MoneyTransaction
     */
    public function getMoneyTransaction(): MoneyTransaction
    {
        return $this->moneyTransaction;
    }
    /**
     * 
     *
     * @param MoneyTransaction $moneyTransaction
     *
     * @return self
     */
    public function setMoneyTransaction(MoneyTransaction $moneyTransaction): self
    {
        $this->initialized['moneyTransaction'] = true;
        $this->moneyTransaction = $moneyTransaction;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPartyBankAccountId(): string
    {
        return $this->partyBankAccountId;
    }
    /**
     * 
     *
     * @param string $partyBankAccountId
     *
     * @return self
     */
    public function setPartyBankAccountId(string $partyBankAccountId): self
    {
        $this->initialized['partyBankAccountId'] = true;
        $this->partyBankAccountId = $partyBankAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentRunId(): string
    {
        return $this->paymentRunId;
    }
    /**
     * 
     *
     * @param string $paymentRunId
     *
     * @return self
     */
    public function setPaymentRunId(string $paymentRunId): self
    {
        $this->initialized['paymentRunId'] = true;
        $this->paymentRunId = $paymentRunId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentRunPaymentType(): string
    {
        return $this->paymentRunPaymentType;
    }
    /**
     * 
     *
     * @param string $paymentRunPaymentType
     *
     * @return self
     */
    public function setPaymentRunPaymentType(string $paymentRunPaymentType): self
    {
        $this->initialized['paymentRunPaymentType'] = true;
        $this->paymentRunPaymentType = $paymentRunPaymentType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseOpenItemId(): string
    {
        return $this->purchaseOpenItemId;
    }
    /**
     * 
     *
     * @param string $purchaseOpenItemId
     *
     * @return self
     */
    public function setPurchaseOpenItemId(string $purchaseOpenItemId): self
    {
        $this->initialized['purchaseOpenItemId'] = true;
        $this->purchaseOpenItemId = $purchaseOpenItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurpose(): string
    {
        return $this->purpose;
    }
    /**
     * 
     *
     * @param string $purpose
     *
     * @return self
     */
    public function setPurpose(string $purpose): self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;
        return $this;
    }
    /**
     * 
     *
     * @return Currency
     */
    public function getRecordCurrency(): Currency
    {
        return $this->recordCurrency;
    }
    /**
     * 
     *
     * @param Currency $recordCurrency
     *
     * @return self
     */
    public function setRecordCurrency(Currency $recordCurrency): self
    {
        $this->initialized['recordCurrency'] = true;
        $this->recordCurrency = $recordCurrency;
        return $this;
    }
}