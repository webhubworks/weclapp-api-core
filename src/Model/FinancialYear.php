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
    protected $name;

    /**
     * @var list<Period>
     */
    protected $periods;

    /**
     * @var string
     */
    protected $status;

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

    /**
     * @return list<Period>
     */
    public function getPeriods(): array
    {
        return $this->periods;
    }

    /**
     * @param  list<Period>  $periods
     */
    public function setPeriods(array $periods): self
    {
        $this->initialized['periods'] = true;
        $this->periods = $periods;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

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
