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
     * @var string
     */
    protected $attendeeStatus;
    /**
     * 
     *
     * @var string
     */
    protected $calendarEventId;
    /**
     * 
     *
     * @var string
     */
    protected $eventPermission;
    /**
     * 
     *
     * @var string
     */
    protected $userId;
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
     * @return string
     */
    public function getAttendeeStatus(): string
    {
        return $this->attendeeStatus;
    }
    /**
     * 
     *
     * @param string $attendeeStatus
     *
     * @return self
     */
    public function setAttendeeStatus(string $attendeeStatus): self
    {
        $this->initialized['attendeeStatus'] = true;
        $this->attendeeStatus = $attendeeStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCalendarEventId(): string
    {
        return $this->calendarEventId;
    }
    /**
     * 
     *
     * @param string $calendarEventId
     *
     * @return self
     */
    public function setCalendarEventId(string $calendarEventId): self
    {
        $this->initialized['calendarEventId'] = true;
        $this->calendarEventId = $calendarEventId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEventPermission(): string
    {
        return $this->eventPermission;
    }
    /**
     * 
     *
     * @param string $eventPermission
     *
     * @return self
     */
    public function setEventPermission(string $eventPermission): self
    {
        $this->initialized['eventPermission'] = true;
        $this->eventPermission = $eventPermission;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
}