<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionOrderWorkItem extends \ArrayObject
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
     * @var list<mixed>|null
     */
    protected $customAttributes;

    /**
     * @var bool|null
     */
    protected $book;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var bool|null
     */
    protected $manualItem;

    /**
     * @var int|null
     */
    protected $positionNumber;

    /**
     * @var string|null
     */
    protected $shortDescription;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var int|null
     */
    protected $targetEndDate;

    /**
     * @var int|null
     */
    protected $targetOrderTime;

    /**
     * @var int|null
     */
    protected $targetStartDate;

    /**
     * @var string|null
     */
    protected $timeType;

    /**
     * @var string|null
     */
    protected $unitTime;

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

    /**
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>|null  $customAttributes
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getBook(): ?bool
    {
        return $this->book;
    }

    public function setBook(?bool $book): self
    {
        $this->initialized['book'] = true;
        $this->book = $book;

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

    public function getManualItem(): ?bool
    {
        return $this->manualItem;
    }

    public function setManualItem(?bool $manualItem): self
    {
        $this->initialized['manualItem'] = true;
        $this->manualItem = $manualItem;

        return $this;
    }

    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }

    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): self
    {
        $this->initialized['shortDescription'] = true;
        $this->shortDescription = $shortDescription;

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

    public function getTargetEndDate(): ?int
    {
        return $this->targetEndDate;
    }

    public function setTargetEndDate(?int $targetEndDate): self
    {
        $this->initialized['targetEndDate'] = true;
        $this->targetEndDate = $targetEndDate;

        return $this;
    }

    public function getTargetOrderTime(): ?int
    {
        return $this->targetOrderTime;
    }

    public function setTargetOrderTime(?int $targetOrderTime): self
    {
        $this->initialized['targetOrderTime'] = true;
        $this->targetOrderTime = $targetOrderTime;

        return $this;
    }

    public function getTargetStartDate(): ?int
    {
        return $this->targetStartDate;
    }

    public function setTargetStartDate(?int $targetStartDate): self
    {
        $this->initialized['targetStartDate'] = true;
        $this->targetStartDate = $targetStartDate;

        return $this;
    }

    public function getTimeType(): ?string
    {
        return $this->timeType;
    }

    public function setTimeType(?string $timeType): self
    {
        $this->initialized['timeType'] = true;
        $this->timeType = $timeType;

        return $this;
    }

    public function getUnitTime(): ?string
    {
        return $this->unitTime;
    }

    public function setUnitTime(?string $unitTime): self
    {
        $this->initialized['unitTime'] = true;
        $this->unitTime = $unitTime;

        return $this;
    }
}
