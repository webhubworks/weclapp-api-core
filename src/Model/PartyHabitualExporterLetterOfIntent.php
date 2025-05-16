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
     * @var bool
     */
    protected $automaticallySuggestInInvoice;
    /**
     * 
     *
     * @var int
     */
    protected $date;
    /**
     * 
     *
     * @var bool
     */
    protected $fromSupplier;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $invoices;
    /**
     * 
     *
     * @var string
     */
    protected $numberDeclarer;
    /**
     * 
     *
     * @var string
     */
    protected $numberSupplier;
    /**
     * 
     *
     * @var string
     */
    protected $totalAmount;
    /**
     * 
     *
     * @var string
     */
    protected $type;
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
     * @return bool
     */
    public function getAutomaticallySuggestInInvoice(): bool
    {
        return $this->automaticallySuggestInInvoice;
    }
    /**
     * 
     *
     * @param bool $automaticallySuggestInInvoice
     *
     * @return self
     */
    public function setAutomaticallySuggestInInvoice(bool $automaticallySuggestInInvoice): self
    {
        $this->initialized['automaticallySuggestInInvoice'] = true;
        $this->automaticallySuggestInInvoice = $automaticallySuggestInInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param int $date
     *
     * @return self
     */
    public function setDate(int $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFromSupplier(): bool
    {
        return $this->fromSupplier;
    }
    /**
     * 
     *
     * @param bool $fromSupplier
     *
     * @return self
     */
    public function setFromSupplier(bool $fromSupplier): self
    {
        $this->initialized['fromSupplier'] = true;
        $this->fromSupplier = $fromSupplier;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getInvoices(): array
    {
        return $this->invoices;
    }
    /**
     * 
     *
     * @param list<OnlyId> $invoices
     *
     * @return self
     */
    public function setInvoices(array $invoices): self
    {
        $this->initialized['invoices'] = true;
        $this->invoices = $invoices;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNumberDeclarer(): string
    {
        return $this->numberDeclarer;
    }
    /**
     * 
     *
     * @param string $numberDeclarer
     *
     * @return self
     */
    public function setNumberDeclarer(string $numberDeclarer): self
    {
        $this->initialized['numberDeclarer'] = true;
        $this->numberDeclarer = $numberDeclarer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNumberSupplier(): string
    {
        return $this->numberSupplier;
    }
    /**
     * 
     *
     * @param string $numberSupplier
     *
     * @return self
     */
    public function setNumberSupplier(string $numberSupplier): self
    {
        $this->initialized['numberSupplier'] = true;
        $this->numberSupplier = $numberSupplier;
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
    /**
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}