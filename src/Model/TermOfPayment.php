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
     * @var list<TermOfPaymentCondition>|null
     */
    protected $conditions;
    /**
     * 
     *
     * @var int|null
     */
    protected $datevTermOfPaymentNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $dueDateOption;
    /**
     * 
     *
     * @var int|null
     */
    protected $fixedDay;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $numberOfDays;
    /**
     * 
     *
     * @var string|null
     */
    protected $reference;
    /**
     * 
     *
     * @var int|null
     */
    protected $validFrom;
    /**
     * 
     *
     * @var int|null
     */
    protected $validTo;
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
     * @return list<TermOfPaymentCondition>|null
     */
    public function getConditions(): ?array
    {
        return $this->conditions;
    }
    /**
     * 
     *
     * @param list<TermOfPaymentCondition>|null $conditions
     *
     * @return self
     */
    public function setConditions(?array $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDatevTermOfPaymentNumber(): ?int
    {
        return $this->datevTermOfPaymentNumber;
    }
    /**
     * 
     *
     * @param int|null $datevTermOfPaymentNumber
     *
     * @return self
     */
    public function setDatevTermOfPaymentNumber(?int $datevTermOfPaymentNumber): self
    {
        $this->initialized['datevTermOfPaymentNumber'] = true;
        $this->datevTermOfPaymentNumber = $datevTermOfPaymentNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDueDateOption(): ?string
    {
        return $this->dueDateOption;
    }
    /**
     * 
     *
     * @param string|null $dueDateOption
     *
     * @return self
     */
    public function setDueDateOption(?string $dueDateOption): self
    {
        $this->initialized['dueDateOption'] = true;
        $this->dueDateOption = $dueDateOption;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFixedDay(): ?int
    {
        return $this->fixedDay;
    }
    /**
     * 
     *
     * @param int|null $fixedDay
     *
     * @return self
     */
    public function setFixedDay(?int $fixedDay): self
    {
        $this->initialized['fixedDay'] = true;
        $this->fixedDay = $fixedDay;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNumberOfDays(): ?int
    {
        return $this->numberOfDays;
    }
    /**
     * 
     *
     * @param int|null $numberOfDays
     *
     * @return self
     */
    public function setNumberOfDays(?int $numberOfDays): self
    {
        $this->initialized['numberOfDays'] = true;
        $this->numberOfDays = $numberOfDays;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getValidFrom(): ?int
    {
        return $this->validFrom;
    }
    /**
     * 
     *
     * @param int|null $validFrom
     *
     * @return self
     */
    public function setValidFrom(?int $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getValidTo(): ?int
    {
        return $this->validTo;
    }
    /**
     * 
     *
     * @param int|null $validTo
     *
     * @return self
     */
    public function setValidTo(?int $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;
        return $this;
    }
}