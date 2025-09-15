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
    protected $bankTransactionId;
    /**
     * 
     *
     * @var string|null
     */
    protected $cashAccountTransactionId;
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
    public function getCashAccountTransactionId(): ?string
    {
        return $this->cashAccountTransactionId;
    }
    /**
     * 
     *
     * @param string|null $cashAccountTransactionId
     *
     * @return self
     */
    public function setCashAccountTransactionId(?string $cashAccountTransactionId): self
    {
        $this->initialized['cashAccountTransactionId'] = true;
        $this->cashAccountTransactionId = $cashAccountTransactionId;
        return $this;
    }
}