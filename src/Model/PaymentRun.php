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
     * @var int|null
     */
    protected $paymentRunDate;
    /**
     * 
     *
     * @var list<PaymentRunItem>|null
     */
    protected $paymentRunItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $paymentRunNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $runByUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $totalAmount;
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
     * @return int|null
     */
    public function getPaymentRunDate(): ?int
    {
        return $this->paymentRunDate;
    }
    /**
     * 
     *
     * @param int|null $paymentRunDate
     *
     * @return self
     */
    public function setPaymentRunDate(?int $paymentRunDate): self
    {
        $this->initialized['paymentRunDate'] = true;
        $this->paymentRunDate = $paymentRunDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<PaymentRunItem>|null
     */
    public function getPaymentRunItems(): ?array
    {
        return $this->paymentRunItems;
    }
    /**
     * 
     *
     * @param list<PaymentRunItem>|null $paymentRunItems
     *
     * @return self
     */
    public function setPaymentRunItems(?array $paymentRunItems): self
    {
        $this->initialized['paymentRunItems'] = true;
        $this->paymentRunItems = $paymentRunItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPaymentRunNumber(): ?string
    {
        return $this->paymentRunNumber;
    }
    /**
     * 
     *
     * @param string|null $paymentRunNumber
     *
     * @return self
     */
    public function setPaymentRunNumber(?string $paymentRunNumber): self
    {
        $this->initialized['paymentRunNumber'] = true;
        $this->paymentRunNumber = $paymentRunNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRunByUserId(): ?string
    {
        return $this->runByUserId;
    }
    /**
     * 
     *
     * @param string|null $runByUserId
     *
     * @return self
     */
    public function setRunByUserId(?string $runByUserId): self
    {
        $this->initialized['runByUserId'] = true;
        $this->runByUserId = $runByUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }
    /**
     * 
     *
     * @param string|null $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(?string $totalAmount): self
    {
        $this->initialized['totalAmount'] = true;
        $this->totalAmount = $totalAmount;
        return $this;
    }
}