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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @var string
     */
    protected $amount;
    /**
     * 
     *
     * @var string
     */
    protected $amountDiscount;
    /**
     * 
     *
     * @var string
     */
    protected $amountOpen;
    /**
     * 
     *
     * @var string
     */
    protected $amountPaid;
    /**
     * 
     *
     * @var int
     */
    protected $clearanceDate;
    /**
     * 
     *
     * @var bool
     */
    protected $cleared;
    /**
     * 
     *
     * @var string
     */
    protected $openItemNumber;
    /**
     * 
     *
     * @var string
     */
    protected $openItemType;
    /**
     * 
     *
     * @var list<PaymentApplication>
     */
    protected $paymentApplications;
    /**
     * 
     *
     * @var string
     */
    protected $purchaseInvoiceId;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAmountDiscount(): string
    {
        return $this->amountDiscount;
    }
    /**
     * 
     *
     * @param string $amountDiscount
     *
     * @return self
     */
    public function setAmountDiscount(string $amountDiscount): self
    {
        $this->initialized['amountDiscount'] = true;
        $this->amountDiscount = $amountDiscount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAmountOpen(): string
    {
        return $this->amountOpen;
    }
    /**
     * 
     *
     * @param string $amountOpen
     *
     * @return self
     */
    public function setAmountOpen(string $amountOpen): self
    {
        $this->initialized['amountOpen'] = true;
        $this->amountOpen = $amountOpen;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAmountPaid(): string
    {
        return $this->amountPaid;
    }
    /**
     * 
     *
     * @param string $amountPaid
     *
     * @return self
     */
    public function setAmountPaid(string $amountPaid): self
    {
        $this->initialized['amountPaid'] = true;
        $this->amountPaid = $amountPaid;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getClearanceDate(): int
    {
        return $this->clearanceDate;
    }
    /**
     * 
     *
     * @param int $clearanceDate
     *
     * @return self
     */
    public function setClearanceDate(int $clearanceDate): self
    {
        $this->initialized['clearanceDate'] = true;
        $this->clearanceDate = $clearanceDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCleared(): bool
    {
        return $this->cleared;
    }
    /**
     * 
     *
     * @param bool $cleared
     *
     * @return self
     */
    public function setCleared(bool $cleared): self
    {
        $this->initialized['cleared'] = true;
        $this->cleared = $cleared;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOpenItemNumber(): string
    {
        return $this->openItemNumber;
    }
    /**
     * 
     *
     * @param string $openItemNumber
     *
     * @return self
     */
    public function setOpenItemNumber(string $openItemNumber): self
    {
        $this->initialized['openItemNumber'] = true;
        $this->openItemNumber = $openItemNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOpenItemType(): string
    {
        return $this->openItemType;
    }
    /**
     * 
     *
     * @param string $openItemType
     *
     * @return self
     */
    public function setOpenItemType(string $openItemType): self
    {
        $this->initialized['openItemType'] = true;
        $this->openItemType = $openItemType;
        return $this;
    }
    /**
     * 
     *
     * @return list<PaymentApplication>
     */
    public function getPaymentApplications(): array
    {
        return $this->paymentApplications;
    }
    /**
     * 
     *
     * @param list<PaymentApplication> $paymentApplications
     *
     * @return self
     */
    public function setPaymentApplications(array $paymentApplications): self
    {
        $this->initialized['paymentApplications'] = true;
        $this->paymentApplications = $paymentApplications;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseInvoiceId(): string
    {
        return $this->purchaseInvoiceId;
    }
    /**
     * 
     *
     * @param string $purchaseInvoiceId
     *
     * @return self
     */
    public function setPurchaseInvoiceId(string $purchaseInvoiceId): self
    {
        $this->initialized['purchaseInvoiceId'] = true;
        $this->purchaseInvoiceId = $purchaseInvoiceId;
        return $this;
    }
}