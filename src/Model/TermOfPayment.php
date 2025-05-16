<?php

namespace Webhubworks\WeclappApiCore\Model;

class TermOfPayment extends \ArrayObject
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
     * @var list<TermOfPaymentCondition>
     */
    protected $conditions;
    /**
     * 
     *
     * @var int
     */
    protected $datevTermOfPaymentNumber;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $dueDateOption;
    /**
     * 
     *
     * @var int
     */
    protected $fixedDay;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $numberOfDays;
    /**
     * 
     *
     * @var string
     */
    protected $reference;
    /**
     * 
     *
     * @var int
     */
    protected $validFrom;
    /**
     * 
     *
     * @var int
     */
    protected $validTo;
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
     * @return list<TermOfPaymentCondition>
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }
    /**
     * 
     *
     * @param list<TermOfPaymentCondition> $conditions
     *
     * @return self
     */
    public function setConditions(array $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDatevTermOfPaymentNumber(): int
    {
        return $this->datevTermOfPaymentNumber;
    }
    /**
     * 
     *
     * @param int $datevTermOfPaymentNumber
     *
     * @return self
     */
    public function setDatevTermOfPaymentNumber(int $datevTermOfPaymentNumber): self
    {
        $this->initialized['datevTermOfPaymentNumber'] = true;
        $this->datevTermOfPaymentNumber = $datevTermOfPaymentNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDueDateOption(): string
    {
        return $this->dueDateOption;
    }
    /**
     * 
     *
     * @param string $dueDateOption
     *
     * @return self
     */
    public function setDueDateOption(string $dueDateOption): self
    {
        $this->initialized['dueDateOption'] = true;
        $this->dueDateOption = $dueDateOption;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFixedDay(): int
    {
        return $this->fixedDay;
    }
    /**
     * 
     *
     * @param int $fixedDay
     *
     * @return self
     */
    public function setFixedDay(int $fixedDay): self
    {
        $this->initialized['fixedDay'] = true;
        $this->fixedDay = $fixedDay;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumberOfDays(): int
    {
        return $this->numberOfDays;
    }
    /**
     * 
     *
     * @param int $numberOfDays
     *
     * @return self
     */
    public function setNumberOfDays(int $numberOfDays): self
    {
        $this->initialized['numberOfDays'] = true;
        $this->numberOfDays = $numberOfDays;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValidFrom(): int
    {
        return $this->validFrom;
    }
    /**
     * 
     *
     * @param int $validFrom
     *
     * @return self
     */
    public function setValidFrom(int $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValidTo(): int
    {
        return $this->validTo;
    }
    /**
     * 
     *
     * @param int $validTo
     *
     * @return self
     */
    public function setValidTo(int $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;
        return $this;
    }
}