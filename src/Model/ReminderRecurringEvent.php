<?php

namespace Webhubworks\WeclappApiCore\Model;

class ReminderRecurringEvent extends \ArrayObject
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
     * @var int|null
     */
    protected $endsOnDate;
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
     * @return int|null
     */
    public function getEndsOnDate(): ?int
    {
        return $this->endsOnDate;
    }
    /**
     * 
     *
     * @param int|null $endsOnDate
     *
     * @return self
     */
    public function setEndsOnDate(?int $endsOnDate): self
    {
        $this->initialized['endsOnDate'] = true;
        $this->endsOnDate = $endsOnDate;
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