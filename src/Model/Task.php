<?php

namespace Webhubworks\WeclappApiCore\Model;

class Task extends \ArrayObject
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
     * @var list<mixed>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var bool|null
     */
    protected $allowOverBooking;
    /**
     * 
     *
     * @var bool|null
     */
    protected $allowTimeBooking;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleId;
    /**
     * 
     *
     * @var list<TaskAssignee>|null
     */
    protected $assignees;
    /**
     * 
     *
     * @var bool|null
     */
    protected $billableStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $calendarEventId;
    /**
     * 
     *
     * @var string|null
     */
    protected $creatorUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateFrom;
    /**
     * 
     *
     * @var int|null
     */
    protected $dateTo;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var list<EntityReference>|null
     */
    protected $entityReferences;
    /**
     * 
     *
     * @var string|null
     */
    protected $identifier;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoicingStatus;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastReminderDateForOverdue;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentTaskId;
    /**
     * 
     *
     * @var string|null
     */
    protected $performanceRecordedStatus;
    /**
     * 
     *
     * @var int|null
     */
    protected $plannedEffort;
    /**
     * 
     *
     * @var int|null
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $previousTaskId;
    /**
     * 
     *
     * @var string|null
     */
    protected $subject;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $taskLists;
    /**
     * 
     *
     * @var TaskMailAccount|null
     */
    protected $taskMailAccount;
    /**
     * 
     *
     * @var string|null
     */
    protected $taskPriority;
    /**
     * 
     *
     * @var string|null
     */
    protected $taskStatus;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $taskTopics;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $taskTypes;
    /**
     * 
     *
     * @var string|null
     */
    protected $taskVisibilityType;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketId;
    /**
     * 
     *
     * @var string|null
     */
    protected $userOfLastStatusChangeId;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $watchers;
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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed>|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAllowOverBooking(): ?bool
    {
        return $this->allowOverBooking;
    }
    /**
     * 
     *
     * @param bool|null $allowOverBooking
     *
     * @return self
     */
    public function setAllowOverBooking(?bool $allowOverBooking): self
    {
        $this->initialized['allowOverBooking'] = true;
        $this->allowOverBooking = $allowOverBooking;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAllowTimeBooking(): ?bool
    {
        return $this->allowTimeBooking;
    }
    /**
     * 
     *
     * @param bool|null $allowTimeBooking
     *
     * @return self
     */
    public function setAllowTimeBooking(?bool $allowTimeBooking): self
    {
        $this->initialized['allowTimeBooking'] = true;
        $this->allowTimeBooking = $allowTimeBooking;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleId(): ?string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string|null $articleId
     *
     * @return self
     */
    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;
        return $this;
    }
    /**
     * 
     *
     * @return list<TaskAssignee>|null
     */
    public function getAssignees(): ?array
    {
        return $this->assignees;
    }
    /**
     * 
     *
     * @param list<TaskAssignee>|null $assignees
     *
     * @return self
     */
    public function setAssignees(?array $assignees): self
    {
        $this->initialized['assignees'] = true;
        $this->assignees = $assignees;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBillableStatus(): ?bool
    {
        return $this->billableStatus;
    }
    /**
     * 
     *
     * @param bool|null $billableStatus
     *
     * @return self
     */
    public function setBillableStatus(?bool $billableStatus): self
    {
        $this->initialized['billableStatus'] = true;
        $this->billableStatus = $billableStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCalendarEventId(): ?string
    {
        return $this->calendarEventId;
    }
    /**
     * 
     *
     * @param string|null $calendarEventId
     *
     * @return self
     */
    public function setCalendarEventId(?string $calendarEventId): self
    {
        $this->initialized['calendarEventId'] = true;
        $this->calendarEventId = $calendarEventId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatorUserId(): ?string
    {
        return $this->creatorUserId;
    }
    /**
     * 
     *
     * @param string|null $creatorUserId
     *
     * @return self
     */
    public function setCreatorUserId(?string $creatorUserId): self
    {
        $this->initialized['creatorUserId'] = true;
        $this->creatorUserId = $creatorUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDateFrom(): ?int
    {
        return $this->dateFrom;
    }
    /**
     * 
     *
     * @param int|null $dateFrom
     *
     * @return self
     */
    public function setDateFrom(?int $dateFrom): self
    {
        $this->initialized['dateFrom'] = true;
        $this->dateFrom = $dateFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDateTo(): ?int
    {
        return $this->dateTo;
    }
    /**
     * 
     *
     * @param int|null $dateTo
     *
     * @return self
     */
    public function setDateTo(?int $dateTo): self
    {
        $this->initialized['dateTo'] = true;
        $this->dateTo = $dateTo;
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
     * @return list<EntityReference>|null
     */
    public function getEntityReferences(): ?array
    {
        return $this->entityReferences;
    }
    /**
     * 
     *
     * @param list<EntityReference>|null $entityReferences
     *
     * @return self
     */
    public function setEntityReferences(?array $entityReferences): self
    {
        $this->initialized['entityReferences'] = true;
        $this->entityReferences = $entityReferences;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }
    /**
     * 
     *
     * @param string|null $identifier
     *
     * @return self
     */
    public function setIdentifier(?string $identifier): self
    {
        $this->initialized['identifier'] = true;
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoicingStatus(): ?string
    {
        return $this->invoicingStatus;
    }
    /**
     * 
     *
     * @param string|null $invoicingStatus
     *
     * @return self
     */
    public function setInvoicingStatus(?string $invoicingStatus): self
    {
        $this->initialized['invoicingStatus'] = true;
        $this->invoicingStatus = $invoicingStatus;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastReminderDateForOverdue(): ?int
    {
        return $this->lastReminderDateForOverdue;
    }
    /**
     * 
     *
     * @param int|null $lastReminderDateForOverdue
     *
     * @return self
     */
    public function setLastReminderDateForOverdue(?int $lastReminderDateForOverdue): self
    {
        $this->initialized['lastReminderDateForOverdue'] = true;
        $this->lastReminderDateForOverdue = $lastReminderDateForOverdue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderItemId(): ?string
    {
        return $this->orderItemId;
    }
    /**
     * 
     *
     * @param string|null $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(?string $orderItemId): self
    {
        $this->initialized['orderItemId'] = true;
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParentTaskId(): ?string
    {
        return $this->parentTaskId;
    }
    /**
     * 
     *
     * @param string|null $parentTaskId
     *
     * @return self
     */
    public function setParentTaskId(?string $parentTaskId): self
    {
        $this->initialized['parentTaskId'] = true;
        $this->parentTaskId = $parentTaskId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPerformanceRecordedStatus(): ?string
    {
        return $this->performanceRecordedStatus;
    }
    /**
     * 
     *
     * @param string|null $performanceRecordedStatus
     *
     * @return self
     */
    public function setPerformanceRecordedStatus(?string $performanceRecordedStatus): self
    {
        $this->initialized['performanceRecordedStatus'] = true;
        $this->performanceRecordedStatus = $performanceRecordedStatus;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlannedEffort(): ?int
    {
        return $this->plannedEffort;
    }
    /**
     * 
     *
     * @param int|null $plannedEffort
     *
     * @return self
     */
    public function setPlannedEffort(?int $plannedEffort): self
    {
        $this->initialized['plannedEffort'] = true;
        $this->plannedEffort = $plannedEffort;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int|null $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPreviousTaskId(): ?string
    {
        return $this->previousTaskId;
    }
    /**
     * 
     *
     * @param string|null $previousTaskId
     *
     * @return self
     */
    public function setPreviousTaskId(?string $previousTaskId): self
    {
        $this->initialized['previousTaskId'] = true;
        $this->previousTaskId = $previousTaskId;
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
     * @return list<OnlyId>|null
     */
    public function getTaskLists(): ?array
    {
        return $this->taskLists;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $taskLists
     *
     * @return self
     */
    public function setTaskLists(?array $taskLists): self
    {
        $this->initialized['taskLists'] = true;
        $this->taskLists = $taskLists;
        return $this;
    }
    /**
     * 
     *
     * @return TaskMailAccount|null
     */
    public function getTaskMailAccount(): ?TaskMailAccount
    {
        return $this->taskMailAccount;
    }
    /**
     * 
     *
     * @param TaskMailAccount|null $taskMailAccount
     *
     * @return self
     */
    public function setTaskMailAccount(?TaskMailAccount $taskMailAccount): self
    {
        $this->initialized['taskMailAccount'] = true;
        $this->taskMailAccount = $taskMailAccount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaskPriority(): ?string
    {
        return $this->taskPriority;
    }
    /**
     * 
     *
     * @param string|null $taskPriority
     *
     * @return self
     */
    public function setTaskPriority(?string $taskPriority): self
    {
        $this->initialized['taskPriority'] = true;
        $this->taskPriority = $taskPriority;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaskStatus(): ?string
    {
        return $this->taskStatus;
    }
    /**
     * 
     *
     * @param string|null $taskStatus
     *
     * @return self
     */
    public function setTaskStatus(?string $taskStatus): self
    {
        $this->initialized['taskStatus'] = true;
        $this->taskStatus = $taskStatus;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getTaskTopics(): ?array
    {
        return $this->taskTopics;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $taskTopics
     *
     * @return self
     */
    public function setTaskTopics(?array $taskTopics): self
    {
        $this->initialized['taskTopics'] = true;
        $this->taskTopics = $taskTopics;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getTaskTypes(): ?array
    {
        return $this->taskTypes;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $taskTypes
     *
     * @return self
     */
    public function setTaskTypes(?array $taskTypes): self
    {
        $this->initialized['taskTypes'] = true;
        $this->taskTypes = $taskTypes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaskVisibilityType(): ?string
    {
        return $this->taskVisibilityType;
    }
    /**
     * 
     *
     * @param string|null $taskVisibilityType
     *
     * @return self
     */
    public function setTaskVisibilityType(?string $taskVisibilityType): self
    {
        $this->initialized['taskVisibilityType'] = true;
        $this->taskVisibilityType = $taskVisibilityType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketId(): ?string
    {
        return $this->ticketId;
    }
    /**
     * 
     *
     * @param string|null $ticketId
     *
     * @return self
     */
    public function setTicketId(?string $ticketId): self
    {
        $this->initialized['ticketId'] = true;
        $this->ticketId = $ticketId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserOfLastStatusChangeId(): ?string
    {
        return $this->userOfLastStatusChangeId;
    }
    /**
     * 
     *
     * @param string|null $userOfLastStatusChangeId
     *
     * @return self
     */
    public function setUserOfLastStatusChangeId(?string $userOfLastStatusChangeId): self
    {
        $this->initialized['userOfLastStatusChangeId'] = true;
        $this->userOfLastStatusChangeId = $userOfLastStatusChangeId;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getWatchers(): ?array
    {
        return $this->watchers;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $watchers
     *
     * @return self
     */
    public function setWatchers(?array $watchers): self
    {
        $this->initialized['watchers'] = true;
        $this->watchers = $watchers;
        return $this;
    }
}