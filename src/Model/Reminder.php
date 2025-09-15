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
     * @var list<OnlyId>|null
     */
    protected $additionalRecipients;
    /**
     * 
     *
     * @var string|null
     */
    protected $ccMail;
    /**
     * 
     *
     * @var string|null
     */
    protected $entityId;
    /**
     * 
     *
     * @var string|null
     */
    protected $entityName;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastReminderSentDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $message;
    /**
     * 
     *
     * @var ReminderRecurringEvent|null
     */
    protected $recurringEvent;
    /**
     * 
     *
     * @var int|null
     */
    protected $reminderDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $sendType;
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
     * @return list<OnlyId>|null
     */
    public function getAdditionalRecipients(): ?array
    {
        return $this->additionalRecipients;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $additionalRecipients
     *
     * @return self
     */
    public function setAdditionalRecipients(?array $additionalRecipients): self
    {
        $this->initialized['additionalRecipients'] = true;
        $this->additionalRecipients = $additionalRecipients;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCcMail(): ?string
    {
        return $this->ccMail;
    }
    /**
     * 
     *
     * @param string|null $ccMail
     *
     * @return self
     */
    public function setCcMail(?string $ccMail): self
    {
        $this->initialized['ccMail'] = true;
        $this->ccMail = $ccMail;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }
    /**
     * 
     *
     * @param string|null $entityId
     *
     * @return self
     */
    public function setEntityId(?string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEntityName(): ?string
    {
        return $this->entityName;
    }
    /**
     * 
     *
     * @param string|null $entityName
     *
     * @return self
     */
    public function setEntityName(?string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastReminderSentDate(): ?int
    {
        return $this->lastReminderSentDate;
    }
    /**
     * 
     *
     * @param int|null $lastReminderSentDate
     *
     * @return self
     */
    public function setLastReminderSentDate(?int $lastReminderSentDate): self
    {
        $this->initialized['lastReminderSentDate'] = true;
        $this->lastReminderSentDate = $lastReminderSentDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return ReminderRecurringEvent|null
     */
    public function getRecurringEvent(): ?ReminderRecurringEvent
    {
        return $this->recurringEvent;
    }
    /**
     * 
     *
     * @param ReminderRecurringEvent|null $recurringEvent
     *
     * @return self
     */
    public function setRecurringEvent(?ReminderRecurringEvent $recurringEvent): self
    {
        $this->initialized['recurringEvent'] = true;
        $this->recurringEvent = $recurringEvent;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReminderDate(): ?int
    {
        return $this->reminderDate;
    }
    /**
     * 
     *
     * @param int|null $reminderDate
     *
     * @return self
     */
    public function setReminderDate(?int $reminderDate): self
    {
        $this->initialized['reminderDate'] = true;
        $this->reminderDate = $reminderDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSendType(): ?string
    {
        return $this->sendType;
    }
    /**
     * 
     *
     * @param string|null $sendType
     *
     * @return self
     */
    public function setSendType(?string $sendType): self
    {
        $this->initialized['sendType'] = true;
        $this->sendType = $sendType;
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