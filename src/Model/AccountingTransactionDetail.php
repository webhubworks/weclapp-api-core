<?php

namespace Webhubworks\WeclappApiCore\Model;

class AccountingTransactionDetail extends \ArrayObject
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
    protected $accountId;

    /**
     * @var string|null
     */
    protected $amount;

    /**
     * @var string|null
     */
    protected $debitCredit;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $taxId;

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(?string $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    public function getDebitCredit(): ?string
    {
        return $this->debitCredit;
    }

    public function setDebitCredit(?string $debitCredit): self
    {
        $this->initialized['debitCredit'] = true;
        $this->debitCredit = $debitCredit;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(?string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;

        return $this;
    }
}
