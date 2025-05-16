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
     * @var list<OnlyId>|null
     */
    protected $additionalRecipients;

    /**
     * @var string|null
     */
    protected $ccMail;

    /**
     * @var string|null
     */
    protected $entityId;

    /**
     * @var string|null
     */
    protected $entityName;

    /**
     * @var int|null
     */
    protected $lastReminderSentDate;

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var ReminderRecurringEvent|null
     */
    protected $recurringEvent;

    /**
     * @var int|null
     */
    protected $reminderDate;

    /**
     * @var string|null
     */
    protected $sendType;

    /**
     * @var string|null
     */
    protected $subject;

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

    /**
     * @return list<OnlyId>|null
     */
    public function getAdditionalRecipients(): ?array
    {
        return $this->additionalRecipients;
    }

    /**
     * @param  list<OnlyId>|null  $additionalRecipients
     */
    public function setAdditionalRecipients(?array $additionalRecipients): self
    {
        $this->initialized['additionalRecipients'] = true;
        $this->additionalRecipients = $additionalRecipients;

        return $this;
    }

    public function getCcMail(): ?string
    {
        return $this->ccMail;
    }

    public function setCcMail(?string $ccMail): self
    {
        $this->initialized['ccMail'] = true;
        $this->ccMail = $ccMail;

        return $this;
    }

    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    public function setEntityId(?string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;

        return $this;
    }

    public function getEntityName(): ?string
    {
        return $this->entityName;
    }

    public function setEntityName(?string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;

        return $this;
    }

    public function getLastReminderSentDate(): ?int
    {
        return $this->lastReminderSentDate;
    }

    public function setLastReminderSentDate(?int $lastReminderSentDate): self
    {
        $this->initialized['lastReminderSentDate'] = true;
        $this->lastReminderSentDate = $lastReminderSentDate;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    public function getRecurringEvent(): ?ReminderRecurringEvent
    {
        return $this->recurringEvent;
    }

    public function setRecurringEvent(?ReminderRecurringEvent $recurringEvent): self
    {
        $this->initialized['recurringEvent'] = true;
        $this->recurringEvent = $recurringEvent;

        return $this;
    }

    public function getReminderDate(): ?int
    {
        return $this->reminderDate;
    }

    public function setReminderDate(?int $reminderDate): self
    {
        $this->initialized['reminderDate'] = true;
        $this->reminderDate = $reminderDate;

        return $this;
    }

    public function getSendType(): ?string
    {
        return $this->sendType;
    }

    public function setSendType(?string $sendType): self
    {
        $this->initialized['sendType'] = true;
        $this->sendType = $sendType;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

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
