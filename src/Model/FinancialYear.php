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
     * @var string|null
     */
    protected $name;

    /**
     * @var list<Period>|null
     */
    protected $periods;

    /**
     * @var string|null
     */
    protected $status;

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

    /**
     * @return list<Period>|null
     */
    public function getPeriods(): ?array
    {
        return $this->periods;
    }

    /**
     * @param  list<Period>|null  $periods
     */
    public function setPeriods(?array $periods): self
    {
        $this->initialized['periods'] = true;
        $this->periods = $periods;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

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
