<?php

namespace Webhubworks\WeclappApiCore\Model;

class NumberRangeValue extends \ArrayObject
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
     * @var list<OnlyId>|null
     */
    protected $articleCategories;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $creditNoteInvoiceTypes;
    /**
     * 
     *
     * @var int|null
     */
    protected $interval;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastValue;
    /**
     * 
     *
     * @var int|null
     */
    protected $length;
    /**
     * 
     *
     * @var string|null
     */
    protected $numberRangeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $prefix;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $salesChannels;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $salesInvoiceTypes;
    /**
     * 
     *
     * @var string|null
     */
    protected $suffix;
    /**
     * 
     *
     * @var int|null
     */
    protected $validFromDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $validToDate;
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
     * @return list<OnlyId>|null
     */
    public function getArticleCategories(): ?array
    {
        return $this->articleCategories;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $articleCategories
     *
     * @return self
     */
    public function setArticleCategories(?array $articleCategories): self
    {
        $this->initialized['articleCategories'] = true;
        $this->articleCategories = $articleCategories;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCreditNoteInvoiceTypes(): ?array
    {
        return $this->creditNoteInvoiceTypes;
    }
    /**
     * 
     *
     * @param list<string>|null $creditNoteInvoiceTypes
     *
     * @return self
     */
    public function setCreditNoteInvoiceTypes(?array $creditNoteInvoiceTypes): self
    {
        $this->initialized['creditNoteInvoiceTypes'] = true;
        $this->creditNoteInvoiceTypes = $creditNoteInvoiceTypes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }
    /**
     * 
     *
     * @param int|null $interval
     *
     * @return self
     */
    public function setInterval(?int $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastValue(): ?int
    {
        return $this->lastValue;
    }
    /**
     * 
     *
     * @param int|null $lastValue
     *
     * @return self
     */
    public function setLastValue(?int $lastValue): self
    {
        $this->initialized['lastValue'] = true;
        $this->lastValue = $lastValue;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLength(): ?int
    {
        return $this->length;
    }
    /**
     * 
     *
     * @param int|null $length
     *
     * @return self
     */
    public function setLength(?int $length): self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNumberRangeId(): ?string
    {
        return $this->numberRangeId;
    }
    /**
     * 
     *
     * @param string|null $numberRangeId
     *
     * @return self
     */
    public function setNumberRangeId(?string $numberRangeId): self
    {
        $this->initialized['numberRangeId'] = true;
        $this->numberRangeId = $numberRangeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }
    /**
     * 
     *
     * @param string|null $prefix
     *
     * @return self
     */
    public function setPrefix(?string $prefix): self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSalesChannels(): ?array
    {
        return $this->salesChannels;
    }
    /**
     * 
     *
     * @param list<string>|null $salesChannels
     *
     * @return self
     */
    public function setSalesChannels(?array $salesChannels): self
    {
        $this->initialized['salesChannels'] = true;
        $this->salesChannels = $salesChannels;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSalesInvoiceTypes(): ?array
    {
        return $this->salesInvoiceTypes;
    }
    /**
     * 
     *
     * @param list<string>|null $salesInvoiceTypes
     *
     * @return self
     */
    public function setSalesInvoiceTypes(?array $salesInvoiceTypes): self
    {
        $this->initialized['salesInvoiceTypes'] = true;
        $this->salesInvoiceTypes = $salesInvoiceTypes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }
    /**
     * 
     *
     * @param string|null $suffix
     *
     * @return self
     */
    public function setSuffix(?string $suffix): self
    {
        $this->initialized['suffix'] = true;
        $this->suffix = $suffix;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getValidFromDate(): ?int
    {
        return $this->validFromDate;
    }
    /**
     * 
     *
     * @param int|null $validFromDate
     *
     * @return self
     */
    public function setValidFromDate(?int $validFromDate): self
    {
        $this->initialized['validFromDate'] = true;
        $this->validFromDate = $validFromDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getValidToDate(): ?int
    {
        return $this->validToDate;
    }
    /**
     * 
     *
     * @param int|null $validToDate
     *
     * @return self
     */
    public function setValidToDate(?int $validToDate): self
    {
        $this->initialized['validToDate'] = true;
        $this->validToDate = $validToDate;
        return $this;
    }
}