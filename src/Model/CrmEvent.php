<?php

namespace Webhubworks\WeclappApiCore\Model;

class CrmEvent extends \ArrayObject
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
     * @var list<mixed>
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string
     */
    protected $callCategoryId;
    /**
     * 
     *
     * @var string
     */
    protected $contactId;
    /**
     * 
     *
     * @var string
     */
    protected $creatorUserId;
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
    protected $eventCategoryId;
    /**
     * 
     *
     * @var string
     */
    protected $location;
    /**
     * 
     *
     * @var string
     */
    protected $opportunityId;
    /**
     * 
     *
     * @var string
     */
    protected $partyId;
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
    protected $type;
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
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed> $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCallCategoryId(): string
    {
        return $this->callCategoryId;
    }
    /**
     * 
     *
     * @param string $callCategoryId
     *
     * @return self
     */
    public function setCallCategoryId(string $callCategoryId): self
    {
        $this->initialized['callCategoryId'] = true;
        $this->callCategoryId = $callCategoryId;
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
     * @return string
     */
    public function getCreatorUserId(): string
    {
        return $this->creatorUserId;
    }
    /**
     * 
     *
     * @param string $creatorUserId
     *
     * @return self
     */
    public function setCreatorUserId(string $creatorUserId): self
    {
        $this->initialized['creatorUserId'] = true;
        $this->creatorUserId = $creatorUserId;
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
    public function getEventCategoryId(): string
    {
        return $this->eventCategoryId;
    }
    /**
     * 
     *
     * @param string $eventCategoryId
     *
     * @return self
     */
    public function setEventCategoryId(string $eventCategoryId): self
    {
        $this->initialized['eventCategoryId'] = true;
        $this->eventCategoryId = $eventCategoryId;
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
     * @return string
     */
    public function getOpportunityId(): string
    {
        return $this->opportunityId;
    }
    /**
     * 
     *
     * @param string $opportunityId
     *
     * @return self
     */
    public function setOpportunityId(string $opportunityId): self
    {
        $this->initialized['opportunityId'] = true;
        $this->opportunityId = $opportunityId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPartyId(): string
    {
        return $this->partyId;
    }
    /**
     * 
     *
     * @param string $partyId
     *
     * @return self
     */
    public function setPartyId(string $partyId): self
    {
        $this->initialized['partyId'] = true;
        $this->partyId = $partyId;
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
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}