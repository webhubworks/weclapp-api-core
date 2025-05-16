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
     * @var int|null
     */
    protected $autoChangeDays;
    /**
     * 
     *
     * @var string|null
     */
    protected $autoChangeTicketStatusId;
    /**
     * 
     *
     * @var string|null
     */
    protected $color;
    /**
     * 
     *
     * @var bool|null
     */
    protected $defaultForInternal;
    /**
     * 
     *
     * @var string|null
     */
    protected $internalTicketStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
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
    protected $targetStatusId;
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
     * @return int|null
     */
    public function getAutoChangeDays(): ?int
    {
        return $this->autoChangeDays;
    }
    /**
     * 
     *
     * @param int|null $autoChangeDays
     *
     * @return self
     */
    public function setAutoChangeDays(?int $autoChangeDays): self
    {
        $this->initialized['autoChangeDays'] = true;
        $this->autoChangeDays = $autoChangeDays;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAutoChangeTicketStatusId(): ?string
    {
        return $this->autoChangeTicketStatusId;
    }
    /**
     * 
     *
     * @param string|null $autoChangeTicketStatusId
     *
     * @return self
     */
    public function setAutoChangeTicketStatusId(?string $autoChangeTicketStatusId): self
    {
        $this->initialized['autoChangeTicketStatusId'] = true;
        $this->autoChangeTicketStatusId = $autoChangeTicketStatusId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }
    /**
     * 
     *
     * @param string|null $color
     *
     * @return self
     */
    public function setColor(?string $color): self
    {
        $this->initialized['color'] = true;
        $this->color = $color;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDefaultForInternal(): ?bool
    {
        return $this->defaultForInternal;
    }
    /**
     * 
     *
     * @param bool|null $defaultForInternal
     *
     * @return self
     */
    public function setDefaultForInternal(?bool $defaultForInternal): self
    {
        $this->initialized['defaultForInternal'] = true;
        $this->defaultForInternal = $defaultForInternal;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInternalTicketStatus(): ?string
    {
        return $this->internalTicketStatus;
    }
    /**
     * 
     *
     * @param string|null $internalTicketStatus
     *
     * @return self
     */
    public function setInternalTicketStatus(?string $internalTicketStatus): self
    {
        $this->initialized['internalTicketStatus'] = true;
        $this->internalTicketStatus = $internalTicketStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
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
    public function getTargetStatusId(): ?string
    {
        return $this->targetStatusId;
    }
    /**
     * 
     *
     * @param string|null $targetStatusId
     *
     * @return self
     */
    public function setTargetStatusId(?string $targetStatusId): self
    {
        $this->initialized['targetStatusId'] = true;
        $this->targetStatusId = $targetStatusId;
        return $this;
    }
}