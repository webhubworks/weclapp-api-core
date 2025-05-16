<?php

namespace Webhubworks\WeclappApiCore\Model;

class CalendarEvent extends \ArrayObject
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
     * @var bool
     */
    protected $allDayEvent;
    /**
     * 
     *
     * @var list<CalendarEventAttendee>
     */
    protected $attendees;
    /**
     * 
     *
     * @var string
     */
    protected $calendarId;
    /**
     * 
     *
     * @var string
     */
    protected $concerningId;
    /**
     * 
     *
     * @var string
     */
    protected $contactId;
    /**
     * 
     *
     * @var bool
     */
    protected $deleted;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $endDate;
    /**
     * 
     *
     * @var string
     */
    protected $location;
    /**
     * 
     *
     * @var bool
     */
    protected $privateEvent;
    /**
     * 
     *
     * @var RecurringEvent
     */
    protected $recurringEvent;
    /**
     * 
     *
     * @var list<EntityReference>
     */
    protected $references;
    /**
     * 
     *
     * @var string
     */
    protected $reminderSendType;
    /**
     * 
     *
     * @var int
     */
    protected $reminderTime;
    /**
     * 
     *
     * @var string
     */
    protected $showAs;
    /**
     * 
     *
     * @var int
     */
    protected $startDate;
    /**
     * 
     *
     * @var string
     */
    protected $subject;
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
     * @return bool
     */
    public function getAllDayEvent(): bool
    {
        return $this->allDayEvent;
    }
    /**
     * 
     *
     * @param bool $allDayEvent
     *
     * @return self
     */
    public function setAllDayEvent(bool $allDayEvent): self
    {
        $this->initialized['allDayEvent'] = true;
        $this->allDayEvent = $allDayEvent;
        return $this;
    }
    /**
     * 
     *
     * @return list<CalendarEventAttendee>
     */
    public function getAttendees(): array
    {
        return $this->attendees;
    }
    /**
     * 
     *
     * @param list<CalendarEventAttendee> $attendees
     *
     * @return self
     */
    public function setAttendees(array $attendees): self
    {
        $this->initialized['attendees'] = true;
        $this->attendees = $attendees;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCalendarId(): string
    {
        return $this->calendarId;
    }
    /**
     * 
     *
     * @param string $calendarId
     *
     * @return self
     */
    public function setCalendarId(string $calendarId): self
    {
        $this->initialized['calendarId'] = true;
        $this->calendarId = $calendarId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConcerningId(): string
    {
        return $this->concerningId;
    }
    /**
     * 
     *
     * @param string $concerningId
     *
     * @return self
     */
    public function setConcerningId(string $concerningId): self
    {
        $this->initialized['concerningId'] = true;
        $this->concerningId = $concerningId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContactId(): string
    {
        return $this->contactId;
    }
    /**
     * 
     *
     * @param string $contactId
     *
     * @return self
     */
    public function setContactId(string $contactId): self
    {
        $this->initialized['contactId'] = true;
        $this->contactId = $contactId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDeleted(): bool
    {
        return $this->deleted;
    }
    /**
     * 
     *
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
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
     * @return int
     */
    public function getEndDate(): int
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param int $endDate
     *
     * @return self
     */
    public function setEndDate(int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrivateEvent(): bool
    {
        return $this->privateEvent;
    }
    /**
     * 
     *
     * @param bool $privateEvent
     *
     * @return self
     */
    public function setPrivateEvent(bool $privateEvent): self
    {
        $this->initialized['privateEvent'] = true;
        $this->privateEvent = $privateEvent;
        return $this;
    }
    /**
     * 
     *
     * @return RecurringEvent
     */
    public function getRecurringEvent(): RecurringEvent
    {
        return $this->recurringEvent;
    }
    /**
     * 
     *
     * @param RecurringEvent $recurringEvent
     *
     * @return self
     */
    public function setRecurringEvent(RecurringEvent $recurringEvent): self
    {
        $this->initialized['recurringEvent'] = true;
        $this->recurringEvent = $recurringEvent;
        return $this;
    }
    /**
     * 
     *
     * @return list<EntityReference>
     */
    public function getReferences(): array
    {
        return $this->references;
    }
    /**
     * 
     *
     * @param list<EntityReference> $references
     *
     * @return self
     */
    public function setReferences(array $references): self
    {
        $this->initialized['references'] = true;
        $this->references = $references;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReminderSendType(): string
    {
        return $this->reminderSendType;
    }
    /**
     * 
     *
     * @param string $reminderSendType
     *
     * @return self
     */
    public function setReminderSendType(string $reminderSendType): self
    {
        $this->initialized['reminderSendType'] = true;
        $this->reminderSendType = $reminderSendType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReminderTime(): int
    {
        return $this->reminderTime;
    }
    /**
     * 
     *
     * @param int $reminderTime
     *
     * @return self
     */
    public function setReminderTime(int $reminderTime): self
    {
        $this->initialized['reminderTime'] = true;
        $this->reminderTime = $reminderTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShowAs(): string
    {
        return $this->showAs;
    }
    /**
     * 
     *
     * @param string $showAs
     *
     * @return self
     */
    public function setShowAs(string $showAs): self
    {
        $this->initialized['showAs'] = true;
        $this->showAs = $showAs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param int $startDate
     *
     * @return self
     */
    public function setStartDate(int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
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