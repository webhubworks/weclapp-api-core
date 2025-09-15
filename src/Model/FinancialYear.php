<?php

namespace Webhubworks\WeclappApiCore\Model;

class FinancialYear extends \ArrayObject
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
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var list<Period>|null
     */
    protected $periods;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
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
     * @return list<Period>|null
     */
    public function getPeriods(): ?array
    {
        return $this->periods;
    }
    /**
     * 
     *
     * @param list<Period>|null $periods
     *
     * @return self
     */
    public function setPeriods(?array $periods): self
    {
        $this->initialized['periods'] = true;
        $this->periods = $periods;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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