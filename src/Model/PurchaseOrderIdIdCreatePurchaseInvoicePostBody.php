<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderIdIdCreatePurchaseInvoicePostBody extends \ArrayObject
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
     * @var bool|null
     */
    protected $allowExistingInvoiceNumber;

    /**
     * @var int|null
     */
    protected $invoiceDate;

    /**
     * @var string|null
     */
    protected $invoiceNumber;

    /**
     * @var string|null
     */
    protected $invoiceType;

    /**
     * @var bool|null
     */
    protected $isGross;

    /**
     * @var string|null
     */
    protected $paymentAmount;

    public function getAllowExistingInvoiceNumber(): ?bool
    {
        return $this->allowExistingInvoiceNumber;
    }

    public function setAllowExistingInvoiceNumber(?bool $allowExistingInvoiceNumber): self
    {
        $this->initialized['allowExistingInvoiceNumber'] = true;
        $this->allowExistingInvoiceNumber = $allowExistingInvoiceNumber;

        return $this;
    }

    public function getInvoiceDate(): ?int
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(?int $invoiceDate): self
    {
        $this->initialized['invoiceDate'] = true;
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    public function getInvoiceType(): ?string
    {
        return $this->invoiceType;
    }

    public function setInvoiceType(?string $invoiceType): self
    {
        $this->initialized['invoiceType'] = true;
        $this->invoiceType = $invoiceType;

        return $this;
    }

    public function getIsGross(): ?bool
    {
        return $this->isGross;
    }

    public function setIsGross(?bool $isGross): self
    {
        $this->initialized['isGross'] = true;
        $this->isGross = $isGross;

        return $this;
    }

    public function getPaymentAmount(): ?string
    {
        return $this->paymentAmount;
    }

    public function setPaymentAmount(?string $paymentAmount): self
    {
        $this->initialized['paymentAmount'] = true;
        $this->paymentAmount = $paymentAmount;

        return $this;
    }
}
