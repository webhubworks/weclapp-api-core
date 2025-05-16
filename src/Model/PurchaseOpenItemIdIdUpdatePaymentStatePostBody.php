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
     * @var int|null
     */
    protected $datePaid;

    /**
     * @var string|null
     */
    protected $paymentState;

    public function getDatePaid(): ?int
    {
        return $this->datePaid;
    }

    public function setDatePaid(?int $datePaid): self
    {
        $this->initialized['datePaid'] = true;
        $this->datePaid = $datePaid;

        return $this;
    }

    public function getPaymentState(): ?string
    {
        return $this->paymentState;
    }

    public function setPaymentState(?string $paymentState): self
    {
        $this->initialized['paymentState'] = true;
        $this->paymentState = $paymentState;

        return $this;
    }
}
