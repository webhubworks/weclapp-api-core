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
    protected $assignedPoolingGroupId;
    /**
     * 
     *
     * @var string
     */
    protected $assigneeUserId;
    /**
     * 
     *
     * @var string
     */
    protected $commercialLanguage;
    /**
     * 
     *
     * @var string
     */
    protected $distributionChannel;
    /**
     * 
     *
     * @var string
     */
    protected $partyId;
    /**
     * 
     *
     * @var string
     */
    protected $responsibleUserId;
    /**
     * 
     *
     * @var string
     */
    protected $targetStatusId;
    /**
     * 
     *
     * @var string
     */
    protected $ticketAssigneeType;
    /**
     * 
     *
     * @var string
     */
    protected $ticketCategoryId;
    /**
     * 
     *
     * @var string
     */
    protected $ticketChannelId;
    /**
     * 
     *
     * @var string
     */
    protected $ticketPriorityId;
    /**
     * 
     *
     * @var string
     */
    protected $ticketTypeId;
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
    public function getAssignedPoolingGroupId(): string
    {
        return $this->assignedPoolingGroupId;
    }
    /**
     * 
     *
     * @param string $assignedPoolingGroupId
     *
     * @return self
     */
    public function setAssignedPoolingGroupId(string $assignedPoolingGroupId): self
    {
        $this->initialized['assignedPoolingGroupId'] = true;
        $this->assignedPoolingGroupId = $assignedPoolingGroupId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAssigneeUserId(): string
    {
        return $this->assigneeUserId;
    }
    /**
     * 
     *
     * @param string $assigneeUserId
     *
     * @return self
     */
    public function setAssigneeUserId(string $assigneeUserId): self
    {
        $this->initialized['assigneeUserId'] = true;
        $this->assigneeUserId = $assigneeUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommercialLanguage(): string
    {
        return $this->commercialLanguage;
    }
    /**
     * 
     *
     * @param string $commercialLanguage
     *
     * @return self
     */
    public function setCommercialLanguage(string $commercialLanguage): self
    {
        $this->initialized['commercialLanguage'] = true;
        $this->commercialLanguage = $commercialLanguage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDistributionChannel(): string
    {
        return $this->distributionChannel;
    }
    /**
     * 
     *
     * @param string $distributionChannel
     *
     * @return self
     */
    public function setDistributionChannel(string $distributionChannel): self
    {
        $this->initialized['distributionChannel'] = true;
        $this->distributionChannel = $distributionChannel;
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
     * @return string
     */
    public function getResponsibleUserId(): string
    {
        return $this->responsibleUserId;
    }
    /**
     * 
     *
     * @param string $responsibleUserId
     *
     * @return self
     */
    public function setResponsibleUserId(string $responsibleUserId): self
    {
        $this->initialized['responsibleUserId'] = true;
        $this->responsibleUserId = $responsibleUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTargetStatusId(): string
    {
        return $this->targetStatusId;
    }
    /**
     * 
     *
     * @param string $targetStatusId
     *
     * @return self
     */
    public function setTargetStatusId(string $targetStatusId): self
    {
        $this->initialized['targetStatusId'] = true;
        $this->targetStatusId = $targetStatusId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTicketAssigneeType(): string
    {
        return $this->ticketAssigneeType;
    }
    /**
     * 
     *
     * @param string $ticketAssigneeType
     *
     * @return self
     */
    public function setTicketAssigneeType(string $ticketAssigneeType): self
    {
        $this->initialized['ticketAssigneeType'] = true;
        $this->ticketAssigneeType = $ticketAssigneeType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTicketCategoryId(): string
    {
        return $this->ticketCategoryId;
    }
    /**
     * 
     *
     * @param string $ticketCategoryId
     *
     * @return self
     */
    public function setTicketCategoryId(string $ticketCategoryId): self
    {
        $this->initialized['ticketCategoryId'] = true;
        $this->ticketCategoryId = $ticketCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTicketChannelId(): string
    {
        return $this->ticketChannelId;
    }
    /**
     * 
     *
     * @param string $ticketChannelId
     *
     * @return self
     */
    public function setTicketChannelId(string $ticketChannelId): self
    {
        $this->initialized['ticketChannelId'] = true;
        $this->ticketChannelId = $ticketChannelId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTicketPriorityId(): string
    {
        return $this->ticketPriorityId;
    }
    /**
     * 
     *
     * @param string $ticketPriorityId
     *
     * @return self
     */
    public function setTicketPriorityId(string $ticketPriorityId): self
    {
        $this->initialized['ticketPriorityId'] = true;
        $this->ticketPriorityId = $ticketPriorityId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTicketTypeId(): string
    {
        return $this->ticketTypeId;
    }
    /**
     * 
     *
     * @param string $ticketTypeId
     *
     * @return self
     */
    public function setTicketTypeId(string $ticketTypeId): self
    {
        $this->initialized['ticketTypeId'] = true;
        $this->ticketTypeId = $ticketTypeId;
        return $this;
    }
}