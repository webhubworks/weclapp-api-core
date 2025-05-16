<?php

namespace Webhubworks\WeclappApiCore\Model;

class BatchBookingRecord extends \ArrayObject
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
    protected $amount;

    /**
     * @var string|null
     */
    protected $creditAccountId;

    /**
     * @var string|null
     */
    protected $debitAccountId;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $taxId;

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

    public function getCreditAccountId(): ?string
    {
        return $this->creditAccountId;
    }

    public function setCreditAccountId(?string $creditAccountId): self
    {
        $this->initialized['creditAccountId'] = true;
        $this->creditAccountId = $creditAccountId;

        return $this;
    }

    public function getDebitAccountId(): ?string
    {
        return $this->debitAccountId;
    }

    public function setDebitAccountId(?string $debitAccountId): self
    {
        $this->initialized['debitAccountId'] = true;
        $this->debitAccountId = $debitAccountId;

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
