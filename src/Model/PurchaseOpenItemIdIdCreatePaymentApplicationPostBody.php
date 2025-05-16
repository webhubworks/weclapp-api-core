<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOpenItemIdIdCreatePaymentApplicationPostBody extends \ArrayObject
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
    protected $moneyTransactionId;
    /**
     * 
     *
     * @return string|null
     */
    public function getMoneyTransactionId(): ?string
    {
        return $this->moneyTransactionId;
    }
    /**
     * 
     *
     * @param string|null $moneyTransactionId
     *
     * @return self
     */
    public function setMoneyTransactionId(?string $moneyTransactionId): self
    {
        $this->initialized['moneyTransactionId'] = true;
        $this->moneyTransactionId = $moneyTransactionId;
        return $this;
    }
}