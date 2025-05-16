<?php

namespace Webhubworks\WeclappApiCore\Model;

class RecurringEvent extends \ArrayObject
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
    protected $endsOn;
    /**
     * 
     *
     * @var int|null
     */
    protected $eventInterval;
    /**
     * 
     *
     * @var int|null
     */
    protected $eventOccurrenceCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $eventType;
    /**
     * 
     *
     * @var string|null
     */
    protected $repeatOn;
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
    public function getEndsOn(): ?int
    {
        return $this->endsOn;
    }
    /**
     * 
     *
     * @param int|null $endsOn
     *
     * @return self
     */
    public function setEndsOn(?int $endsOn): self
    {
        $this->initialized['endsOn'] = true;
        $this->endsOn = $endsOn;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEventInterval(): ?int
    {
        return $this->eventInterval;
    }
    /**
     * 
     *
     * @param int|null $eventInterval
     *
     * @return self
     */
    public function setEventInterval(?int $eventInterval): self
    {
        $this->initialized['eventInterval'] = true;
        $this->eventInterval = $eventInterval;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEventOccurrenceCount(): ?int
    {
        return $this->eventOccurrenceCount;
    }
    /**
     * 
     *
     * @param int|null $eventOccurrenceCount
     *
     * @return self
     */
    public function setEventOccurrenceCount(?int $eventOccurrenceCount): self
    {
        $this->initialized['eventOccurrenceCount'] = true;
        $this->eventOccurrenceCount = $eventOccurrenceCount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }
    /**
     * 
     *
     * @param string|null $eventType
     *
     * @return self
     */
    public function setEventType(?string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRepeatOn(): ?string
    {
        return $this->repeatOn;
    }
    /**
     * 
     *
     * @param string|null $repeatOn
     *
     * @return self
     */
    public function setRepeatOn(?string $repeatOn): self
    {
        $this->initialized['repeatOn'] = true;
        $this->repeatOn = $repeatOn;
        return $this;
    }
}