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
     * @var string|null
     */
    protected $amount;

    /**
     * @var string|null
     */
    protected $condition;

    /**
     * @var bool|null
     */
    protected $conditionMet;

    /**
     * @var int|null
     */
    protected $dueDate;

    /**
     * @var int|null
     */
    protected $positionNumber;

    /**
     * @var string|null
     */
    protected $salesInvoiceId;

    /**
     * @var list<OnlyId>|null
     */
    protected $salesInvoices;

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

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function setCondition(?string $condition): self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;

        return $this;
    }

    public function getConditionMet(): ?bool
    {
        return $this->conditionMet;
    }

    public function setConditionMet(?bool $conditionMet): self
    {
        $this->initialized['conditionMet'] = true;
        $this->conditionMet = $conditionMet;

        return $this;
    }

    public function getDueDate(): ?int
    {
        return $this->dueDate;
    }

    public function setDueDate(?int $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;

        return $this;
    }

    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }

    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getSalesInvoiceId(): ?string
    {
        return $this->salesInvoiceId;
    }

    public function setSalesInvoiceId(?string $salesInvoiceId): self
    {
        $this->initialized['salesInvoiceId'] = true;
        $this->salesInvoiceId = $salesInvoiceId;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getSalesInvoices(): ?array
    {
        return $this->salesInvoices;
    }

    /**
     * @param  list<OnlyId>|null  $salesInvoices
     */
    public function setSalesInvoices(?array $salesInvoices): self
    {
        $this->initialized['salesInvoices'] = true;
        $this->salesInvoices = $salesInvoices;

        return $this;
    }
}
