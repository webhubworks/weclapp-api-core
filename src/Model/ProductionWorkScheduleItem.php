<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionWorkScheduleItem extends \ArrayObject
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
     * @var list<mixed>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string|null
     */
    protected $costCenterId;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var int|null
     */
    protected $multipleHumanOperation;
    /**
     * 
     *
     * @var int|null
     */
    protected $multipleMachineOperation;
    /**
     * 
     *
     * @var int|null
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $productionWorkScheduleId;
    /**
     * 
     *
     * @var int|null
     */
    protected $quantityBase;
    /**
     * 
     *
     * @var string|null
     */
    protected $setupTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortDescription;
    /**
     * 
     *
     * @var string|null
     */
    protected $timeType;
    /**
     * 
     *
     * @var string|null
     */
    protected $timeUnit;
    /**
     * 
     *
     * @var string|null
     */
    protected $unitTime;
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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed>|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
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
    /**
     * 
     *
     * @return int|null
     */
    public function getMultipleHumanOperation(): ?int
    {
        return $this->multipleHumanOperation;
    }
    /**
     * 
     *
     * @param int|null $multipleHumanOperation
     *
     * @return self
     */
    public function setMultipleHumanOperation(?int $multipleHumanOperation): self
    {
        $this->initialized['multipleHumanOperation'] = true;
        $this->multipleHumanOperation = $multipleHumanOperation;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMultipleMachineOperation(): ?int
    {
        return $this->multipleMachineOperation;
    }
    /**
     * 
     *
     * @param int|null $multipleMachineOperation
     *
     * @return self
     */
    public function setMultipleMachineOperation(?int $multipleMachineOperation): self
    {
        $this->initialized['multipleMachineOperation'] = true;
        $this->multipleMachineOperation = $multipleMachineOperation;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int|null $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProductionWorkScheduleId(): ?string
    {
        return $this->productionWorkScheduleId;
    }
    /**
     * 
     *
     * @param string|null $productionWorkScheduleId
     *
     * @return self
     */
    public function setProductionWorkScheduleId(?string $productionWorkScheduleId): self
    {
        $this->initialized['productionWorkScheduleId'] = true;
        $this->productionWorkScheduleId = $productionWorkScheduleId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getQuantityBase(): ?int
    {
        return $this->quantityBase;
    }
    /**
     * 
     *
     * @param int|null $quantityBase
     *
     * @return self
     */
    public function setQuantityBase(?int $quantityBase): self
    {
        $this->initialized['quantityBase'] = true;
        $this->quantityBase = $quantityBase;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSetupTime(): ?string
    {
        return $this->setupTime;
    }
    /**
     * 
     *
     * @param string|null $setupTime
     *
     * @return self
     */
    public function setSetupTime(?string $setupTime): self
    {
        $this->initialized['setupTime'] = true;
        $this->setupTime = $setupTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }
    /**
     * 
     *
     * @param string|null $shortDescription
     *
     * @return self
     */
    public function setShortDescription(?string $shortDescription): self
    {
        $this->initialized['shortDescription'] = true;
        $this->shortDescription = $shortDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTimeType(): ?string
    {
        return $this->timeType;
    }
    /**
     * 
     *
     * @param string|null $timeType
     *
     * @return self
     */
    public function setTimeType(?string $timeType): self
    {
        $this->initialized['timeType'] = true;
        $this->timeType = $timeType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTimeUnit(): ?string
    {
        return $this->timeUnit;
    }
    /**
     * 
     *
     * @param string|null $timeUnit
     *
     * @return self
     */
    public function setTimeUnit(?string $timeUnit): self
    {
        $this->initialized['timeUnit'] = true;
        $this->timeUnit = $timeUnit;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUnitTime(): ?string
    {
        return $this->unitTime;
    }
    /**
     * 
     *
     * @param string|null $unitTime
     *
     * @return self
     */
    public function setUnitTime(?string $unitTime): self
    {
        $this->initialized['unitTime'] = true;
        $this->unitTime = $unitTime;
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