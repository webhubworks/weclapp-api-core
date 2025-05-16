<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShipmentReturnDescription extends \ArrayObject
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
    protected $customerReturn;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $position;

    /**
     * @var bool|null
     */
    protected $supplierReturn;

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

    public function getCustomerReturn(): ?bool
    {
        return $this->customerReturn;
    }

    public function setCustomerReturn(?bool $customerReturn): self
    {
        $this->initialized['customerReturn'] = true;
        $this->customerReturn = $customerReturn;

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

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;

        return $this;
    }

    public function getSupplierReturn(): ?bool
    {
        return $this->supplierReturn;
    }

    public function setSupplierReturn(?bool $supplierReturn): self
    {
        $this->initialized['supplierReturn'] = true;
        $this->supplierReturn = $supplierReturn;

        return $this;
    }
}
