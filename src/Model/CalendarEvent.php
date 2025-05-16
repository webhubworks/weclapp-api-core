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
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var bool
     */
    protected $allDayEvent;

    /**
     * @var list<CalendarEventAttendee>
     */
    protected $attendees;

    /**
     * @var string
     */
    protected $calendarId;

    /**
     * @var string
     */
    protected $concerningId;

    /**
     * @var string
     */
    protected $contactId;

    /**
     * @var bool
     */
    protected $deleted;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $endDate;

    /**
     * @var string
     */
    protected $location;

    /**
     * @var bool
     */
    protected $privateEvent;

    /**
     * @var RecurringEvent
     */
    protected $recurringEvent;

    /**
     * @var list<EntityReference>
     */
    protected $references;

    /**
     * @var string
     */
    protected $reminderSendType;

    /**
     * @var int
     */
    protected $reminderTime;

    /**
     * @var string
     */
    protected $showAs;

    /**
     * @var int
     */
    protected $startDate;

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var string
     */
    protected $userId;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getAllDayEvent(): bool
    {
        return $this->allDayEvent;
    }

    public function setAllDayEvent(bool $allDayEvent): self
    {
        $this->initialized['allDayEvent'] = true;
        $this->allDayEvent = $allDayEvent;

        return $this;
    }

    /**
     * @return list<CalendarEventAttendee>
     */
    public function getAttendees(): array
    {
        return $this->attendees;
    }

    /**
     * @param  list<CalendarEventAttendee>  $attendees
     */
    public function setAttendees(array $attendees): self
    {
        $this->initialized['attendees'] = true;
        $this->attendees = $attendees;

        return $this;
    }

    public function getCalendarId(): string
    {
        return $this->calendarId;
    }

    public function setCalendarId(string $calendarId): self
    {
        $this->initialized['calendarId'] = true;
        $this->calendarId = $calendarId;

        return $this;
    }

    public function getConcerningId(): string
    {
        return $this->concerningId;
    }

    public function setConcerningId(string $concerningId): self
    {
        $this->initialized['concerningId'] = true;
        $this->concerningId = $concerningId;

        return $this;
    }

    public function getContactId(): string
    {
        return $this->contactId;
    }

    public function setContactId(string $contactId): self
    {
        $this->initialized['contactId'] = true;
        $this->contactId = $contactId;

        return $this;
    }

    public function getDeleted(): bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getEndDate(): int
    {
        return $this->endDate;
    }

    public function setEndDate(int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    public function getPrivateEvent(): bool
    {
        return $this->privateEvent;
    }

    public function setPrivateEvent(bool $privateEvent): self
    {
        $this->initialized['privateEvent'] = true;
        $this->privateEvent = $privateEvent;

        return $this;
    }

    public function getRecurringEvent(): RecurringEvent
    {
        return $this->recurringEvent;
    }

    public function setRecurringEvent(RecurringEvent $recurringEvent): self
    {
        $this->initialized['recurringEvent'] = true;
        $this->recurringEvent = $recurringEvent;

        return $this;
    }

    /**
     * @return list<EntityReference>
     */
    public function getReferences(): array
    {
        return $this->references;
    }

    /**
     * @param  list<EntityReference>  $references
     */
    public function setReferences(array $references): self
    {
        $this->initialized['references'] = true;
        $this->references = $references;

        return $this;
    }

    public function getReminderSendType(): string
    {
        return $this->reminderSendType;
    }

    public function setReminderSendType(string $reminderSendType): self
    {
        $this->initialized['reminderSendType'] = true;
        $this->reminderSendType = $reminderSendType;

        return $this;
    }

    public function getReminderTime(): int
    {
        return $this->reminderTime;
    }

    public function setReminderTime(int $reminderTime): self
    {
        $this->initialized['reminderTime'] = true;
        $this->reminderTime = $reminderTime;

        return $this;
    }

    public function getShowAs(): string
    {
        return $this->showAs;
    }

    public function setShowAs(string $showAs): self
    {
        $this->initialized['showAs'] = true;
        $this->showAs = $showAs;

        return $this;
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function setStartDate(int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }
}
