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
     * @var bool
     */
    protected $automaticallySuggestInInvoice;

    /**
     * @var int
     */
    protected $date;

    /**
     * @var bool
     */
    protected $fromSupplier;

    /**
     * @var list<OnlyId>
     */
    protected $invoices;

    /**
     * @var string
     */
    protected $numberDeclarer;

    /**
     * @var string
     */
    protected $numberSupplier;

    /**
     * @var string
     */
    protected $totalAmount;

    /**
     * @var string
     */
    protected $type;

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

    public function getAutomaticallySuggestInInvoice(): bool
    {
        return $this->automaticallySuggestInInvoice;
    }

    public function setAutomaticallySuggestInInvoice(bool $automaticallySuggestInInvoice): self
    {
        $this->initialized['automaticallySuggestInInvoice'] = true;
        $this->automaticallySuggestInInvoice = $automaticallySuggestInInvoice;

        return $this;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function getFromSupplier(): bool
    {
        return $this->fromSupplier;
    }

    public function setFromSupplier(bool $fromSupplier): self
    {
        $this->initialized['fromSupplier'] = true;
        $this->fromSupplier = $fromSupplier;

        return $this;
    }

    /**
     * @return list<OnlyId>
     */
    public function getInvoices(): array
    {
        return $this->invoices;
    }

    /**
     * @param  list<OnlyId>  $invoices
     */
    public function setInvoices(array $invoices): self
    {
        $this->initialized['invoices'] = true;
        $this->invoices = $invoices;

        return $this;
    }

    public function getNumberDeclarer(): string
    {
        return $this->numberDeclarer;
    }

    public function setNumberDeclarer(string $numberDeclarer): self
    {
        $this->initialized['numberDeclarer'] = true;
        $this->numberDeclarer = $numberDeclarer;

        return $this;
    }

    public function getNumberSupplier(): string
    {
        return $this->numberSupplier;
    }

    public function setNumberSupplier(string $numberSupplier): self
    {
        $this->initialized['numberSupplier'] = true;
        $this->numberSupplier = $numberSupplier;

        return $this;
    }

    public function getTotalAmount(): string
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(string $totalAmount): self
    {
        $this->initialized['totalAmount'] = true;
        $this->totalAmount = $totalAmount;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
