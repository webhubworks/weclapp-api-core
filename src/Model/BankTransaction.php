<?php

namespace Webhubworks\WeclappApiCore\Model;

class BankTransaction extends \ArrayObject
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
    protected $accountForDunningFeeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $additionalEcommerceId;
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
    protected $amountCostsOfMonetaryTraffic;
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
     * @var string|null
     */
    protected $ecommerceId;
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
    protected $externalConnectionId;
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
     * @var string|null
     */
    protected $paymentToleranceAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentType;
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
    public function getAdditionalEcommerceId(): ?string
    {
        return $this->additionalEcommerceId;
    }
    /**
     * 
     *
     * @param string|null $additionalEcommerceId
     *
     * @return self
     */
    public function setAdditionalEcommerceId(?string $additionalEcommerceId): self
    {
        $this->initialized['additionalEcommerceId'] = true;
        $this->additionalEcommerceId = $additionalEcommerceId;
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
    public function getAmountCostsOfMonetaryTraffic(): ?string
    {
        return $this->amountCostsOfMonetaryTraffic;
    }
    /**
     * 
     *
     * @param string|null $amountCostsOfMonetaryTraffic
     *
     * @return self
     */
    public function setAmountCostsOfMonetaryTraffic(?string $amountCostsOfMonetaryTraffic): self
    {
        $this->initialized['amountCostsOfMonetaryTraffic'] = true;
        $this->amountCostsOfMonetaryTraffic = $amountCostsOfMonetaryTraffic;
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
     * @return string|null
     */
    public function getEcommerceId(): ?string
    {
        return $this->ecommerceId;
    }
    /**
     * 
     *
     * @param string|null $ecommerceId
     *
     * @return self
     */
    public function setEcommerceId(?string $ecommerceId): self
    {
        $this->initialized['ecommerceId'] = true;
        $this->ecommerceId = $ecommerceId;
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
    public function getExternalConnectionId(): ?string
    {
        return $this->externalConnectionId;
    }
    /**
     * 
     *
     * @param string|null $externalConnectionId
     *
     * @return self
     */
    public function setExternalConnectionId(?string $externalConnectionId): self
    {
        $this->initialized['externalConnectionId'] = true;
        $this->externalConnectionId = $externalConnectionId;
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
}