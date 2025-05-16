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
     * @var int|null
     */
    protected $endsOn;

    /**
     * @var int|null
     */
    protected $eventInterval;

    /**
     * @var int|null
     */
    protected $eventOccurrenceCount;

    /**
     * @var string|null
     */
    protected $eventType;

    /**
     * @var string|null
     */
    protected $repeatOn;

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

    public function getEndsOn(): ?int
    {
        return $this->endsOn;
    }

    public function setEndsOn(?int $endsOn): self
    {
        $this->initialized['endsOn'] = true;
        $this->endsOn = $endsOn;

        return $this;
    }

    public function getEventInterval(): ?int
    {
        return $this->eventInterval;
    }

    public function setEventInterval(?int $eventInterval): self
    {
        $this->initialized['eventInterval'] = true;
        $this->eventInterval = $eventInterval;

        return $this;
    }

    public function getEventOccurrenceCount(): ?int
    {
        return $this->eventOccurrenceCount;
    }

    public function setEventOccurrenceCount(?int $eventOccurrenceCount): self
    {
        $this->initialized['eventOccurrenceCount'] = true;
        $this->eventOccurrenceCount = $eventOccurrenceCount;

        return $this;
    }

    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    public function setEventType(?string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;

        return $this;
    }

    public function getRepeatOn(): ?string
    {
        return $this->repeatOn;
    }

    public function setRepeatOn(?string $repeatOn): self
    {
        $this->initialized['repeatOn'] = true;
        $this->repeatOn = $repeatOn;

        return $this;
    }
}
