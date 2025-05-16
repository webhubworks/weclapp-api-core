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
     * @var int
     */
    protected $endsOnDate;

    /**
     * @var int
     */
    protected $eventInterval;

    /**
     * @var int
     */
    protected $eventOccurrenceCount;

    /**
     * @var string
     */
    protected $eventType;

    /**
     * @var string
     */
    protected $repeatOn;

    public function getEndsOnDate(): int
    {
        return $this->endsOnDate;
    }

    public function setEndsOnDate(int $endsOnDate): self
    {
        $this->initialized['endsOnDate'] = true;
        $this->endsOnDate = $endsOnDate;

        return $this;
    }

    public function getEventInterval(): int
    {
        return $this->eventInterval;
    }

    public function setEventInterval(int $eventInterval): self
    {
        $this->initialized['eventInterval'] = true;
        $this->eventInterval = $eventInterval;

        return $this;
    }

    public function getEventOccurrenceCount(): int
    {
        return $this->eventOccurrenceCount;
    }

    public function setEventOccurrenceCount(int $eventOccurrenceCount): self
    {
        $this->initialized['eventOccurrenceCount'] = true;
        $this->eventOccurrenceCount = $eventOccurrenceCount;

        return $this;
    }

    public function getEventType(): string
    {
        return $this->eventType;
    }

    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;

        return $this;
    }

    public function getRepeatOn(): string
    {
        return $this->repeatOn;
    }

    public function setRepeatOn(string $repeatOn): self
    {
        $this->initialized['repeatOn'] = true;
        $this->repeatOn = $repeatOn;

        return $this;
    }
}
