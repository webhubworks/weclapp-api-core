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
     * @var bool|null
     */
    protected $book;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool|null
     */
    protected $manualItem;
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
    protected $shortDescription;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetEndDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetOrderTime;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetStartDate;
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
    protected $unitTime;
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
     * @return bool|null
     */
    public function getBook(): ?bool
    {
        return $this->book;
    }
    /**
     * 
     *
     * @param bool|null $book
     *
     * @return self
     */
    public function setBook(?bool $book): self
    {
        $this->initialized['book'] = true;
        $this->book = $book;
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
     * @return bool|null
     */
    public function getManualItem(): ?bool
    {
        return $this->manualItem;
    }
    /**
     * 
     *
     * @param bool|null $manualItem
     *
     * @return self
     */
    public function setManualItem(?bool $manualItem): self
    {
        $this->initialized['manualItem'] = true;
        $this->manualItem = $manualItem;
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
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetEndDate(): ?int
    {
        return $this->targetEndDate;
    }
    /**
     * 
     *
     * @param int|null $targetEndDate
     *
     * @return self
     */
    public function setTargetEndDate(?int $targetEndDate): self
    {
        $this->initialized['targetEndDate'] = true;
        $this->targetEndDate = $targetEndDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetOrderTime(): ?int
    {
        return $this->targetOrderTime;
    }
    /**
     * 
     *
     * @param int|null $targetOrderTime
     *
     * @return self
     */
    public function setTargetOrderTime(?int $targetOrderTime): self
    {
        $this->initialized['targetOrderTime'] = true;
        $this->targetOrderTime = $targetOrderTime;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetStartDate(): ?int
    {
        return $this->targetStartDate;
    }
    /**
     * 
     *
     * @param int|null $targetStartDate
     *
     * @return self
     */
    public function setTargetStartDate(?int $targetStartDate): self
    {
        $this->initialized['targetStartDate'] = true;
        $this->targetStartDate = $targetStartDate;
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
}