<?php

namespace Webhubworks\WeclappApiCore\Model;

class PaymentRun extends \ArrayObject
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
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var int|null
     */
    protected $paymentRunDate;

    /**
     * @var list<PaymentRunItem>|null
     */
    protected $paymentRunItems;

    /**
     * @var string|null
     */
    protected $paymentRunNumber;

    /**
     * @var string|null
     */
    protected $runByUserId;

    /**
     * @var string|null
     */
    protected $totalAmount;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getPaymentRunDate(): ?int
    {
        return $this->paymentRunDate;
    }

    public function setPaymentRunDate(?int $paymentRunDate): self
    {
        $this->initialized['paymentRunDate'] = true;
        $this->paymentRunDate = $paymentRunDate;

        return $this;
    }

    /**
     * @return list<PaymentRunItem>|null
     */
    public function getPaymentRunItems(): ?array
    {
        return $this->paymentRunItems;
    }

    /**
     * @param  list<PaymentRunItem>|null  $paymentRunItems
     */
    public function setPaymentRunItems(?array $paymentRunItems): self
    {
        $this->initialized['paymentRunItems'] = true;
        $this->paymentRunItems = $paymentRunItems;

        return $this;
    }

    public function getPaymentRunNumber(): ?string
    {
        return $this->paymentRunNumber;
    }

    public function setPaymentRunNumber(?string $paymentRunNumber): self
    {
        $this->initialized['paymentRunNumber'] = true;
        $this->paymentRunNumber = $paymentRunNumber;

        return $this;
    }

    public function getRunByUserId(): ?string
    {
        return $this->runByUserId;
    }

    public function setRunByUserId(?string $runByUserId): self
    {
        $this->initialized['runByUserId'] = true;
        $this->runByUserId = $runByUserId;

        return $this;
    }

    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(?string $totalAmount): self
    {
        $this->initialized['totalAmount'] = true;
        $this->totalAmount = $totalAmount;

        return $this;
    }
}
