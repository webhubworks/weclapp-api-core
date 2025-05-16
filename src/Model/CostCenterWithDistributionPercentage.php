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
    protected $costCenterId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $costCenterNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $distributionPercentage;
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
    public function getCostCenterId(): ?string
    {
        return $this->costCenterId;
    }
    /**
     * 
     *
     * @param string|null $costCenterId
     *
     * @return self
     */
    public function setCostCenterId(?string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getCostCenterNumber(): ?string
    {
        return $this->costCenterNumber;
    }
    /**
     * 
     *
     * @param string|null $costCenterNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setCostCenterNumber(?string $costCenterNumber): self
    {
        $this->initialized['costCenterNumber'] = true;
        $this->costCenterNumber = $costCenterNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDistributionPercentage(): ?string
    {
        return $this->distributionPercentage;
    }
    /**
     * 
     *
     * @param string|null $distributionPercentage
     *
     * @return self
     */
    public function setDistributionPercentage(?string $distributionPercentage): self
    {
        $this->initialized['distributionPercentage'] = true;
        $this->distributionPercentage = $distributionPercentage;
        return $this;
    }
}