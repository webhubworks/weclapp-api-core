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
    protected $assignedPoolingGroupId;
    /**
     * 
     *
     * @var string|null
     */
    protected $assigneeUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $commercialLanguage;
    /**
     * 
     *
     * @var string|null
     */
    protected $distributionChannel;
    /**
     * 
     *
     * @var string|null
     */
    protected $partyId;
    /**
     * 
     *
     * @var string|null
     */
    protected $responsibleUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $targetStatusId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketAssigneeType;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketCategoryId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketChannelId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketPriorityId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketTypeId;
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
    public function getAssignedPoolingGroupId(): ?string
    {
        return $this->assignedPoolingGroupId;
    }
    /**
     * 
     *
     * @param string|null $assignedPoolingGroupId
     *
     * @return self
     */
    public function setAssignedPoolingGroupId(?string $assignedPoolingGroupId): self
    {
        $this->initialized['assignedPoolingGroupId'] = true;
        $this->assignedPoolingGroupId = $assignedPoolingGroupId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAssigneeUserId(): ?string
    {
        return $this->assigneeUserId;
    }
    /**
     * 
     *
     * @param string|null $assigneeUserId
     *
     * @return self
     */
    public function setAssigneeUserId(?string $assigneeUserId): self
    {
        $this->initialized['assigneeUserId'] = true;
        $this->assigneeUserId = $assigneeUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommercialLanguage(): ?string
    {
        return $this->commercialLanguage;
    }
    /**
     * 
     *
     * @param string|null $commercialLanguage
     *
     * @return self
     */
    public function setCommercialLanguage(?string $commercialLanguage): self
    {
        $this->initialized['commercialLanguage'] = true;
        $this->commercialLanguage = $commercialLanguage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDistributionChannel(): ?string
    {
        return $this->distributionChannel;
    }
    /**
     * 
     *
     * @param string|null $distributionChannel
     *
     * @return self
     */
    public function setDistributionChannel(?string $distributionChannel): self
    {
        $this->initialized['distributionChannel'] = true;
        $this->distributionChannel = $distributionChannel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPartyId(): ?string
    {
        return $this->partyId;
    }
    /**
     * 
     *
     * @param string|null $partyId
     *
     * @return self
     */
    public function setPartyId(?string $partyId): self
    {
        $this->initialized['partyId'] = true;
        $this->partyId = $partyId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getResponsibleUserId(): ?string
    {
        return $this->responsibleUserId;
    }
    /**
     * 
     *
     * @param string|null $responsibleUserId
     *
     * @return self
     */
    public function setResponsibleUserId(?string $responsibleUserId): self
    {
        $this->initialized['responsibleUserId'] = true;
        $this->responsibleUserId = $responsibleUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTargetStatusId(): ?string
    {
        return $this->targetStatusId;
    }
    /**
     * 
     *
     * @param string|null $targetStatusId
     *
     * @return self
     */
    public function setTargetStatusId(?string $targetStatusId): self
    {
        $this->initialized['targetStatusId'] = true;
        $this->targetStatusId = $targetStatusId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketAssigneeType(): ?string
    {
        return $this->ticketAssigneeType;
    }
    /**
     * 
     *
     * @param string|null $ticketAssigneeType
     *
     * @return self
     */
    public function setTicketAssigneeType(?string $ticketAssigneeType): self
    {
        $this->initialized['ticketAssigneeType'] = true;
        $this->ticketAssigneeType = $ticketAssigneeType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketCategoryId(): ?string
    {
        return $this->ticketCategoryId;
    }
    /**
     * 
     *
     * @param string|null $ticketCategoryId
     *
     * @return self
     */
    public function setTicketCategoryId(?string $ticketCategoryId): self
    {
        $this->initialized['ticketCategoryId'] = true;
        $this->ticketCategoryId = $ticketCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketChannelId(): ?string
    {
        return $this->ticketChannelId;
    }
    /**
     * 
     *
     * @param string|null $ticketChannelId
     *
     * @return self
     */
    public function setTicketChannelId(?string $ticketChannelId): self
    {
        $this->initialized['ticketChannelId'] = true;
        $this->ticketChannelId = $ticketChannelId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketPriorityId(): ?string
    {
        return $this->ticketPriorityId;
    }
    /**
     * 
     *
     * @param string|null $ticketPriorityId
     *
     * @return self
     */
    public function setTicketPriorityId(?string $ticketPriorityId): self
    {
        $this->initialized['ticketPriorityId'] = true;
        $this->ticketPriorityId = $ticketPriorityId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketTypeId(): ?string
    {
        return $this->ticketTypeId;
    }
    /**
     * 
     *
     * @param string|null $ticketTypeId
     *
     * @return self
     */
    public function setTicketTypeId(?string $ticketTypeId): self
    {
        $this->initialized['ticketTypeId'] = true;
        $this->ticketTypeId = $ticketTypeId;
        return $this;
    }
}