<?php

namespace Webhubworks\WeclappApiCore\Model;

class CalendarEventAttendee extends \ArrayObject
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
     * @var string|null
     */
    protected $attendeeStatus;

    /**
     * @var string|null
     */
    protected $calendarEventId;

    /**
     * @var string|null
     */
    protected $eventPermission;

    /**
     * @var string|null
     */
    protected $userId;

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

    public function getAttendeeStatus(): ?string
    {
        return $this->attendeeStatus;
    }

    public function setAttendeeStatus(?string $attendeeStatus): self
    {
        $this->initialized['attendeeStatus'] = true;
        $this->attendeeStatus = $attendeeStatus;

        return $this;
    }

    public function getCalendarEventId(): ?string
    {
        return $this->calendarEventId;
    }

    public function setCalendarEventId(?string $calendarEventId): self
    {
        $this->initialized['calendarEventId'] = true;
        $this->calendarEventId = $calendarEventId;

        return $this;
    }

    public function getEventPermission(): ?string
    {
        return $this->eventPermission;
    }

    public function setEventPermission(?string $eventPermission): self
    {
        $this->initialized['eventPermission'] = true;
        $this->eventPermission = $eventPermission;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }
}
