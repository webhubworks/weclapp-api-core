<?php

namespace Webhubworks\WeclappApiCore\Model;

class Period extends \ArrayObject
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
     * @var string
     */
    protected $financialYearId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var bool
     */
    protected $open;
    /**
     * 
     *
     * @var int
     */
    protected $periodNumber;
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
     * @return string
     */
    public function getFinancialYearId(): string
    {
        return $this->financialYearId;
    }
    /**
     * 
     *
     * @param string $financialYearId
     *
     * @return self
     */
    public function setFinancialYearId(string $financialYearId): self
    {
        $this->initialized['financialYearId'] = true;
        $this->financialYearId = $financialYearId;
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
     * @return bool
     */
    public function getOpen(): bool
    {
        return $this->open;
    }
    /**
     * 
     *
     * @param bool $open
     *
     * @return self
     */
    public function setOpen(bool $open): self
    {
        $this->initialized['open'] = true;
        $this->open = $open;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPeriodNumber(): int
    {
        return $this->periodNumber;
    }
    /**
     * 
     *
     * @param int $periodNumber
     *
     * @return self
     */
    public function setPeriodNumber(int $periodNumber): self
    {
        $this->initialized['periodNumber'] = true;
        $this->periodNumber = $periodNumber;
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