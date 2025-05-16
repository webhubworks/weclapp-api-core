<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderPayment extends \ArrayObject
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
    protected $condition;
    /**
     * 
     *
     * @var bool
     */
    protected $conditionMet;
    /**
     * 
     *
     * @var int
     */
    protected $dueDate;
    /**
     * 
     *
     * @var int
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $salesInvoiceId;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $salesInvoices;
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
    public function getCondition(): string
    {
        return $this->condition;
    }
    /**
     * 
     *
     * @param string $condition
     *
     * @return self
     */
    public function setCondition(string $condition): self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getConditionMet(): bool
    {
        return $this->conditionMet;
    }
    /**
     * 
     *
     * @param bool $conditionMet
     *
     * @return self
     */
    public function setConditionMet(bool $conditionMet): self
    {
        $this->initialized['conditionMet'] = true;
        $this->conditionMet = $conditionMet;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDueDate(): int
    {
        return $this->dueDate;
    }
    /**
     * 
     *
     * @param int $dueDate
     *
     * @return self
     */
    public function setDueDate(int $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesInvoiceId(): string
    {
        return $this->salesInvoiceId;
    }
    /**
     * 
     *
     * @param string $salesInvoiceId
     *
     * @return self
     */
    public function setSalesInvoiceId(string $salesInvoiceId): self
    {
        $this->initialized['salesInvoiceId'] = true;
        $this->salesInvoiceId = $salesInvoiceId;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getSalesInvoices(): array
    {
        return $this->salesInvoices;
    }
    /**
     * 
     *
     * @param list<OnlyId> $salesInvoices
     *
     * @return self
     */
    public function setSalesInvoices(array $salesInvoices): self
    {
        $this->initialized['salesInvoices'] = true;
        $this->salesInvoices = $salesInvoices;
        return $this;
    }
}