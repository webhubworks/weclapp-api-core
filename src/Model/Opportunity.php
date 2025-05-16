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
     * @var list<mixed>
     */
    protected $customAttributes;

    /**
     * @var string
     */
    protected $contactId;

    /**
     * @var string
     */
    protected $creatorId;

    /**
     * @var string
     */
    protected $customerId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $customerNumber;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $expectedDeliveryDate;

    /**
     * @var int
     */
    protected $expectedSignatureDate;

    /**
     * @var bool
     */
    protected $hotLead;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $nextCallDate;

    /**
     * @var string
     */
    protected $opportunityNumber;

    /**
     * @var string
     */
    protected $responsibleUserId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $responsibleUserUsername;

    /**
     * @var string
     */
    protected $revenue;

    /**
     * @var string
     */
    protected $salesChannel;

    /**
     * @var int
     */
    protected $salesProbability;

    /**
     * @var list<SalesStageHistory>
     */
    protected $salesStageHistory;

    /**
     * @var string
     */
    protected $salesStageId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $salesStageName;

    /**
     * @var int
     */
    protected $startDate;

    /**
     * @var list<string>
     */
    protected $tags;

    /**
     * @deprecated
     *
     * @var list<Entity>
     */
    protected $topics;

    /**
     * @var string
     */
    protected $winLossDescription;

    /**
     * @var string
     */
    protected $winLossReasonId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $winLossReasonName;

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

    /**
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>  $customAttributes
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getContactId(): string
    {
        return $this->contactId;
    }

    public function setContactId(string $contactId): self
    {
        $this->initialized['contactId'] = true;
        $this->contactId = $contactId;

        return $this;
    }

    public function getCreatorId(): string
    {
        return $this->creatorId;
    }

    public function setCreatorId(string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;

        return $this;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function setCustomerId(string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomerNumber(): string
    {
        return $this->customerNumber;
    }

    /**
     * @deprecated
     */
    public function setCustomerNumber(string $customerNumber): self
    {
        $this->initialized['customerNumber'] = true;
        $this->customerNumber = $customerNumber;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getExpectedDeliveryDate(): int
    {
        return $this->expectedDeliveryDate;
    }

    public function setExpectedDeliveryDate(int $expectedDeliveryDate): self
    {
        $this->initialized['expectedDeliveryDate'] = true;
        $this->expectedDeliveryDate = $expectedDeliveryDate;

        return $this;
    }

    public function getExpectedSignatureDate(): int
    {
        return $this->expectedSignatureDate;
    }

    public function setExpectedSignatureDate(int $expectedSignatureDate): self
    {
        $this->initialized['expectedSignatureDate'] = true;
        $this->expectedSignatureDate = $expectedSignatureDate;

        return $this;
    }

    public function getHotLead(): bool
    {
        return $this->hotLead;
    }

    public function setHotLead(bool $hotLead): self
    {
        $this->initialized['hotLead'] = true;
        $this->hotLead = $hotLead;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getNextCallDate(): int
    {
        return $this->nextCallDate;
    }

    public function setNextCallDate(int $nextCallDate): self
    {
        $this->initialized['nextCallDate'] = true;
        $this->nextCallDate = $nextCallDate;

        return $this;
    }

    public function getOpportunityNumber(): string
    {
        return $this->opportunityNumber;
    }

    public function setOpportunityNumber(string $opportunityNumber): self
    {
        $this->initialized['opportunityNumber'] = true;
        $this->opportunityNumber = $opportunityNumber;

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

    /**
     * @deprecated
     */
    public function getResponsibleUserUsername(): string
    {
        return $this->responsibleUserUsername;
    }

    /**
     * @deprecated
     */
    public function setResponsibleUserUsername(string $responsibleUserUsername): self
    {
        $this->initialized['responsibleUserUsername'] = true;
        $this->responsibleUserUsername = $responsibleUserUsername;

        return $this;
    }

    public function getRevenue(): string
    {
        return $this->revenue;
    }

    public function setRevenue(string $revenue): self
    {
        $this->initialized['revenue'] = true;
        $this->revenue = $revenue;

        return $this;
    }

    public function getSalesChannel(): string
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;

        return $this;
    }

    public function getSalesProbability(): int
    {
        return $this->salesProbability;
    }

    public function setSalesProbability(int $salesProbability): self
    {
        $this->initialized['salesProbability'] = true;
        $this->salesProbability = $salesProbability;

        return $this;
    }

    /**
     * @return list<SalesStageHistory>
     */
    public function getSalesStageHistory(): array
    {
        return $this->salesStageHistory;
    }

    /**
     * @param  list<SalesStageHistory>  $salesStageHistory
     */
    public function setSalesStageHistory(array $salesStageHistory): self
    {
        $this->initialized['salesStageHistory'] = true;
        $this->salesStageHistory = $salesStageHistory;

        return $this;
    }

    public function getSalesStageId(): string
    {
        return $this->salesStageId;
    }

    public function setSalesStageId(string $salesStageId): self
    {
        $this->initialized['salesStageId'] = true;
        $this->salesStageId = $salesStageId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSalesStageName(): string
    {
        return $this->salesStageName;
    }

    /**
     * @deprecated
     */
    public function setSalesStageName(string $salesStageName): self
    {
        $this->initialized['salesStageName'] = true;
        $this->salesStageName = $salesStageName;

        return $this;
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function setStartDate(int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param  list<string>  $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    /**
     * @deprecated
     *
     * @return list<Entity>
     */
    public function getTopics(): array
    {
        return $this->topics;
    }

    /**
     * @param  list<Entity>  $topics
     *
     * @deprecated
     */
    public function setTopics(array $topics): self
    {
        $this->initialized['topics'] = true;
        $this->topics = $topics;

        return $this;
    }

    public function getWinLossDescription(): string
    {
        return $this->winLossDescription;
    }

    public function setWinLossDescription(string $winLossDescription): self
    {
        $this->initialized['winLossDescription'] = true;
        $this->winLossDescription = $winLossDescription;

        return $this;
    }

    public function getWinLossReasonId(): string
    {
        return $this->winLossReasonId;
    }

    public function setWinLossReasonId(string $winLossReasonId): self
    {
        $this->initialized['winLossReasonId'] = true;
        $this->winLossReasonId = $winLossReasonId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getWinLossReasonName(): string
    {
        return $this->winLossReasonName;
    }

    /**
     * @deprecated
     */
    public function setWinLossReasonName(string $winLossReasonName): self
    {
        $this->initialized['winLossReasonName'] = true;
        $this->winLossReasonName = $winLossReasonName;

        return $this;
    }
}
