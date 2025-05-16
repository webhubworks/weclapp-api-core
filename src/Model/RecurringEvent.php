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
    protected $endsOn;
    /**
     * 
     *
     * @var int
     */
    protected $eventInterval;
    /**
     * 
     *
     * @var int
     */
    protected $eventOccurrenceCount;
    /**
     * 
     *
     * @var string
     */
    protected $eventType;
    /**
     * 
     *
     * @var string
     */
    protected $repeatOn;
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
    public function getEndsOn(): int
    {
        return $this->endsOn;
    }
    /**
     * 
     *
     * @param int $endsOn
     *
     * @return self
     */
    public function setEndsOn(int $endsOn): self
    {
        $this->initialized['endsOn'] = true;
        $this->endsOn = $endsOn;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEventInterval(): int
    {
        return $this->eventInterval;
    }
    /**
     * 
     *
     * @param int $eventInterval
     *
     * @return self
     */
    public function setEventInterval(int $eventInterval): self
    {
        $this->initialized['eventInterval'] = true;
        $this->eventInterval = $eventInterval;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEventOccurrenceCount(): int
    {
        return $this->eventOccurrenceCount;
    }
    /**
     * 
     *
     * @param int $eventOccurrenceCount
     *
     * @return self
     */
    public function setEventOccurrenceCount(int $eventOccurrenceCount): self
    {
        $this->initialized['eventOccurrenceCount'] = true;
        $this->eventOccurrenceCount = $eventOccurrenceCount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }
    /**
     * 
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRepeatOn(): string
    {
        return $this->repeatOn;
    }
    /**
     * 
     *
     * @param string $repeatOn
     *
     * @return self
     */
    public function setRepeatOn(string $repeatOn): self
    {
        $this->initialized['repeatOn'] = true;
        $this->repeatOn = $repeatOn;
        return $this;
    }
}