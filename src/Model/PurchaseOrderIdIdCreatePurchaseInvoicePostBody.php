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
     * 
     *
     * @var bool|null
     */
    protected $allowExistingInvoiceNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $invoiceDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoiceNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoiceType;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isGross;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentAmount;
    /**
     * 
     *
     * @return bool|null
     */
    public function getAllowExistingInvoiceNumber(): ?bool
    {
        return $this->allowExistingInvoiceNumber;
    }
    /**
     * 
     *
     * @param bool|null $allowExistingInvoiceNumber
     *
     * @return self
     */
    public function setAllowExistingInvoiceNumber(?bool $allowExistingInvoiceNumber): self
    {
        $this->initialized['allowExistingInvoiceNumber'] = true;
        $this->allowExistingInvoiceNumber = $allowExistingInvoiceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInvoiceDate(): ?int
    {
        return $this->invoiceDate;
    }
    /**
     * 
     *
     * @param int|null $invoiceDate
     *
     * @return self
     */
    public function setInvoiceDate(?int $invoiceDate): self
    {
        $this->initialized['invoiceDate'] = true;
        $this->invoiceDate = $invoiceDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }
    /**
     * 
     *
     * @param string|null $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoiceType(): ?string
    {
        return $this->invoiceType;
    }
    /**
     * 
     *
     * @param string|null $invoiceType
     *
     * @return self
     */
    public function setInvoiceType(?string $invoiceType): self
    {
        $this->initialized['invoiceType'] = true;
        $this->invoiceType = $invoiceType;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsGross(): ?bool
    {
        return $this->isGross;
    }
    /**
     * 
     *
     * @param bool|null $isGross
     *
     * @return self
     */
    public function setIsGross(?bool $isGross): self
    {
        $this->initialized['isGross'] = true;
        $this->isGross = $isGross;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentAmount(): ?string
    {
        return $this->paymentAmount;
    }
    /**
     * 
     *
     * @param string|null $paymentAmount
     *
     * @return self
     */
    public function setPaymentAmount(?string $paymentAmount): self
    {
        $this->initialized['paymentAmount'] = true;
        $this->paymentAmount = $paymentAmount;
        return $this;
    }
}