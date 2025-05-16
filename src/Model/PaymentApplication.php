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
    protected $amountApplied;

    /**
     * @var string|null
     */
    protected $amountAppliedOriginCurrency;

    /**
     * @var string|null
     */
    protected $amountCostsOfMonetaryTraffic;

    /**
     * @var string|null
     */
    protected $amountDiscountApplied;

    /**
     * @var string|null
     */
    protected $createdById;

    /**
     * @var string|null
     */
    protected $moneyTransactionId;

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

    public function getAmountApplied(): ?string
    {
        return $this->amountApplied;
    }

    public function setAmountApplied(?string $amountApplied): self
    {
        $this->initialized['amountApplied'] = true;
        $this->amountApplied = $amountApplied;

        return $this;
    }

    public function getAmountAppliedOriginCurrency(): ?string
    {
        return $this->amountAppliedOriginCurrency;
    }

    public function setAmountAppliedOriginCurrency(?string $amountAppliedOriginCurrency): self
    {
        $this->initialized['amountAppliedOriginCurrency'] = true;
        $this->amountAppliedOriginCurrency = $amountAppliedOriginCurrency;

        return $this;
    }

    public function getAmountCostsOfMonetaryTraffic(): ?string
    {
        return $this->amountCostsOfMonetaryTraffic;
    }

    public function setAmountCostsOfMonetaryTraffic(?string $amountCostsOfMonetaryTraffic): self
    {
        $this->initialized['amountCostsOfMonetaryTraffic'] = true;
        $this->amountCostsOfMonetaryTraffic = $amountCostsOfMonetaryTraffic;

        return $this;
    }

    public function getAmountDiscountApplied(): ?string
    {
        return $this->amountDiscountApplied;
    }

    public function setAmountDiscountApplied(?string $amountDiscountApplied): self
    {
        $this->initialized['amountDiscountApplied'] = true;
        $this->amountDiscountApplied = $amountDiscountApplied;

        return $this;
    }

    public function getCreatedById(): ?string
    {
        return $this->createdById;
    }

    public function setCreatedById(?string $createdById): self
    {
        $this->initialized['createdById'] = true;
        $this->createdById = $createdById;

        return $this;
    }

    public function getMoneyTransactionId(): ?string
    {
        return $this->moneyTransactionId;
    }

    public function setMoneyTransactionId(?string $moneyTransactionId): self
    {
        $this->initialized['moneyTransactionId'] = true;
        $this->moneyTransactionId = $moneyTransactionId;

        return $this;
    }
}
