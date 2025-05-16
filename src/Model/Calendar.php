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
     * @var string|null
     */
    protected $caldavAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $calendarColor;
    /**
     * 
     *
     * @var string|null
     */
    protected $calendarKey;
    /**
     * 
     *
     * @var list<CalendarSharingPermissions>|null
     */
    protected $calendarSharingPermissions;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastEventsSyncToken;
    /**
     * 
     *
     * @var string|null
     */
    protected $mailAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $ownerId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $sharePrivateEvents;
    /**
     * 
     *
     * @var bool|null
     */
    protected $synchronize;
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
     * @return string|null
     */
    public function getCaldavAccountId(): ?string
    {
        return $this->caldavAccountId;
    }
    /**
     * 
     *
     * @param string|null $caldavAccountId
     *
     * @return self
     */
    public function setCaldavAccountId(?string $caldavAccountId): self
    {
        $this->initialized['caldavAccountId'] = true;
        $this->caldavAccountId = $caldavAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCalendarColor(): ?string
    {
        return $this->calendarColor;
    }
    /**
     * 
     *
     * @param string|null $calendarColor
     *
     * @return self
     */
    public function setCalendarColor(?string $calendarColor): self
    {
        $this->initialized['calendarColor'] = true;
        $this->calendarColor = $calendarColor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCalendarKey(): ?string
    {
        return $this->calendarKey;
    }
    /**
     * 
     *
     * @param string|null $calendarKey
     *
     * @return self
     */
    public function setCalendarKey(?string $calendarKey): self
    {
        $this->initialized['calendarKey'] = true;
        $this->calendarKey = $calendarKey;
        return $this;
    }
    /**
     * 
     *
     * @return list<CalendarSharingPermissions>|null
     */
    public function getCalendarSharingPermissions(): ?array
    {
        return $this->calendarSharingPermissions;
    }
    /**
     * 
     *
     * @param list<CalendarSharingPermissions>|null $calendarSharingPermissions
     *
     * @return self
     */
    public function setCalendarSharingPermissions(?array $calendarSharingPermissions): self
    {
        $this->initialized['calendarSharingPermissions'] = true;
        $this->calendarSharingPermissions = $calendarSharingPermissions;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastEventsSyncToken(): ?string
    {
        return $this->lastEventsSyncToken;
    }
    /**
     * 
     *
     * @param string|null $lastEventsSyncToken
     *
     * @return self
     */
    public function setLastEventsSyncToken(?string $lastEventsSyncToken): self
    {
        $this->initialized['lastEventsSyncToken'] = true;
        $this->lastEventsSyncToken = $lastEventsSyncToken;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMailAccountId(): ?string
    {
        return $this->mailAccountId;
    }
    /**
     * 
     *
     * @param string|null $mailAccountId
     *
     * @return self
     */
    public function setMailAccountId(?string $mailAccountId): self
    {
        $this->initialized['mailAccountId'] = true;
        $this->mailAccountId = $mailAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOwnerId(): ?string
    {
        return $this->ownerId;
    }
    /**
     * 
     *
     * @param string|null $ownerId
     *
     * @return self
     */
    public function setOwnerId(?string $ownerId): self
    {
        $this->initialized['ownerId'] = true;
        $this->ownerId = $ownerId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSharePrivateEvents(): ?bool
    {
        return $this->sharePrivateEvents;
    }
    /**
     * 
     *
     * @param bool|null $sharePrivateEvents
     *
     * @return self
     */
    public function setSharePrivateEvents(?bool $sharePrivateEvents): self
    {
        $this->initialized['sharePrivateEvents'] = true;
        $this->sharePrivateEvents = $sharePrivateEvents;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSynchronize(): ?bool
    {
        return $this->synchronize;
    }
    /**
     * 
     *
     * @param bool|null $synchronize
     *
     * @return self
     */
    public function setSynchronize(?bool $synchronize): self
    {
        $this->initialized['synchronize'] = true;
        $this->synchronize = $synchronize;
        return $this;
    }
}