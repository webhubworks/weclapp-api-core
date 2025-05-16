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
     * @var list<TermOfPaymentCondition>|null
     */
    protected $conditions;

    /**
     * @var int|null
     */
    protected $datevTermOfPaymentNumber;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $dueDateOption;

    /**
     * @var int|null
     */
    protected $fixedDay;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $numberOfDays;

    /**
     * @var string|null
     */
    protected $reference;

    /**
     * @var int|null
     */
    protected $validFrom;

    /**
     * @var int|null
     */
    protected $validTo;

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

    /**
     * @return list<TermOfPaymentCondition>|null
     */
    public function getConditions(): ?array
    {
        return $this->conditions;
    }

    /**
     * @param  list<TermOfPaymentCondition>|null  $conditions
     */
    public function setConditions(?array $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;

        return $this;
    }

    public function getDatevTermOfPaymentNumber(): ?int
    {
        return $this->datevTermOfPaymentNumber;
    }

    public function setDatevTermOfPaymentNumber(?int $datevTermOfPaymentNumber): self
    {
        $this->initialized['datevTermOfPaymentNumber'] = true;
        $this->datevTermOfPaymentNumber = $datevTermOfPaymentNumber;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getDueDateOption(): ?string
    {
        return $this->dueDateOption;
    }

    public function setDueDateOption(?string $dueDateOption): self
    {
        $this->initialized['dueDateOption'] = true;
        $this->dueDateOption = $dueDateOption;

        return $this;
    }

    public function getFixedDay(): ?int
    {
        return $this->fixedDay;
    }

    public function setFixedDay(?int $fixedDay): self
    {
        $this->initialized['fixedDay'] = true;
        $this->fixedDay = $fixedDay;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getNumberOfDays(): ?int
    {
        return $this->numberOfDays;
    }

    public function setNumberOfDays(?int $numberOfDays): self
    {
        $this->initialized['numberOfDays'] = true;
        $this->numberOfDays = $numberOfDays;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;

        return $this;
    }

    public function getValidFrom(): ?int
    {
        return $this->validFrom;
    }

    public function setValidFrom(?int $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;

        return $this;
    }

    public function getValidTo(): ?int
    {
        return $this->validTo;
    }

    public function setValidTo(?int $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;

        return $this;
    }
}
