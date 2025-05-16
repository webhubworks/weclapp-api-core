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
    protected $amountDiscount;

    /**
     * @var string|null
     */
    protected $amountPayment;

    /**
     * @var string|null
     */
    protected $bankAccountId;

    /**
     * @var bool|null
     */
    protected $cleared;

    /**
     * @var string|null
     */
    protected $conversionRate;

    /**
     * @var int|null
     */
    protected $conversionRateDate;

    /**
     * @var MoneyTransaction|null
     */
    protected $moneyTransaction;

    /**
     * @var string|null
     */
    protected $partyBankAccountId;

    /**
     * @var string|null
     */
    protected $paymentRunId;

    /**
     * @var string|null
     */
    protected $paymentRunPaymentType;

    /**
     * @var string|null
     */
    protected $purchaseOpenItemId;

    /**
     * @var string|null
     */
    protected $purpose;

    /**
     * @var Currency|null
     */
    protected $recordCurrency;

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

    public function getAmountDiscount(): ?string
    {
        return $this->amountDiscount;
    }

    public function setAmountDiscount(?string $amountDiscount): self
    {
        $this->initialized['amountDiscount'] = true;
        $this->amountDiscount = $amountDiscount;

        return $this;
    }

    public function getAmountPayment(): ?string
    {
        return $this->amountPayment;
    }

    public function setAmountPayment(?string $amountPayment): self
    {
        $this->initialized['amountPayment'] = true;
        $this->amountPayment = $amountPayment;

        return $this;
    }

    public function getBankAccountId(): ?string
    {
        return $this->bankAccountId;
    }

    public function setBankAccountId(?string $bankAccountId): self
    {
        $this->initialized['bankAccountId'] = true;
        $this->bankAccountId = $bankAccountId;

        return $this;
    }

    public function getCleared(): ?bool
    {
        return $this->cleared;
    }

    public function setCleared(?bool $cleared): self
    {
        $this->initialized['cleared'] = true;
        $this->cleared = $cleared;

        return $this;
    }

    public function getConversionRate(): ?string
    {
        return $this->conversionRate;
    }

    public function setConversionRate(?string $conversionRate): self
    {
        $this->initialized['conversionRate'] = true;
        $this->conversionRate = $conversionRate;

        return $this;
    }

    public function getConversionRateDate(): ?int
    {
        return $this->conversionRateDate;
    }

    public function setConversionRateDate(?int $conversionRateDate): self
    {
        $this->initialized['conversionRateDate'] = true;
        $this->conversionRateDate = $conversionRateDate;

        return $this;
    }

    public function getMoneyTransaction(): ?MoneyTransaction
    {
        return $this->moneyTransaction;
    }

    public function setMoneyTransaction(?MoneyTransaction $moneyTransaction): self
    {
        $this->initialized['moneyTransaction'] = true;
        $this->moneyTransaction = $moneyTransaction;

        return $this;
    }

    public function getPartyBankAccountId(): ?string
    {
        return $this->partyBankAccountId;
    }

    public function setPartyBankAccountId(?string $partyBankAccountId): self
    {
        $this->initialized['partyBankAccountId'] = true;
        $this->partyBankAccountId = $partyBankAccountId;

        return $this;
    }

    public function getPaymentRunId(): ?string
    {
        return $this->paymentRunId;
    }

    public function setPaymentRunId(?string $paymentRunId): self
    {
        $this->initialized['paymentRunId'] = true;
        $this->paymentRunId = $paymentRunId;

        return $this;
    }

    public function getPaymentRunPaymentType(): ?string
    {
        return $this->paymentRunPaymentType;
    }

    public function setPaymentRunPaymentType(?string $paymentRunPaymentType): self
    {
        $this->initialized['paymentRunPaymentType'] = true;
        $this->paymentRunPaymentType = $paymentRunPaymentType;

        return $this;
    }

    public function getPurchaseOpenItemId(): ?string
    {
        return $this->purchaseOpenItemId;
    }

    public function setPurchaseOpenItemId(?string $purchaseOpenItemId): self
    {
        $this->initialized['purchaseOpenItemId'] = true;
        $this->purchaseOpenItemId = $purchaseOpenItemId;

        return $this;
    }

    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    public function setPurpose(?string $purpose): self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;

        return $this;
    }

    public function getRecordCurrency(): ?Currency
    {
        return $this->recordCurrency;
    }

    public function setRecordCurrency(?Currency $recordCurrency): self
    {
        $this->initialized['recordCurrency'] = true;
        $this->recordCurrency = $recordCurrency;

        return $this;
    }
}
