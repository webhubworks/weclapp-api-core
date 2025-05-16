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
     * @var bool
     */
    protected $allowExistingInvoiceNumber;
    /**
     * 
     *
     * @var int
     */
    protected $invoiceDate;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceNumber;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceType;
    /**
     * 
     *
     * @var bool
     */
    protected $isGross;
    /**
     * 
     *
     * @var string
     */
    protected $paymentAmount;
    /**
     * 
     *
     * @return bool
     */
    public function getAllowExistingInvoiceNumber(): bool
    {
        return $this->allowExistingInvoiceNumber;
    }
    /**
     * 
     *
     * @param bool $allowExistingInvoiceNumber
     *
     * @return self
     */
    public function setAllowExistingInvoiceNumber(bool $allowExistingInvoiceNumber): self
    {
        $this->initialized['allowExistingInvoiceNumber'] = true;
        $this->allowExistingInvoiceNumber = $allowExistingInvoiceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getInvoiceDate(): int
    {
        return $this->invoiceDate;
    }
    /**
     * 
     *
     * @param int $invoiceDate
     *
     * @return self
     */
    public function setInvoiceDate(int $invoiceDate): self
    {
        $this->initialized['invoiceDate'] = true;
        $this->invoiceDate = $invoiceDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }
    /**
     * 
     *
     * @param string $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoiceType(): string
    {
        return $this->invoiceType;
    }
    /**
     * 
     *
     * @param string $invoiceType
     *
     * @return self
     */
    public function setInvoiceType(string $invoiceType): self
    {
        $this->initialized['invoiceType'] = true;
        $this->invoiceType = $invoiceType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsGross(): bool
    {
        return $this->isGross;
    }
    /**
     * 
     *
     * @param bool $isGross
     *
     * @return self
     */
    public function setIsGross(bool $isGross): self
    {
        $this->initialized['isGross'] = true;
        $this->isGross = $isGross;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentAmount(): string
    {
        return $this->paymentAmount;
    }
    /**
     * 
     *
     * @param string $paymentAmount
     *
     * @return self
     */
    public function setPaymentAmount(string $paymentAmount): self
    {
        $this->initialized['paymentAmount'] = true;
        $this->paymentAmount = $paymentAmount;
        return $this;
    }
}