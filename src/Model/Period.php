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
     * @var string
     */
    protected $financialYearId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var bool
     */
    protected $open;

    /**
     * @var int
     */
    protected $periodNumber;

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

    public function getFinancialYearId(): string
    {
        return $this->financialYearId;
    }

    public function setFinancialYearId(string $financialYearId): self
    {
        $this->initialized['financialYearId'] = true;
        $this->financialYearId = $financialYearId;

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

    public function getOpen(): bool
    {
        return $this->open;
    }

    public function setOpen(bool $open): self
    {
        $this->initialized['open'] = true;
        $this->open = $open;

        return $this;
    }

    public function getPeriodNumber(): int
    {
        return $this->periodNumber;
    }

    public function setPeriodNumber(int $periodNumber): self
    {
        $this->initialized['periodNumber'] = true;
        $this->periodNumber = $periodNumber;

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
