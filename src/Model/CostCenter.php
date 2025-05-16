<?php

namespace Webhubworks\WeclappApiCore\Model;

class CostCenter extends \ArrayObject
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
    protected $costCenterGroupId;

    /**
     * @var string|null
     */
    protected $costCenterNumber;

    /**
     * @var string|null
     */
    protected $costCenterType;

    /**
     * @var string|null
     */
    protected $description;

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

    public function getCostCenterGroupId(): ?string
    {
        return $this->costCenterGroupId;
    }

    public function setCostCenterGroupId(?string $costCenterGroupId): self
    {
        $this->initialized['costCenterGroupId'] = true;
        $this->costCenterGroupId = $costCenterGroupId;

        return $this;
    }

    public function getCostCenterNumber(): ?string
    {
        return $this->costCenterNumber;
    }

    public function setCostCenterNumber(?string $costCenterNumber): self
    {
        $this->initialized['costCenterNumber'] = true;
        $this->costCenterNumber = $costCenterNumber;

        return $this;
    }

    public function getCostCenterType(): ?string
    {
        return $this->costCenterType;
    }

    public function setCostCenterType(?string $costCenterType): self
    {
        $this->initialized['costCenterType'] = true;
        $this->costCenterType = $costCenterType;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
