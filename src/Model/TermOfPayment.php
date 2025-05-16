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
     * @var list<TermOfPaymentCondition>
     */
    protected $conditions;

    /**
     * @var int
     */
    protected $datevTermOfPaymentNumber;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $dueDateOption;

    /**
     * @var int
     */
    protected $fixedDay;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $numberOfDays;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var int
     */
    protected $validFrom;

    /**
     * @var int
     */
    protected $validTo;

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

    /**
     * @return list<TermOfPaymentCondition>
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    /**
     * @param  list<TermOfPaymentCondition>  $conditions
     */
    public function setConditions(array $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;

        return $this;
    }

    public function getDatevTermOfPaymentNumber(): int
    {
        return $this->datevTermOfPaymentNumber;
    }

    public function setDatevTermOfPaymentNumber(int $datevTermOfPaymentNumber): self
    {
        $this->initialized['datevTermOfPaymentNumber'] = true;
        $this->datevTermOfPaymentNumber = $datevTermOfPaymentNumber;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getDueDateOption(): string
    {
        return $this->dueDateOption;
    }

    public function setDueDateOption(string $dueDateOption): self
    {
        $this->initialized['dueDateOption'] = true;
        $this->dueDateOption = $dueDateOption;

        return $this;
    }

    public function getFixedDay(): int
    {
        return $this->fixedDay;
    }

    public function setFixedDay(int $fixedDay): self
    {
        $this->initialized['fixedDay'] = true;
        $this->fixedDay = $fixedDay;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getNumberOfDays(): int
    {
        return $this->numberOfDays;
    }

    public function setNumberOfDays(int $numberOfDays): self
    {
        $this->initialized['numberOfDays'] = true;
        $this->numberOfDays = $numberOfDays;

        return $this;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;

        return $this;
    }

    public function getValidFrom(): int
    {
        return $this->validFrom;
    }

    public function setValidFrom(int $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;

        return $this;
    }

    public function getValidTo(): int
    {
        return $this->validTo;
    }

    public function setValidTo(int $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;

        return $this;
    }
}
