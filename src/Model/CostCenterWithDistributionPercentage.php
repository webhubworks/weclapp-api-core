<?php

namespace Webhubworks\WeclappApiCore\Model;

class CostCenterWithDistributionPercentage extends \ArrayObject
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
    protected $costCenterId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $costCenterNumber;

    /**
     * @var string|null
     */
    protected $distributionPercentage;

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

    public function getCostCenterId(): ?string
    {
        return $this->costCenterId;
    }

    public function setCostCenterId(?string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCostCenterNumber(): ?string
    {
        return $this->costCenterNumber;
    }

    /**
     * @deprecated
     */
    public function setCostCenterNumber(?string $costCenterNumber): self
    {
        $this->initialized['costCenterNumber'] = true;
        $this->costCenterNumber = $costCenterNumber;

        return $this;
    }

    public function getDistributionPercentage(): ?string
    {
        return $this->distributionPercentage;
    }

    public function setDistributionPercentage(?string $distributionPercentage): self
    {
        $this->initialized['distributionPercentage'] = true;
        $this->distributionPercentage = $distributionPercentage;

        return $this;
    }
}
