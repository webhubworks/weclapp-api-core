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
     * @var list<mixed>
     */
    protected $customAttributes;

    /**
     * @var string
     */
    protected $costCenterId;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $multipleHumanOperation;

    /**
     * @var int
     */
    protected $multipleMachineOperation;

    /**
     * @var int
     */
    protected $positionNumber;

    /**
     * @var string
     */
    protected $productionWorkScheduleId;

    /**
     * @var int
     */
    protected $quantityBase;

    /**
     * @var string
     */
    protected $setupTime;

    /**
     * @var string
     */
    protected $shortDescription;

    /**
     * @var string
     */
    protected $timeType;

    /**
     * @var string
     */
    protected $timeUnit;

    /**
     * @var string
     */
    protected $unitTime;

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

    /**
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>  $customAttributes
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getCostCenterId(): string
    {
        return $this->costCenterId;
    }

    public function setCostCenterId(string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getMultipleHumanOperation(): int
    {
        return $this->multipleHumanOperation;
    }

    public function setMultipleHumanOperation(int $multipleHumanOperation): self
    {
        $this->initialized['multipleHumanOperation'] = true;
        $this->multipleHumanOperation = $multipleHumanOperation;

        return $this;
    }

    public function getMultipleMachineOperation(): int
    {
        return $this->multipleMachineOperation;
    }

    public function setMultipleMachineOperation(int $multipleMachineOperation): self
    {
        $this->initialized['multipleMachineOperation'] = true;
        $this->multipleMachineOperation = $multipleMachineOperation;

        return $this;
    }

    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }

    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getProductionWorkScheduleId(): string
    {
        return $this->productionWorkScheduleId;
    }

    public function setProductionWorkScheduleId(string $productionWorkScheduleId): self
    {
        $this->initialized['productionWorkScheduleId'] = true;
        $this->productionWorkScheduleId = $productionWorkScheduleId;

        return $this;
    }

    public function getQuantityBase(): int
    {
        return $this->quantityBase;
    }

    public function setQuantityBase(int $quantityBase): self
    {
        $this->initialized['quantityBase'] = true;
        $this->quantityBase = $quantityBase;

        return $this;
    }

    public function getSetupTime(): string
    {
        return $this->setupTime;
    }

    public function setSetupTime(string $setupTime): self
    {
        $this->initialized['setupTime'] = true;
        $this->setupTime = $setupTime;

        return $this;
    }

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): self
    {
        $this->initialized['shortDescription'] = true;
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getTimeType(): string
    {
        return $this->timeType;
    }

    public function setTimeType(string $timeType): self
    {
        $this->initialized['timeType'] = true;
        $this->timeType = $timeType;

        return $this;
    }

    public function getTimeUnit(): string
    {
        return $this->timeUnit;
    }

    public function setTimeUnit(string $timeUnit): self
    {
        $this->initialized['timeUnit'] = true;
        $this->timeUnit = $timeUnit;

        return $this;
    }

    public function getUnitTime(): string
    {
        return $this->unitTime;
    }

    public function setUnitTime(string $unitTime): self
    {
        $this->initialized['unitTime'] = true;
        $this->unitTime = $unitTime;

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
