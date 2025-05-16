<?php

namespace Webhubworks\WeclappApiCore\Model;

class Opportunity extends \ArrayObject
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
     * @var list<mixed>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string|null
     */
    protected $contactId;
    /**
     * 
     *
     * @var string|null
     */
    protected $creatorId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $customerNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var int|null
     */
    protected $expectedDeliveryDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $expectedSignatureDate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $hotLead;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $nextCallDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $opportunityNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $responsibleUserId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $responsibleUserUsername;
    /**
     * 
     *
     * @var string|null
     */
    protected $revenue;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesChannel;
    /**
     * 
     *
     * @var int|null
     */
    protected $salesProbability;
    /**
     * 
     *
     * @var list<SalesStageHistory>|null
     */
    protected $salesStageHistory;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesStageId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $salesStageName;
    /**
     * 
     *
     * @var int|null
     */
    protected $startDate;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $tags;
    /**
     * 
     *
     * @deprecated
     *
     * @var list<Entity>|null
     */
    protected $topics;
    /**
     * 
     *
     * @var string|null
     */
    protected $winLossDescription;
    /**
     * 
     *
     * @var string|null
     */
    protected $winLossReasonId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $winLossReasonName;
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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed>|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }
    /**
     * 
     *
     * @param string|null $contactId
     *
     * @return self
     */
    public function setContactId(?string $contactId): self
    {
        $this->initialized['contactId'] = true;
        $this->contactId = $contactId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatorId(): ?string
    {
        return $this->creatorId;
    }
    /**
     * 
     *
     * @param string|null $creatorId
     *
     * @return self
     */
    public function setCreatorId(?string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getCustomerNumber(): ?string
    {
        return $this->customerNumber;
    }
    /**
     * 
     *
     * @param string|null $customerNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setCustomerNumber(?string $customerNumber): self
    {
        $this->initialized['customerNumber'] = true;
        $this->customerNumber = $customerNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExpectedDeliveryDate(): ?int
    {
        return $this->expectedDeliveryDate;
    }
    /**
     * 
     *
     * @param int|null $expectedDeliveryDate
     *
     * @return self
     */
    public function setExpectedDeliveryDate(?int $expectedDeliveryDate): self
    {
        $this->initialized['expectedDeliveryDate'] = true;
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExpectedSignatureDate(): ?int
    {
        return $this->expectedSignatureDate;
    }
    /**
     * 
     *
     * @param int|null $expectedSignatureDate
     *
     * @return self
     */
    public function setExpectedSignatureDate(?int $expectedSignatureDate): self
    {
        $this->initialized['expectedSignatureDate'] = true;
        $this->expectedSignatureDate = $expectedSignatureDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getHotLead(): ?bool
    {
        return $this->hotLead;
    }
    /**
     * 
     *
     * @param bool|null $hotLead
     *
     * @return self
     */
    public function setHotLead(?bool $hotLead): self
    {
        $this->initialized['hotLead'] = true;
        $this->hotLead = $hotLead;
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
     * @return int|null
     */
    public function getNextCallDate(): ?int
    {
        return $this->nextCallDate;
    }
    /**
     * 
     *
     * @param int|null $nextCallDate
     *
     * @return self
     */
    public function setNextCallDate(?int $nextCallDate): self
    {
        $this->initialized['nextCallDate'] = true;
        $this->nextCallDate = $nextCallDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpportunityNumber(): ?string
    {
        return $this->opportunityNumber;
    }
    /**
     * 
     *
     * @param string|null $opportunityNumber
     *
     * @return self
     */
    public function setOpportunityNumber(?string $opportunityNumber): self
    {
        $this->initialized['opportunityNumber'] = true;
        $this->opportunityNumber = $opportunityNumber;
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
     * @deprecated
     *
     * @return string|null
     */
    public function getResponsibleUserUsername(): ?string
    {
        return $this->responsibleUserUsername;
    }
    /**
     * 
     *
     * @param string|null $responsibleUserUsername
     *
     * @deprecated
     *
     * @return self
     */
    public function setResponsibleUserUsername(?string $responsibleUserUsername): self
    {
        $this->initialized['responsibleUserUsername'] = true;
        $this->responsibleUserUsername = $responsibleUserUsername;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRevenue(): ?string
    {
        return $this->revenue;
    }
    /**
     * 
     *
     * @param string|null $revenue
     *
     * @return self
     */
    public function setRevenue(?string $revenue): self
    {
        $this->initialized['revenue'] = true;
        $this->revenue = $revenue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesChannel(): ?string
    {
        return $this->salesChannel;
    }
    /**
     * 
     *
     * @param string|null $salesChannel
     *
     * @return self
     */
    public function setSalesChannel(?string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSalesProbability(): ?int
    {
        return $this->salesProbability;
    }
    /**
     * 
     *
     * @param int|null $salesProbability
     *
     * @return self
     */
    public function setSalesProbability(?int $salesProbability): self
    {
        $this->initialized['salesProbability'] = true;
        $this->salesProbability = $salesProbability;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesStageHistory>|null
     */
    public function getSalesStageHistory(): ?array
    {
        return $this->salesStageHistory;
    }
    /**
     * 
     *
     * @param list<SalesStageHistory>|null $salesStageHistory
     *
     * @return self
     */
    public function setSalesStageHistory(?array $salesStageHistory): self
    {
        $this->initialized['salesStageHistory'] = true;
        $this->salesStageHistory = $salesStageHistory;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesStageId(): ?string
    {
        return $this->salesStageId;
    }
    /**
     * 
     *
     * @param string|null $salesStageId
     *
     * @return self
     */
    public function setSalesStageId(?string $salesStageId): self
    {
        $this->initialized['salesStageId'] = true;
        $this->salesStageId = $salesStageId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getSalesStageName(): ?string
    {
        return $this->salesStageName;
    }
    /**
     * 
     *
     * @param string|null $salesStageName
     *
     * @deprecated
     *
     * @return self
     */
    public function setSalesStageName(?string $salesStageName): self
    {
        $this->initialized['salesStageName'] = true;
        $this->salesStageName = $salesStageName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStartDate(): ?int
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param int|null $startDate
     *
     * @return self
     */
    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param list<string>|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return list<Entity>|null
     */
    public function getTopics(): ?array
    {
        return $this->topics;
    }
    /**
     * 
     *
     * @param list<Entity>|null $topics
     *
     * @deprecated
     *
     * @return self
     */
    public function setTopics(?array $topics): self
    {
        $this->initialized['topics'] = true;
        $this->topics = $topics;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWinLossDescription(): ?string
    {
        return $this->winLossDescription;
    }
    /**
     * 
     *
     * @param string|null $winLossDescription
     *
     * @return self
     */
    public function setWinLossDescription(?string $winLossDescription): self
    {
        $this->initialized['winLossDescription'] = true;
        $this->winLossDescription = $winLossDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWinLossReasonId(): ?string
    {
        return $this->winLossReasonId;
    }
    /**
     * 
     *
     * @param string|null $winLossReasonId
     *
     * @return self
     */
    public function setWinLossReasonId(?string $winLossReasonId): self
    {
        $this->initialized['winLossReasonId'] = true;
        $this->winLossReasonId = $winLossReasonId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getWinLossReasonName(): ?string
    {
        return $this->winLossReasonName;
    }
    /**
     * 
     *
     * @param string|null $winLossReasonName
     *
     * @deprecated
     *
     * @return self
     */
    public function setWinLossReasonName(?string $winLossReasonName): self
    {
        $this->initialized['winLossReasonName'] = true;
        $this->winLossReasonName = $winLossReasonName;
        return $this;
    }
}