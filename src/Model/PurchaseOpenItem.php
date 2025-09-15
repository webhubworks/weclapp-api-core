<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOpenItem extends \ArrayObject
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
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
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
    protected $amountDiscount;
    /**
     * 
     *
     * @var string|null
     */
    protected $amountOpen;
    /**
     * 
     *
     * @var string|null
     */
    protected $amountPaid;
    /**
     * 
     *
     * @var int|null
     */
    protected $clearanceDate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $cleared;
    /**
     * 
     *
     * @var string|null
     */
    protected $openItemNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $openItemType;
    /**
     * 
     *
     * @var list<PaymentApplication>|null
     */
    protected $paymentApplications;
    /**
     * 
     *
     * @var string|null
     */
    protected $purchaseInvoiceId;
    /**
     * 
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int|null $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int|null $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
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
    public function getAmountDiscount(): ?string
    {
        return $this->amountDiscount;
    }
    /**
     * 
     *
     * @param string|null $amountDiscount
     *
     * @return self
     */
    public function setAmountDiscount(?string $amountDiscount): self
    {
        $this->initialized['amountDiscount'] = true;
        $this->amountDiscount = $amountDiscount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAmountOpen(): ?string
    {
        return $this->amountOpen;
    }
    /**
     * 
     *
     * @param string|null $amountOpen
     *
     * @return self
     */
    public function setAmountOpen(?string $amountOpen): self
    {
        $this->initialized['amountOpen'] = true;
        $this->amountOpen = $amountOpen;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAmountPaid(): ?string
    {
        return $this->amountPaid;
    }
    /**
     * 
     *
     * @param string|null $amountPaid
     *
     * @return self
     */
    public function setAmountPaid(?string $amountPaid): self
    {
        $this->initialized['amountPaid'] = true;
        $this->amountPaid = $amountPaid;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getClearanceDate(): ?int
    {
        return $this->clearanceDate;
    }
    /**
     * 
     *
     * @param int|null $clearanceDate
     *
     * @return self
     */
    public function setClearanceDate(?int $clearanceDate): self
    {
        $this->initialized['clearanceDate'] = true;
        $this->clearanceDate = $clearanceDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCleared(): ?bool
    {
        return $this->cleared;
    }
    /**
     * 
     *
     * @param bool|null $cleared
     *
     * @return self
     */
    public function setCleared(?bool $cleared): self
    {
        $this->initialized['cleared'] = true;
        $this->cleared = $cleared;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpenItemNumber(): ?string
    {
        return $this->openItemNumber;
    }
    /**
     * 
     *
     * @param string|null $openItemNumber
     *
     * @return self
     */
    public function setOpenItemNumber(?string $openItemNumber): self
    {
        $this->initialized['openItemNumber'] = true;
        $this->openItemNumber = $openItemNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpenItemType(): ?string
    {
        return $this->openItemType;
    }
    /**
     * 
     *
     * @param string|null $openItemType
     *
     * @return self
     */
    public function setOpenItemType(?string $openItemType): self
    {
        $this->initialized['openItemType'] = true;
        $this->openItemType = $openItemType;
        return $this;
    }
    /**
     * 
     *
     * @return list<PaymentApplication>|null
     */
    public function getPaymentApplications(): ?array
    {
        return $this->paymentApplications;
    }
    /**
     * 
     *
     * @param list<PaymentApplication>|null $paymentApplications
     *
     * @return self
     */
    public function setPaymentApplications(?array $paymentApplications): self
    {
        $this->initialized['paymentApplications'] = true;
        $this->paymentApplications = $paymentApplications;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseInvoiceId(): ?string
    {
        return $this->purchaseInvoiceId;
    }
    /**
     * 
     *
     * @param string|null $purchaseInvoiceId
     *
     * @return self
     */
    public function setPurchaseInvoiceId(?string $purchaseInvoiceId): self
    {
        $this->initialized['purchaseInvoiceId'] = true;
        $this->purchaseInvoiceId = $purchaseInvoiceId;
        return $this;
    }
}