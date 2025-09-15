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
     * @var bool|null
     */
    protected $allDayEvent;
    /**
     * 
     *
     * @var list<CalendarEventAttendee>|null
     */
    protected $attendees;
    /**
     * 
     *
     * @var string|null
     */
    protected $calendarId;
    /**
     * 
     *
     * @var string|null
     */
    protected $concerningId;
    /**
     * 
     *
     * @var string|null
     */
    protected $contactId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var int|null
     */
    protected $endDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $location;
    /**
     * 
     *
     * @var bool|null
     */
    protected $privateEvent;
    /**
     * 
     *
     * @var RecurringEvent|null
     */
    protected $recurringEvent;
    /**
     * 
     *
     * @var list<EntityReference>|null
     */
    protected $references;
    /**
     * 
     *
     * @var string|null
     */
    protected $reminderSendType;
    /**
     * 
     *
     * @var int|null
     */
    protected $reminderTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $showAs;
    /**
     * 
     *
     * @var int|null
     */
    protected $startDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $subject;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
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
     * @return bool|null
     */
    public function getAllDayEvent(): ?bool
    {
        return $this->allDayEvent;
    }
    /**
     * 
     *
     * @param bool|null $allDayEvent
     *
     * @return self
     */
    public function setAllDayEvent(?bool $allDayEvent): self
    {
        $this->initialized['allDayEvent'] = true;
        $this->allDayEvent = $allDayEvent;
        return $this;
    }
    /**
     * 
     *
     * @return list<CalendarEventAttendee>|null
     */
    public function getAttendees(): ?array
    {
        return $this->attendees;
    }
    /**
     * 
     *
     * @param list<CalendarEventAttendee>|null $attendees
     *
     * @return self
     */
    public function setAttendees(?array $attendees): self
    {
        $this->initialized['attendees'] = true;
        $this->attendees = $attendees;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCalendarId(): ?string
    {
        return $this->calendarId;
    }
    /**
     * 
     *
     * @param string|null $calendarId
     *
     * @return self
     */
    public function setCalendarId(?string $calendarId): self
    {
        $this->initialized['calendarId'] = true;
        $this->calendarId = $calendarId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConcerningId(): ?string
    {
        return $this->concerningId;
    }
    /**
     * 
     *
     * @param string|null $concerningId
     *
     * @return self
     */
    public function setConcerningId(?string $concerningId): self
    {
        $this->initialized['concerningId'] = true;
        $this->concerningId = $concerningId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }
    /**
     * 
     *
     * @param string|null $contactId
     *
     * @return self
     */
    public function setContactId(?string $contactId): self
    {
        $this->initialized['contactId'] = true;
        $this->contactId = $contactId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * 
     *
     * @param bool|null $deleted
     *
     * @return self
     */
    public function setDeleted(?bool $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEndDate(): ?int
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param int|null $endDate
     *
     * @return self
     */
    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param string|null $location
     *
     * @return self
     */
    public function setLocation(?string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPrivateEvent(): ?bool
    {
        return $this->privateEvent;
    }
    /**
     * 
     *
     * @param bool|null $privateEvent
     *
     * @return self
     */
    public function setPrivateEvent(?bool $privateEvent): self
    {
        $this->initialized['privateEvent'] = true;
        $this->privateEvent = $privateEvent;
        return $this;
    }
    /**
     * 
     *
     * @return RecurringEvent|null
     */
    public function getRecurringEvent(): ?RecurringEvent
    {
        return $this->recurringEvent;
    }
    /**
     * 
     *
     * @param RecurringEvent|null $recurringEvent
     *
     * @return self
     */
    public function setRecurringEvent(?RecurringEvent $recurringEvent): self
    {
        $this->initialized['recurringEvent'] = true;
        $this->recurringEvent = $recurringEvent;
        return $this;
    }
    /**
     * 
     *
     * @return list<EntityReference>|null
     */
    public function getReferences(): ?array
    {
        return $this->references;
    }
    /**
     * 
     *
     * @param list<EntityReference>|null $references
     *
     * @return self
     */
    public function setReferences(?array $references): self
    {
        $this->initialized['references'] = true;
        $this->references = $references;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReminderSendType(): ?string
    {
        return $this->reminderSendType;
    }
    /**
     * 
     *
     * @param string|null $reminderSendType
     *
     * @return self
     */
    public function setReminderSendType(?string $reminderSendType): self
    {
        $this->initialized['reminderSendType'] = true;
        $this->reminderSendType = $reminderSendType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReminderTime(): ?int
    {
        return $this->reminderTime;
    }
    /**
     * 
     *
     * @param int|null $reminderTime
     *
     * @return self
     */
    public function setReminderTime(?int $reminderTime): self
    {
        $this->initialized['reminderTime'] = true;
        $this->reminderTime = $reminderTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShowAs(): ?string
    {
        return $this->showAs;
    }
    /**
     * 
     *
     * @param string|null $showAs
     *
     * @return self
     */
    public function setShowAs(?string $showAs): self
    {
        $this->initialized['showAs'] = true;
        $this->showAs = $showAs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStartDate(): ?int
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param int|null $startDate
     *
     * @return self
     */
    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param string|null $subject
     *
     * @return self
     */
    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
}