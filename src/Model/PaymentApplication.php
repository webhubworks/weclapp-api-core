<?php

namespace Webhubworks\WeclappApiCore\Model;

class PaymentApplication extends \ArrayObject
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
    protected $amountApplied;
    /**
     * 
     *
     * @var string|null
     */
    protected $amountAppliedOriginCurrency;
    /**
     * 
     *
     * @var string|null
     */
    protected $amountCostsOfMonetaryTraffic;
    /**
     * 
     *
     * @var string|null
     */
    protected $amountDiscountApplied;
    /**
     * 
     *
     * @var string|null
     */
    protected $bankTransactionId;
    /**
     * 
     *
     * @var string|null
     */
    protected $cashTransactionId;
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
    protected $openItemClearingId;
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
    public function getAmountApplied(): ?string
    {
        return $this->amountApplied;
    }
    /**
     * 
     *
     * @param string|null $amountApplied
     *
     * @return self
     */
    public function setAmountApplied(?string $amountApplied): self
    {
        $this->initialized['amountApplied'] = true;
        $this->amountApplied = $amountApplied;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAmountAppliedOriginCurrency(): ?string
    {
        return $this->amountAppliedOriginCurrency;
    }
    /**
     * 
     *
     * @param string|null $amountAppliedOriginCurrency
     *
     * @return self
     */
    public function setAmountAppliedOriginCurrency(?string $amountAppliedOriginCurrency): self
    {
        $this->initialized['amountAppliedOriginCurrency'] = true;
        $this->amountAppliedOriginCurrency = $amountAppliedOriginCurrency;
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
     * @return string|null
     */
    public function getAmountDiscountApplied(): ?string
    {
        return $this->amountDiscountApplied;
    }
    /**
     * 
     *
     * @param string|null $amountDiscountApplied
     *
     * @return self
     */
    public function setAmountDiscountApplied(?string $amountDiscountApplied): self
    {
        $this->initialized['amountDiscountApplied'] = true;
        $this->amountDiscountApplied = $amountDiscountApplied;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBankTransactionId(): ?string
    {
        return $this->bankTransactionId;
    }
    /**
     * 
     *
     * @param string|null $bankTransactionId
     *
     * @return self
     */
    public function setBankTransactionId(?string $bankTransactionId): self
    {
        $this->initialized['bankTransactionId'] = true;
        $this->bankTransactionId = $bankTransactionId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCashTransactionId(): ?string
    {
        return $this->cashTransactionId;
    }
    /**
     * 
     *
     * @param string|null $cashTransactionId
     *
     * @return self
     */
    public function setCashTransactionId(?string $cashTransactionId): self
    {
        $this->initialized['cashTransactionId'] = true;
        $this->cashTransactionId = $cashTransactionId;
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
    public function getOpenItemClearingId(): ?string
    {
        return $this->openItemClearingId;
    }
    /**
     * 
     *
     * @param string|null $openItemClearingId
     *
     * @return self
     */
    public function setOpenItemClearingId(?string $openItemClearingId): self
    {
        $this->initialized['openItemClearingId'] = true;
        $this->openItemClearingId = $openItemClearingId;
        return $this;
    }
}