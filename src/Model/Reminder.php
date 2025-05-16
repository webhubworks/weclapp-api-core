<?php

namespace Webhubworks\WeclappApiCore\Model;

class Reminder extends \ArrayObject
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
     * @var list<OnlyId>
     */
    protected $additionalRecipients;
    /**
     * 
     *
     * @var string
     */
    protected $ccMail;
    /**
     * 
     *
     * @var string
     */
    protected $entityId;
    /**
     * 
     *
     * @var string
     */
    protected $entityName;
    /**
     * 
     *
     * @var int
     */
    protected $lastReminderSentDate;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var ReminderRecurringEvent
     */
    protected $recurringEvent;
    /**
     * 
     *
     * @var int
     */
    protected $reminderDate;
    /**
     * 
     *
     * @var string
     */
    protected $sendType;
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
     * @return list<OnlyId>
     */
    public function getAdditionalRecipients(): array
    {
        return $this->additionalRecipients;
    }
    /**
     * 
     *
     * @param list<OnlyId> $additionalRecipients
     *
     * @return self
     */
    public function setAdditionalRecipients(array $additionalRecipients): self
    {
        $this->initialized['additionalRecipients'] = true;
        $this->additionalRecipients = $additionalRecipients;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCcMail(): string
    {
        return $this->ccMail;
    }
    /**
     * 
     *
     * @param string $ccMail
     *
     * @return self
     */
    public function setCcMail(string $ccMail): self
    {
        $this->initialized['ccMail'] = true;
        $this->ccMail = $ccMail;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }
    /**
     * 
     *
     * @param string $entityId
     *
     * @return self
     */
    public function setEntityId(string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEntityName(): string
    {
        return $this->entityName;
    }
    /**
     * 
     *
     * @param string $entityName
     *
     * @return self
     */
    public function setEntityName(string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastReminderSentDate(): int
    {
        return $this->lastReminderSentDate;
    }
    /**
     * 
     *
     * @param int $lastReminderSentDate
     *
     * @return self
     */
    public function setLastReminderSentDate(int $lastReminderSentDate): self
    {
        $this->initialized['lastReminderSentDate'] = true;
        $this->lastReminderSentDate = $lastReminderSentDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return ReminderRecurringEvent
     */
    public function getRecurringEvent(): ReminderRecurringEvent
    {
        return $this->recurringEvent;
    }
    /**
     * 
     *
     * @param ReminderRecurringEvent $recurringEvent
     *
     * @return self
     */
    public function setRecurringEvent(ReminderRecurringEvent $recurringEvent): self
    {
        $this->initialized['recurringEvent'] = true;
        $this->recurringEvent = $recurringEvent;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReminderDate(): int
    {
        return $this->reminderDate;
    }
    /**
     * 
     *
     * @param int $reminderDate
     *
     * @return self
     */
    public function setReminderDate(int $reminderDate): self
    {
        $this->initialized['reminderDate'] = true;
        $this->reminderDate = $reminderDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSendType(): string
    {
        return $this->sendType;
    }
    /**
     * 
     *
     * @param string $sendType
     *
     * @return self
     */
    public function setSendType(string $sendType): self
    {
        $this->initialized['sendType'] = true;
        $this->sendType = $sendType;
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