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
    protected $creditAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $debitAccountId;
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
    protected $taxId;
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
    public function getCreditAccountId(): ?string
    {
        return $this->creditAccountId;
    }
    /**
     * 
     *
     * @param string|null $creditAccountId
     *
     * @return self
     */
    public function setCreditAccountId(?string $creditAccountId): self
    {
        $this->initialized['creditAccountId'] = true;
        $this->creditAccountId = $creditAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDebitAccountId(): ?string
    {
        return $this->debitAccountId;
    }
    /**
     * 
     *
     * @param string|null $debitAccountId
     *
     * @return self
     */
    public function setDebitAccountId(?string $debitAccountId): self
    {
        $this->initialized['debitAccountId'] = true;
        $this->debitAccountId = $debitAccountId;
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
    public function getTaxId(): ?string
    {
        return $this->taxId;
    }
    /**
     * 
     *
     * @param string|null $taxId
     *
     * @return self
     */
    public function setTaxId(?string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;
        return $this;
    }
}