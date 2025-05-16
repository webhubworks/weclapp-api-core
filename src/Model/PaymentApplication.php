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
    protected $amountApplied;
    /**
     * 
     *
     * @var string
     */
    protected $amountAppliedOriginCurrency;
    /**
     * 
     *
     * @var string
     */
    protected $amountCostsOfMonetaryTraffic;
    /**
     * 
     *
     * @var string
     */
    protected $amountDiscountApplied;
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
    protected $moneyTransactionId;
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
    public function getAmountApplied(): string
    {
        return $this->amountApplied;
    }
    /**
     * 
     *
     * @param string $amountApplied
     *
     * @return self
     */
    public function setAmountApplied(string $amountApplied): self
    {
        $this->initialized['amountApplied'] = true;
        $this->amountApplied = $amountApplied;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAmountAppliedOriginCurrency(): string
    {
        return $this->amountAppliedOriginCurrency;
    }
    /**
     * 
     *
     * @param string $amountAppliedOriginCurrency
     *
     * @return self
     */
    public function setAmountAppliedOriginCurrency(string $amountAppliedOriginCurrency): self
    {
        $this->initialized['amountAppliedOriginCurrency'] = true;
        $this->amountAppliedOriginCurrency = $amountAppliedOriginCurrency;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAmountCostsOfMonetaryTraffic(): string
    {
        return $this->amountCostsOfMonetaryTraffic;
    }
    /**
     * 
     *
     * @param string $amountCostsOfMonetaryTraffic
     *
     * @return self
     */
    public function setAmountCostsOfMonetaryTraffic(string $amountCostsOfMonetaryTraffic): self
    {
        $this->initialized['amountCostsOfMonetaryTraffic'] = true;
        $this->amountCostsOfMonetaryTraffic = $amountCostsOfMonetaryTraffic;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAmountDiscountApplied(): string
    {
        return $this->amountDiscountApplied;
    }
    /**
     * 
     *
     * @param string $amountDiscountApplied
     *
     * @return self
     */
    public function setAmountDiscountApplied(string $amountDiscountApplied): self
    {
        $this->initialized['amountDiscountApplied'] = true;
        $this->amountDiscountApplied = $amountDiscountApplied;
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
    public function getMoneyTransactionId(): string
    {
        return $this->moneyTransactionId;
    }
    /**
     * 
     *
     * @param string $moneyTransactionId
     *
     * @return self
     */
    public function setMoneyTransactionId(string $moneyTransactionId): self
    {
        $this->initialized['moneyTransactionId'] = true;
        $this->moneyTransactionId = $moneyTransactionId;
        return $this;
    }
}