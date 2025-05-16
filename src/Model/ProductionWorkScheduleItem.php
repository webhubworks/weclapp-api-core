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
     * @var list<mixed>
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string
     */
    protected $costCenterId;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $multipleHumanOperation;
    /**
     * 
     *
     * @var int
     */
    protected $multipleMachineOperation;
    /**
     * 
     *
     * @var int
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $productionWorkScheduleId;
    /**
     * 
     *
     * @var int
     */
    protected $quantityBase;
    /**
     * 
     *
     * @var string
     */
    protected $setupTime;
    /**
     * 
     *
     * @var string
     */
    protected $shortDescription;
    /**
     * 
     *
     * @var string
     */
    protected $timeType;
    /**
     * 
     *
     * @var string
     */
    protected $timeUnit;
    /**
     * 
     *
     * @var string
     */
    protected $unitTime;
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
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed> $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCostCenterId(): string
    {
        return $this->costCenterId;
    }
    /**
     * 
     *
     * @param string $costCenterId
     *
     * @return self
     */
    public function setCostCenterId(string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMultipleHumanOperation(): int
    {
        return $this->multipleHumanOperation;
    }
    /**
     * 
     *
     * @param int $multipleHumanOperation
     *
     * @return self
     */
    public function setMultipleHumanOperation(int $multipleHumanOperation): self
    {
        $this->initialized['multipleHumanOperation'] = true;
        $this->multipleHumanOperation = $multipleHumanOperation;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMultipleMachineOperation(): int
    {
        return $this->multipleMachineOperation;
    }
    /**
     * 
     *
     * @param int $multipleMachineOperation
     *
     * @return self
     */
    public function setMultipleMachineOperation(int $multipleMachineOperation): self
    {
        $this->initialized['multipleMachineOperation'] = true;
        $this->multipleMachineOperation = $multipleMachineOperation;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductionWorkScheduleId(): string
    {
        return $this->productionWorkScheduleId;
    }
    /**
     * 
     *
     * @param string $productionWorkScheduleId
     *
     * @return self
     */
    public function setProductionWorkScheduleId(string $productionWorkScheduleId): self
    {
        $this->initialized['productionWorkScheduleId'] = true;
        $this->productionWorkScheduleId = $productionWorkScheduleId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuantityBase(): int
    {
        return $this->quantityBase;
    }
    /**
     * 
     *
     * @param int $quantityBase
     *
     * @return self
     */
    public function setQuantityBase(int $quantityBase): self
    {
        $this->initialized['quantityBase'] = true;
        $this->quantityBase = $quantityBase;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSetupTime(): string
    {
        return $this->setupTime;
    }
    /**
     * 
     *
     * @param string $setupTime
     *
     * @return self
     */
    public function setSetupTime(string $setupTime): self
    {
        $this->initialized['setupTime'] = true;
        $this->setupTime = $setupTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }
    /**
     * 
     *
     * @param string $shortDescription
     *
     * @return self
     */
    public function setShortDescription(string $shortDescription): self
    {
        $this->initialized['shortDescription'] = true;
        $this->shortDescription = $shortDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTimeType(): string
    {
        return $this->timeType;
    }
    /**
     * 
     *
     * @param string $timeType
     *
     * @return self
     */
    public function setTimeType(string $timeType): self
    {
        $this->initialized['timeType'] = true;
        $this->timeType = $timeType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTimeUnit(): string
    {
        return $this->timeUnit;
    }
    /**
     * 
     *
     * @param string $timeUnit
     *
     * @return self
     */
    public function setTimeUnit(string $timeUnit): self
    {
        $this->initialized['timeUnit'] = true;
        $this->timeUnit = $timeUnit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUnitTime(): string
    {
        return $this->unitTime;
    }
    /**
     * 
     *
     * @param string $unitTime
     *
     * @return self
     */
    public function setUnitTime(string $unitTime): self
    {
        $this->initialized['unitTime'] = true;
        $this->unitTime = $unitTime;
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