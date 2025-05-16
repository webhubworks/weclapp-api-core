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
    protected $caldavAccountId;
    /**
     * 
     *
     * @var string
     */
    protected $calendarColor;
    /**
     * 
     *
     * @var string
     */
    protected $calendarKey;
    /**
     * 
     *
     * @var list<CalendarSharingPermissions>
     */
    protected $calendarSharingPermissions;
    /**
     * 
     *
     * @var string
     */
    protected $lastEventsSyncToken;
    /**
     * 
     *
     * @var string
     */
    protected $mailAccountId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $ownerId;
    /**
     * 
     *
     * @var bool
     */
    protected $sharePrivateEvents;
    /**
     * 
     *
     * @var bool
     */
    protected $synchronize;
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
    public function getCaldavAccountId(): string
    {
        return $this->caldavAccountId;
    }
    /**
     * 
     *
     * @param string $caldavAccountId
     *
     * @return self
     */
    public function setCaldavAccountId(string $caldavAccountId): self
    {
        $this->initialized['caldavAccountId'] = true;
        $this->caldavAccountId = $caldavAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCalendarColor(): string
    {
        return $this->calendarColor;
    }
    /**
     * 
     *
     * @param string $calendarColor
     *
     * @return self
     */
    public function setCalendarColor(string $calendarColor): self
    {
        $this->initialized['calendarColor'] = true;
        $this->calendarColor = $calendarColor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCalendarKey(): string
    {
        return $this->calendarKey;
    }
    /**
     * 
     *
     * @param string $calendarKey
     *
     * @return self
     */
    public function setCalendarKey(string $calendarKey): self
    {
        $this->initialized['calendarKey'] = true;
        $this->calendarKey = $calendarKey;
        return $this;
    }
    /**
     * 
     *
     * @return list<CalendarSharingPermissions>
     */
    public function getCalendarSharingPermissions(): array
    {
        return $this->calendarSharingPermissions;
    }
    /**
     * 
     *
     * @param list<CalendarSharingPermissions> $calendarSharingPermissions
     *
     * @return self
     */
    public function setCalendarSharingPermissions(array $calendarSharingPermissions): self
    {
        $this->initialized['calendarSharingPermissions'] = true;
        $this->calendarSharingPermissions = $calendarSharingPermissions;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastEventsSyncToken(): string
    {
        return $this->lastEventsSyncToken;
    }
    /**
     * 
     *
     * @param string $lastEventsSyncToken
     *
     * @return self
     */
    public function setLastEventsSyncToken(string $lastEventsSyncToken): self
    {
        $this->initialized['lastEventsSyncToken'] = true;
        $this->lastEventsSyncToken = $lastEventsSyncToken;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMailAccountId(): string
    {
        return $this->mailAccountId;
    }
    /**
     * 
     *
     * @param string $mailAccountId
     *
     * @return self
     */
    public function setMailAccountId(string $mailAccountId): self
    {
        $this->initialized['mailAccountId'] = true;
        $this->mailAccountId = $mailAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOwnerId(): string
    {
        return $this->ownerId;
    }
    /**
     * 
     *
     * @param string $ownerId
     *
     * @return self
     */
    public function setOwnerId(string $ownerId): self
    {
        $this->initialized['ownerId'] = true;
        $this->ownerId = $ownerId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSharePrivateEvents(): bool
    {
        return $this->sharePrivateEvents;
    }
    /**
     * 
     *
     * @param bool $sharePrivateEvents
     *
     * @return self
     */
    public function setSharePrivateEvents(bool $sharePrivateEvents): self
    {
        $this->initialized['sharePrivateEvents'] = true;
        $this->sharePrivateEvents = $sharePrivateEvents;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSynchronize(): bool
    {
        return $this->synchronize;
    }
    /**
     * 
     *
     * @param bool $synchronize
     *
     * @return self
     */
    public function setSynchronize(bool $synchronize): self
    {
        $this->initialized['synchronize'] = true;
        $this->synchronize = $synchronize;
        return $this;
    }
}