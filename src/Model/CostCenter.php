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
    protected $costCenterGroupId;
    /**
     * 
     *
     * @var string|null
     */
    protected $costCenterNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $costCenterType;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
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
    public function getCostCenterGroupId(): ?string
    {
        return $this->costCenterGroupId;
    }
    /**
     * 
     *
     * @param string|null $costCenterGroupId
     *
     * @return self
     */
    public function setCostCenterGroupId(?string $costCenterGroupId): self
    {
        $this->initialized['costCenterGroupId'] = true;
        $this->costCenterGroupId = $costCenterGroupId;
        return $this;
    }
    /**
     * 
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
    public function getCostCenterType(): ?string
    {
        return $this->costCenterType;
    }
    /**
     * 
     *
     * @param string|null $costCenterType
     *
     * @return self
     */
    public function setCostCenterType(?string $costCenterType): self
    {
        $this->initialized['costCenterType'] = true;
        $this->costCenterType = $costCenterType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}