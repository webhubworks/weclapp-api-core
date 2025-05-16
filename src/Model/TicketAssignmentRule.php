<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketAssignmentRule extends \ArrayObject
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
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $assignedPoolingGroupId;

    /**
     * @var string
     */
    protected $assigneeUserId;

    /**
     * @var string
     */
    protected $commercialLanguage;

    /**
     * @var string
     */
    protected $distributionChannel;

    /**
     * @var string
     */
    protected $partyId;

    /**
     * @var string
     */
    protected $responsibleUserId;

    /**
     * @var string
     */
    protected $targetStatusId;

    /**
     * @var string
     */
    protected $ticketAssigneeType;

    /**
     * @var string
     */
    protected $ticketCategoryId;

    /**
     * @var string
     */
    protected $ticketChannelId;

    /**
     * @var string
     */
    protected $ticketPriorityId;

    /**
     * @var string
     */
    protected $ticketTypeId;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getAssignedPoolingGroupId(): string
    {
        return $this->assignedPoolingGroupId;
    }

    public function setAssignedPoolingGroupId(string $assignedPoolingGroupId): self
    {
        $this->initialized['assignedPoolingGroupId'] = true;
        $this->assignedPoolingGroupId = $assignedPoolingGroupId;

        return $this;
    }

    public function getAssigneeUserId(): string
    {
        return $this->assigneeUserId;
    }

    public function setAssigneeUserId(string $assigneeUserId): self
    {
        $this->initialized['assigneeUserId'] = true;
        $this->assigneeUserId = $assigneeUserId;

        return $this;
    }

    public function getCommercialLanguage(): string
    {
        return $this->commercialLanguage;
    }

    public function setCommercialLanguage(string $commercialLanguage): self
    {
        $this->initialized['commercialLanguage'] = true;
        $this->commercialLanguage = $commercialLanguage;

        return $this;
    }

    public function getDistributionChannel(): string
    {
        return $this->distributionChannel;
    }

    public function setDistributionChannel(string $distributionChannel): self
    {
        $this->initialized['distributionChannel'] = true;
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    public function getPartyId(): string
    {
        return $this->partyId;
    }

    public function setPartyId(string $partyId): self
    {
        $this->initialized['partyId'] = true;
        $this->partyId = $partyId;

        return $this;
    }

    public function getResponsibleUserId(): string
    {
        return $this->responsibleUserId;
    }

    public function setResponsibleUserId(string $responsibleUserId): self
    {
        $this->initialized['responsibleUserId'] = true;
        $this->responsibleUserId = $responsibleUserId;

        return $this;
    }

    public function getTargetStatusId(): string
    {
        return $this->targetStatusId;
    }

    public function setTargetStatusId(string $targetStatusId): self
    {
        $this->initialized['targetStatusId'] = true;
        $this->targetStatusId = $targetStatusId;

        return $this;
    }

    public function getTicketAssigneeType(): string
    {
        return $this->ticketAssigneeType;
    }

    public function setTicketAssigneeType(string $ticketAssigneeType): self
    {
        $this->initialized['ticketAssigneeType'] = true;
        $this->ticketAssigneeType = $ticketAssigneeType;

        return $this;
    }

    public function getTicketCategoryId(): string
    {
        return $this->ticketCategoryId;
    }

    public function setTicketCategoryId(string $ticketCategoryId): self
    {
        $this->initialized['ticketCategoryId'] = true;
        $this->ticketCategoryId = $ticketCategoryId;

        return $this;
    }

    public function getTicketChannelId(): string
    {
        return $this->ticketChannelId;
    }

    public function setTicketChannelId(string $ticketChannelId): self
    {
        $this->initialized['ticketChannelId'] = true;
        $this->ticketChannelId = $ticketChannelId;

        return $this;
    }

    public function getTicketPriorityId(): string
    {
        return $this->ticketPriorityId;
    }

    public function setTicketPriorityId(string $ticketPriorityId): self
    {
        $this->initialized['ticketPriorityId'] = true;
        $this->ticketPriorityId = $ticketPriorityId;

        return $this;
    }

    public function getTicketTypeId(): string
    {
        return $this->ticketTypeId;
    }

    public function setTicketTypeId(string $ticketTypeId): self
    {
        $this->initialized['ticketTypeId'] = true;
        $this->ticketTypeId = $ticketTypeId;

        return $this;
    }
}
