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
     * @var int
     */
    protected $paymentRunDate;
    /**
     * 
     *
     * @var list<PaymentRunItem>
     */
    protected $paymentRunItems;
    /**
     * 
     *
     * @var string
     */
    protected $paymentRunNumber;
    /**
     * 
     *
     * @var string
     */
    protected $runByUserId;
    /**
     * 
     *
     * @var string
     */
    protected $totalAmount;
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
     * @return int
     */
    public function getPaymentRunDate(): int
    {
        return $this->paymentRunDate;
    }
    /**
     * 
     *
     * @param int $paymentRunDate
     *
     * @return self
     */
    public function setPaymentRunDate(int $paymentRunDate): self
    {
        $this->initialized['paymentRunDate'] = true;
        $this->paymentRunDate = $paymentRunDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<PaymentRunItem>
     */
    public function getPaymentRunItems(): array
    {
        return $this->paymentRunItems;
    }
    /**
     * 
     *
     * @param list<PaymentRunItem> $paymentRunItems
     *
     * @return self
     */
    public function setPaymentRunItems(array $paymentRunItems): self
    {
        $this->initialized['paymentRunItems'] = true;
        $this->paymentRunItems = $paymentRunItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentRunNumber(): string
    {
        return $this->paymentRunNumber;
    }
    /**
     * 
     *
     * @param string $paymentRunNumber
     *
     * @return self
     */
    public function setPaymentRunNumber(string $paymentRunNumber): self
    {
        $this->initialized['paymentRunNumber'] = true;
        $this->paymentRunNumber = $paymentRunNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRunByUserId(): string
    {
        return $this->runByUserId;
    }
    /**
     * 
     *
     * @param string $runByUserId
     *
     * @return self
     */
    public function setRunByUserId(string $runByUserId): self
    {
        $this->initialized['runByUserId'] = true;
        $this->runByUserId = $runByUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTotalAmount(): string
    {
        return $this->totalAmount;
    }
    /**
     * 
     *
     * @param string $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(string $totalAmount): self
    {
        $this->initialized['totalAmount'] = true;
        $this->totalAmount = $totalAmount;
        return $this;
    }
}