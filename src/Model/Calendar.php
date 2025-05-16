<?php

namespace Webhubworks\WeclappApiCore\Model;

class Calendar extends \ArrayObject
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
    protected $caldavAccountId;

    /**
     * @var string|null
     */
    protected $calendarColor;

    /**
     * @var string|null
     */
    protected $calendarKey;

    /**
     * @var list<CalendarSharingPermissions>|null
     */
    protected $calendarSharingPermissions;

    /**
     * @var string|null
     */
    protected $lastEventsSyncToken;

    /**
     * @var string|null
     */
    protected $mailAccountId;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $ownerId;

    /**
     * @var bool|null
     */
    protected $sharePrivateEvents;

    /**
     * @var bool|null
     */
    protected $synchronize;

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

    public function getCaldavAccountId(): ?string
    {
        return $this->caldavAccountId;
    }

    public function setCaldavAccountId(?string $caldavAccountId): self
    {
        $this->initialized['caldavAccountId'] = true;
        $this->caldavAccountId = $caldavAccountId;

        return $this;
    }

    public function getCalendarColor(): ?string
    {
        return $this->calendarColor;
    }

    public function setCalendarColor(?string $calendarColor): self
    {
        $this->initialized['calendarColor'] = true;
        $this->calendarColor = $calendarColor;

        return $this;
    }

    public function getCalendarKey(): ?string
    {
        return $this->calendarKey;
    }

    public function setCalendarKey(?string $calendarKey): self
    {
        $this->initialized['calendarKey'] = true;
        $this->calendarKey = $calendarKey;

        return $this;
    }

    /**
     * @return list<CalendarSharingPermissions>|null
     */
    public function getCalendarSharingPermissions(): ?array
    {
        return $this->calendarSharingPermissions;
    }

    /**
     * @param  list<CalendarSharingPermissions>|null  $calendarSharingPermissions
     */
    public function setCalendarSharingPermissions(?array $calendarSharingPermissions): self
    {
        $this->initialized['calendarSharingPermissions'] = true;
        $this->calendarSharingPermissions = $calendarSharingPermissions;

        return $this;
    }

    public function getLastEventsSyncToken(): ?string
    {
        return $this->lastEventsSyncToken;
    }

    public function setLastEventsSyncToken(?string $lastEventsSyncToken): self
    {
        $this->initialized['lastEventsSyncToken'] = true;
        $this->lastEventsSyncToken = $lastEventsSyncToken;

        return $this;
    }

    public function getMailAccountId(): ?string
    {
        return $this->mailAccountId;
    }

    public function setMailAccountId(?string $mailAccountId): self
    {
        $this->initialized['mailAccountId'] = true;
        $this->mailAccountId = $mailAccountId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getOwnerId(): ?string
    {
        return $this->ownerId;
    }

    public function setOwnerId(?string $ownerId): self
    {
        $this->initialized['ownerId'] = true;
        $this->ownerId = $ownerId;

        return $this;
    }

    public function getSharePrivateEvents(): ?bool
    {
        return $this->sharePrivateEvents;
    }

    public function setSharePrivateEvents(?bool $sharePrivateEvents): self
    {
        $this->initialized['sharePrivateEvents'] = true;
        $this->sharePrivateEvents = $sharePrivateEvents;

        return $this;
    }

    public function getSynchronize(): ?bool
    {
        return $this->synchronize;
    }

    public function setSynchronize(?bool $synchronize): self
    {
        $this->initialized['synchronize'] = true;
        $this->synchronize = $synchronize;

        return $this;
    }
}
