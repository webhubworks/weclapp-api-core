<?php

namespace Webhubworks\WeclappApiCore\Model;

class PartyHabitualExporterLetterOfIntent extends \ArrayObject
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
     * @var bool|null
     */
    protected $automaticallySuggestInInvoice;

    /**
     * @var int|null
     */
    protected $date;

    /**
     * @var bool|null
     */
    protected $fromSupplier;

    /**
     * @var list<OnlyId>|null
     */
    protected $invoices;

    /**
     * @var string|null
     */
    protected $numberDeclarer;

    /**
     * @var string|null
     */
    protected $numberSupplier;

    /**
     * @var string|null
     */
    protected $totalAmount;

    /**
     * @var string|null
     */
    protected $type;

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

    public function getAutomaticallySuggestInInvoice(): ?bool
    {
        return $this->automaticallySuggestInInvoice;
    }

    public function setAutomaticallySuggestInInvoice(?bool $automaticallySuggestInInvoice): self
    {
        $this->initialized['automaticallySuggestInInvoice'] = true;
        $this->automaticallySuggestInInvoice = $automaticallySuggestInInvoice;

        return $this;
    }

    public function getDate(): ?int
    {
        return $this->date;
    }

    public function setDate(?int $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function getFromSupplier(): ?bool
    {
        return $this->fromSupplier;
    }

    public function setFromSupplier(?bool $fromSupplier): self
    {
        $this->initialized['fromSupplier'] = true;
        $this->fromSupplier = $fromSupplier;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getInvoices(): ?array
    {
        return $this->invoices;
    }

    /**
     * @param  list<OnlyId>|null  $invoices
     */
    public function setInvoices(?array $invoices): self
    {
        $this->initialized['invoices'] = true;
        $this->invoices = $invoices;

        return $this;
    }

    public function getNumberDeclarer(): ?string
    {
        return $this->numberDeclarer;
    }

    public function setNumberDeclarer(?string $numberDeclarer): self
    {
        $this->initialized['numberDeclarer'] = true;
        $this->numberDeclarer = $numberDeclarer;

        return $this;
    }

    public function getNumberSupplier(): ?string
    {
        return $this->numberSupplier;
    }

    public function setNumberSupplier(?string $numberSupplier): self
    {
        $this->initialized['numberSupplier'] = true;
        $this->numberSupplier = $numberSupplier;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
