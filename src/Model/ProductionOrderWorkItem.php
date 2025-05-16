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
     * @var bool
     */
    protected $book;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $manualItem;
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
    protected $shortDescription;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $targetEndDate;
    /**
     * 
     *
     * @var int
     */
    protected $targetOrderTime;
    /**
     * 
     *
     * @var int
     */
    protected $targetStartDate;
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
    protected $unitTime;
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
     * @return bool
     */
    public function getBook(): bool
    {
        return $this->book;
    }
    /**
     * 
     *
     * @param bool $book
     *
     * @return self
     */
    public function setBook(bool $book): self
    {
        $this->initialized['book'] = true;
        $this->book = $book;
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
     * @return bool
     */
    public function getManualItem(): bool
    {
        return $this->manualItem;
    }
    /**
     * 
     *
     * @param bool $manualItem
     *
     * @return self
     */
    public function setManualItem(bool $manualItem): self
    {
        $this->initialized['manualItem'] = true;
        $this->manualItem = $manualItem;
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
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetEndDate(): int
    {
        return $this->targetEndDate;
    }
    /**
     * 
     *
     * @param int $targetEndDate
     *
     * @return self
     */
    public function setTargetEndDate(int $targetEndDate): self
    {
        $this->initialized['targetEndDate'] = true;
        $this->targetEndDate = $targetEndDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetOrderTime(): int
    {
        return $this->targetOrderTime;
    }
    /**
     * 
     *
     * @param int $targetOrderTime
     *
     * @return self
     */
    public function setTargetOrderTime(int $targetOrderTime): self
    {
        $this->initialized['targetOrderTime'] = true;
        $this->targetOrderTime = $targetOrderTime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTargetStartDate(): int
    {
        return $this->targetStartDate;
    }
    /**
     * 
     *
     * @param int $targetStartDate
     *
     * @return self
     */
    public function setTargetStartDate(int $targetStartDate): self
    {
        $this->initialized['targetStartDate'] = true;
        $this->targetStartDate = $targetStartDate;
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
}