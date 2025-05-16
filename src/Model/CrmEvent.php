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
     * @var list<mixed>|null
     */
    protected $customAttributes;

    /**
     * @var string|null
     */
    protected $callCategoryId;

    /**
     * @var string|null
     */
    protected $contactId;

    /**
     * @var string|null
     */
    protected $creatorUserId;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var int|null
     */
    protected $endDate;

    /**
     * @var string|null
     */
    protected $eventCategoryId;

    /**
     * @var string|null
     */
    protected $location;

    /**
     * @var string|null
     */
    protected $opportunityId;

    /**
     * @var string|null
     */
    protected $partyId;

    /**
     * @var int|null
     */
    protected $startDate;

    /**
     * @var string|null
     */
    protected $subject;

    /**
     * @var string|null
     */
    protected $type;

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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>|null  $customAttributes
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getCallCategoryId(): ?string
    {
        return $this->callCategoryId;
    }

    public function setCallCategoryId(?string $callCategoryId): self
    {
        $this->initialized['callCategoryId'] = true;
        $this->callCategoryId = $callCategoryId;

        return $this;
    }

    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    public function setContactId(?string $contactId): self
    {
        $this->initialized['contactId'] = true;
        $this->contactId = $contactId;

        return $this;
    }

    public function getCreatorUserId(): ?string
    {
        return $this->creatorUserId;
    }

    public function setCreatorUserId(?string $creatorUserId): self
    {
        $this->initialized['creatorUserId'] = true;
        $this->creatorUserId = $creatorUserId;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getEndDate(): ?int
    {
        return $this->endDate;
    }

    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    public function getEventCategoryId(): ?string
    {
        return $this->eventCategoryId;
    }

    public function setEventCategoryId(?string $eventCategoryId): self
    {
        $this->initialized['eventCategoryId'] = true;
        $this->eventCategoryId = $eventCategoryId;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    public function getOpportunityId(): ?string
    {
        return $this->opportunityId;
    }

    public function setOpportunityId(?string $opportunityId): self
    {
        $this->initialized['opportunityId'] = true;
        $this->opportunityId = $opportunityId;

        return $this;
    }

    public function getPartyId(): ?string
    {
        return $this->partyId;
    }

    public function setPartyId(?string $partyId): self
    {
        $this->initialized['partyId'] = true;
        $this->partyId = $partyId;

        return $this;
    }

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
