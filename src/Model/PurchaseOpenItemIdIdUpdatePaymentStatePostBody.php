<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOpenItemIdIdUpdatePaymentStatePostBody extends \ArrayObject
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
     * @var int|null
     */
    protected $datePaid;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentState;
    /**
     * 
     *
     * @return int|null
     */
    public function getDatePaid(): ?int
    {
        return $this->datePaid;
    }
    /**
     * 
     *
     * @param int|null $datePaid
     *
     * @return self
     */
    public function setDatePaid(?int $datePaid): self
    {
        $this->initialized['datePaid'] = true;
        $this->datePaid = $datePaid;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentState(): ?string
    {
        return $this->paymentState;
    }
    /**
     * 
     *
     * @param string|null $paymentState
     *
     * @return self
     */
    public function setPaymentState(?string $paymentState): self
    {
        $this->initialized['paymentState'] = true;
        $this->paymentState = $paymentState;
        return $this;
    }
}