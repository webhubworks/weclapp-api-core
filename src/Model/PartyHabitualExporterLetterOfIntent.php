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
     * @var bool|null
     */
    protected $automaticallySuggestInInvoice;
    /**
     * 
     *
     * @var int|null
     */
    protected $date;
    /**
     * 
     *
     * @var bool|null
     */
    protected $fromSupplier;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $invoices;
    /**
     * 
     *
     * @var string|null
     */
    protected $numberDeclarer;
    /**
     * 
     *
     * @var string|null
     */
    protected $numberSupplier;
    /**
     * 
     *
     * @var string|null
     */
    protected $totalAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
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
     * @return bool|null
     */
    public function getAutomaticallySuggestInInvoice(): ?bool
    {
        return $this->automaticallySuggestInInvoice;
    }
    /**
     * 
     *
     * @param bool|null $automaticallySuggestInInvoice
     *
     * @return self
     */
    public function setAutomaticallySuggestInInvoice(?bool $automaticallySuggestInInvoice): self
    {
        $this->initialized['automaticallySuggestInInvoice'] = true;
        $this->automaticallySuggestInInvoice = $automaticallySuggestInInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDate(): ?int
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param int|null $date
     *
     * @return self
     */
    public function setDate(?int $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFromSupplier(): ?bool
    {
        return $this->fromSupplier;
    }
    /**
     * 
     *
     * @param bool|null $fromSupplier
     *
     * @return self
     */
    public function setFromSupplier(?bool $fromSupplier): self
    {
        $this->initialized['fromSupplier'] = true;
        $this->fromSupplier = $fromSupplier;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getInvoices(): ?array
    {
        return $this->invoices;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $invoices
     *
     * @return self
     */
    public function setInvoices(?array $invoices): self
    {
        $this->initialized['invoices'] = true;
        $this->invoices = $invoices;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNumberDeclarer(): ?string
    {
        return $this->numberDeclarer;
    }
    /**
     * 
     *
     * @param string|null $numberDeclarer
     *
     * @return self
     */
    public function setNumberDeclarer(?string $numberDeclarer): self
    {
        $this->initialized['numberDeclarer'] = true;
        $this->numberDeclarer = $numberDeclarer;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNumberSupplier(): ?string
    {
        return $this->numberSupplier;
    }
    /**
     * 
     *
     * @param string|null $numberSupplier
     *
     * @return self
     */
    public function setNumberSupplier(?string $numberSupplier): self
    {
        $this->initialized['numberSupplier'] = true;
        $this->numberSupplier = $numberSupplier;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }
    /**
     * 
     *
     * @param string|null $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(?string $totalAmount): self
    {
        $this->initialized['totalAmount'] = true;
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}