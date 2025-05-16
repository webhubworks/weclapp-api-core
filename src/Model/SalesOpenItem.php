<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOpenItem extends \ArrayObject
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
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $amount;

    /**
     * @var string
     */
    protected $amountDiscount;

    /**
     * @var string
     */
    protected $amountOpen;

    /**
     * @var string
     */
    protected $amountPaid;

    /**
     * @var int
     */
    protected $clearanceDate;

    /**
     * @var bool
     */
    protected $cleared;

    /**
     * @var string
     */
    protected $openItemNumber;

    /**
     * @var string
     */
    protected $openItemType;

    /**
     * @var list<PaymentApplication>
     */
    protected $paymentApplications;

    /**
     * @var string
     */
    protected $salesInvoiceId;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    public function getAmountDiscount(): string
    {
        return $this->amountDiscount;
    }

    public function setAmountDiscount(string $amountDiscount): self
    {
        $this->initialized['amountDiscount'] = true;
        $this->amountDiscount = $amountDiscount;

        return $this;
    }

    public function getAmountOpen(): string
    {
        return $this->amountOpen;
    }

    public function setAmountOpen(string $amountOpen): self
    {
        $this->initialized['amountOpen'] = true;
        $this->amountOpen = $amountOpen;

        return $this;
    }

    public function getAmountPaid(): string
    {
        return $this->amountPaid;
    }

    public function setAmountPaid(string $amountPaid): self
    {
        $this->initialized['amountPaid'] = true;
        $this->amountPaid = $amountPaid;

        return $this;
    }

    public function getClearanceDate(): int
    {
        return $this->clearanceDate;
    }

    public function setClearanceDate(int $clearanceDate): self
    {
        $this->initialized['clearanceDate'] = true;
        $this->clearanceDate = $clearanceDate;

        return $this;
    }

    public function getCleared(): bool
    {
        return $this->cleared;
    }

    public function setCleared(bool $cleared): self
    {
        $this->initialized['cleared'] = true;
        $this->cleared = $cleared;

        return $this;
    }

    public function getOpenItemNumber(): string
    {
        return $this->openItemNumber;
    }

    public function setOpenItemNumber(string $openItemNumber): self
    {
        $this->initialized['openItemNumber'] = true;
        $this->openItemNumber = $openItemNumber;

        return $this;
    }

    public function getOpenItemType(): string
    {
        return $this->openItemType;
    }

    public function setOpenItemType(string $openItemType): self
    {
        $this->initialized['openItemType'] = true;
        $this->openItemType = $openItemType;

        return $this;
    }

    /**
     * @return list<PaymentApplication>
     */
    public function getPaymentApplications(): array
    {
        return $this->paymentApplications;
    }

    /**
     * @param  list<PaymentApplication>  $paymentApplications
     */
    public function setPaymentApplications(array $paymentApplications): self
    {
        $this->initialized['paymentApplications'] = true;
        $this->paymentApplications = $paymentApplications;

        return $this;
    }

    public function getSalesInvoiceId(): string
    {
        return $this->salesInvoiceId;
    }

    public function setSalesInvoiceId(string $salesInvoiceId): self
    {
        $this->initialized['salesInvoiceId'] = true;
        $this->salesInvoiceId = $salesInvoiceId;

        return $this;
    }
}
