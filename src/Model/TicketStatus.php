<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketStatus extends \ArrayObject
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
     * @var int
     */
    protected $autoChangeDays;
    /**
     * 
     *
     * @var string
     */
    protected $autoChangeTicketStatusId;
    /**
     * 
     *
     * @var string
     */
    protected $color;
    /**
     * 
     *
     * @var bool
     */
    protected $defaultForInternal;
    /**
     * 
     *
     * @var string
     */
    protected $internalTicketStatus;
    /**
     * 
     *
     * @var string
     */
    protected $name;
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
    protected $targetStatusId;
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
     * @return int
     */
    public function getAutoChangeDays(): int
    {
        return $this->autoChangeDays;
    }
    /**
     * 
     *
     * @param int $autoChangeDays
     *
     * @return self
     */
    public function setAutoChangeDays(int $autoChangeDays): self
    {
        $this->initialized['autoChangeDays'] = true;
        $this->autoChangeDays = $autoChangeDays;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAutoChangeTicketStatusId(): string
    {
        return $this->autoChangeTicketStatusId;
    }
    /**
     * 
     *
     * @param string $autoChangeTicketStatusId
     *
     * @return self
     */
    public function setAutoChangeTicketStatusId(string $autoChangeTicketStatusId): self
    {
        $this->initialized['autoChangeTicketStatusId'] = true;
        $this->autoChangeTicketStatusId = $autoChangeTicketStatusId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * 
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color): self
    {
        $this->initialized['color'] = true;
        $this->color = $color;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDefaultForInternal(): bool
    {
        return $this->defaultForInternal;
    }
    /**
     * 
     *
     * @param bool $defaultForInternal
     *
     * @return self
     */
    public function setDefaultForInternal(bool $defaultForInternal): self
    {
        $this->initialized['defaultForInternal'] = true;
        $this->defaultForInternal = $defaultForInternal;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInternalTicketStatus(): string
    {
        return $this->internalTicketStatus;
    }
    /**
     * 
     *
     * @param string $internalTicketStatus
     *
     * @return self
     */
    public function setInternalTicketStatus(string $internalTicketStatus): self
    {
        $this->initialized['internalTicketStatus'] = true;
        $this->internalTicketStatus = $internalTicketStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
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
    public function getTargetStatusId(): string
    {
        return $this->targetStatusId;
    }
    /**
     * 
     *
     * @param string $targetStatusId
     *
     * @return self
     */
    public function setTargetStatusId(string $targetStatusId): self
    {
        $this->initialized['targetStatusId'] = true;
        $this->targetStatusId = $targetStatusId;
        return $this;
    }
}