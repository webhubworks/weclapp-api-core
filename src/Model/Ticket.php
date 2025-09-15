<?php

namespace Webhubworks\WeclappApiCore\Model;

class Ticket extends \ArrayObject
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
    protected $assignedPoolingGroupId;
    /**
     * 
     *
     * @var string|null
     */
    protected $assignedUserId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $billable;
    /**
     * 
     *
     * @var bool|null
     */
    protected $billableStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $ccEmailAddresses;
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
    protected $contractId;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool|null
     */
    protected $disableEmailTemplates;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var list<EntityReference>|null
     */
    protected $entityReferences;
    /**
     * 
     *
     * @var int|null
     */
    protected $finishedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var int|null
     */
    protected $followUpDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoicingStatus;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isTemplate;
    /**
     * 
     *
     * @var string|null
     */
    protected $language;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * 
     *
     * @var string|null
     */
    protected $legacyArticleId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $legacyTimeAndMaterialTicket;
    /**
     * 
     *
     * @var string|null
     */
    protected $mail2TicketId;
    /**
     * 
     *
     * @var string|null
     */
    protected $mobilePhoneNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $note;
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
    protected $performanceRecordedStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $publicPageExpirationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $publicPageUuid;
    /**
     * 
     *
     * @var bool|null
     */
    protected $resolvedYourIssue;
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
    protected $room;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderId;
    /**
     * 
     *
     * @var int|null
     */
    protected $solutionDueDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $subject;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $tags;
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
    protected $ticketNumber;
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
    protected $ticketRating;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketRatingComment;
    /**
     * 
     *
     * @var int|null
     */
    protected $ticketRatingDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketServiceLevelAgreementId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketStatusId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketTypeId;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $watchers;
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
    public function getAssignedUserId(): ?string
    {
        return $this->assignedUserId;
    }
    /**
     * 
     *
     * @param string|null $assignedUserId
     *
     * @return self
     */
    public function setAssignedUserId(?string $assignedUserId): self
    {
        $this->initialized['assignedUserId'] = true;
        $this->assignedUserId = $assignedUserId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBillable(): ?bool
    {
        return $this->billable;
    }
    /**
     * 
     *
     * @param bool|null $billable
     *
     * @return self
     */
    public function setBillable(?bool $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBillableStatus(): ?bool
    {
        return $this->billableStatus;
    }
    /**
     * 
     *
     * @param bool|null $billableStatus
     *
     * @return self
     */
    public function setBillableStatus(?bool $billableStatus): self
    {
        $this->initialized['billableStatus'] = true;
        $this->billableStatus = $billableStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCcEmailAddresses(): ?string
    {
        return $this->ccEmailAddresses;
    }
    /**
     * 
     *
     * @param string|null $ccEmailAddresses
     *
     * @return self
     */
    public function setCcEmailAddresses(?string $ccEmailAddresses): self
    {
        $this->initialized['ccEmailAddresses'] = true;
        $this->ccEmailAddresses = $ccEmailAddresses;
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
    public function getContractId(): ?string
    {
        return $this->contractId;
    }
    /**
     * 
     *
     * @param string|null $contractId
     *
     * @return self
     */
    public function setContractId(?string $contractId): self
    {
        $this->initialized['contractId'] = true;
        $this->contractId = $contractId;
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
     * @return bool|null
     */
    public function getDisableEmailTemplates(): ?bool
    {
        return $this->disableEmailTemplates;
    }
    /**
     * 
     *
     * @param bool|null $disableEmailTemplates
     *
     * @return self
     */
    public function setDisableEmailTemplates(?bool $disableEmailTemplates): self
    {
        $this->initialized['disableEmailTemplates'] = true;
        $this->disableEmailTemplates = $disableEmailTemplates;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return list<EntityReference>|null
     */
    public function getEntityReferences(): ?array
    {
        return $this->entityReferences;
    }
    /**
     * 
     *
     * @param list<EntityReference>|null $entityReferences
     *
     * @return self
     */
    public function setEntityReferences(?array $entityReferences): self
    {
        $this->initialized['entityReferences'] = true;
        $this->entityReferences = $entityReferences;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFinishedDate(): ?int
    {
        return $this->finishedDate;
    }
    /**
     * 
     *
     * @param int|null $finishedDate
     *
     * @return self
     */
    public function setFinishedDate(?int $finishedDate): self
    {
        $this->initialized['finishedDate'] = true;
        $this->finishedDate = $finishedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFollowUpDate(): ?int
    {
        return $this->followUpDate;
    }
    /**
     * 
     *
     * @param int|null $followUpDate
     *
     * @return self
     */
    public function setFollowUpDate(?int $followUpDate): self
    {
        $this->initialized['followUpDate'] = true;
        $this->followUpDate = $followUpDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoicingStatus(): ?string
    {
        return $this->invoicingStatus;
    }
    /**
     * 
     *
     * @param string|null $invoicingStatus
     *
     * @return self
     */
    public function setInvoicingStatus(?string $invoicingStatus): self
    {
        $this->initialized['invoicingStatus'] = true;
        $this->invoicingStatus = $invoicingStatus;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsTemplate(): ?bool
    {
        return $this->isTemplate;
    }
    /**
     * 
     *
     * @param bool|null $isTemplate
     *
     * @return self
     */
    public function setIsTemplate(?bool $isTemplate): self
    {
        $this->initialized['isTemplate'] = true;
        $this->isTemplate = $isTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLegacyArticleId(): ?string
    {
        return $this->legacyArticleId;
    }
    /**
     * 
     *
     * @param string|null $legacyArticleId
     *
     * @return self
     */
    public function setLegacyArticleId(?string $legacyArticleId): self
    {
        $this->initialized['legacyArticleId'] = true;
        $this->legacyArticleId = $legacyArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getLegacyTimeAndMaterialTicket(): ?bool
    {
        return $this->legacyTimeAndMaterialTicket;
    }
    /**
     * 
     *
     * @param bool|null $legacyTimeAndMaterialTicket
     *
     * @return self
     */
    public function setLegacyTimeAndMaterialTicket(?bool $legacyTimeAndMaterialTicket): self
    {
        $this->initialized['legacyTimeAndMaterialTicket'] = true;
        $this->legacyTimeAndMaterialTicket = $legacyTimeAndMaterialTicket;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMail2TicketId(): ?string
    {
        return $this->mail2TicketId;
    }
    /**
     * 
     *
     * @param string|null $mail2TicketId
     *
     * @return self
     */
    public function setMail2TicketId(?string $mail2TicketId): self
    {
        $this->initialized['mail2TicketId'] = true;
        $this->mail2TicketId = $mail2TicketId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMobilePhoneNumber(): ?string
    {
        return $this->mobilePhoneNumber;
    }
    /**
     * 
     *
     * @param string|null $mobilePhoneNumber
     *
     * @return self
     */
    public function setMobilePhoneNumber(?string $mobilePhoneNumber): self
    {
        $this->initialized['mobilePhoneNumber'] = true;
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
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
    public function getPerformanceRecordedStatus(): ?string
    {
        return $this->performanceRecordedStatus;
    }
    /**
     * 
     *
     * @param string|null $performanceRecordedStatus
     *
     * @return self
     */
    public function setPerformanceRecordedStatus(?string $performanceRecordedStatus): self
    {
        $this->initialized['performanceRecordedStatus'] = true;
        $this->performanceRecordedStatus = $performanceRecordedStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }
    /**
     * 
     *
     * @param string|null $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPublicPageExpirationDate(): ?int
    {
        return $this->publicPageExpirationDate;
    }
    /**
     * 
     *
     * @param int|null $publicPageExpirationDate
     *
     * @return self
     */
    public function setPublicPageExpirationDate(?int $publicPageExpirationDate): self
    {
        $this->initialized['publicPageExpirationDate'] = true;
        $this->publicPageExpirationDate = $publicPageExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPublicPageUuid(): ?string
    {
        return $this->publicPageUuid;
    }
    /**
     * 
     *
     * @param string|null $publicPageUuid
     *
     * @return self
     */
    public function setPublicPageUuid(?string $publicPageUuid): self
    {
        $this->initialized['publicPageUuid'] = true;
        $this->publicPageUuid = $publicPageUuid;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getResolvedYourIssue(): ?bool
    {
        return $this->resolvedYourIssue;
    }
    /**
     * 
     *
     * @param bool|null $resolvedYourIssue
     *
     * @return self
     */
    public function setResolvedYourIssue(?bool $resolvedYourIssue): self
    {
        $this->initialized['resolvedYourIssue'] = true;
        $this->resolvedYourIssue = $resolvedYourIssue;
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
    public function getRoom(): ?string
    {
        return $this->room;
    }
    /**
     * 
     *
     * @param string|null $room
     *
     * @return self
     */
    public function setRoom(?string $room): self
    {
        $this->initialized['room'] = true;
        $this->room = $room;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesOrderId(): ?string
    {
        return $this->salesOrderId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderId
     *
     * @return self
     */
    public function setSalesOrderId(?string $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSolutionDueDate(): ?int
    {
        return $this->solutionDueDate;
    }
    /**
     * 
     *
     * @param int|null $solutionDueDate
     *
     * @return self
     */
    public function setSolutionDueDate(?int $solutionDueDate): self
    {
        $this->initialized['solutionDueDate'] = true;
        $this->solutionDueDate = $solutionDueDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param string|null $subject
     *
     * @return self
     */
    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
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
    public function getTicketNumber(): ?string
    {
        return $this->ticketNumber;
    }
    /**
     * 
     *
     * @param string|null $ticketNumber
     *
     * @return self
     */
    public function setTicketNumber(?string $ticketNumber): self
    {
        $this->initialized['ticketNumber'] = true;
        $this->ticketNumber = $ticketNumber;
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
    public function getTicketRating(): ?string
    {
        return $this->ticketRating;
    }
    /**
     * 
     *
     * @param string|null $ticketRating
     *
     * @return self
     */
    public function setTicketRating(?string $ticketRating): self
    {
        $this->initialized['ticketRating'] = true;
        $this->ticketRating = $ticketRating;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketRatingComment(): ?string
    {
        return $this->ticketRatingComment;
    }
    /**
     * 
     *
     * @param string|null $ticketRatingComment
     *
     * @return self
     */
    public function setTicketRatingComment(?string $ticketRatingComment): self
    {
        $this->initialized['ticketRatingComment'] = true;
        $this->ticketRatingComment = $ticketRatingComment;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTicketRatingDate(): ?int
    {
        return $this->ticketRatingDate;
    }
    /**
     * 
     *
     * @param int|null $ticketRatingDate
     *
     * @return self
     */
    public function setTicketRatingDate(?int $ticketRatingDate): self
    {
        $this->initialized['ticketRatingDate'] = true;
        $this->ticketRatingDate = $ticketRatingDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketServiceLevelAgreementId(): ?string
    {
        return $this->ticketServiceLevelAgreementId;
    }
    /**
     * 
     *
     * @param string|null $ticketServiceLevelAgreementId
     *
     * @return self
     */
    public function setTicketServiceLevelAgreementId(?string $ticketServiceLevelAgreementId): self
    {
        $this->initialized['ticketServiceLevelAgreementId'] = true;
        $this->ticketServiceLevelAgreementId = $ticketServiceLevelAgreementId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketStatusId(): ?string
    {
        return $this->ticketStatusId;
    }
    /**
     * 
     *
     * @param string|null $ticketStatusId
     *
     * @return self
     */
    public function setTicketStatusId(?string $ticketStatusId): self
    {
        $this->initialized['ticketStatusId'] = true;
        $this->ticketStatusId = $ticketStatusId;
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
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getWatchers(): ?array
    {
        return $this->watchers;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $watchers
     *
     * @return self
     */
    public function setWatchers(?array $watchers): self
    {
        $this->initialized['watchers'] = true;
        $this->watchers = $watchers;
        return $this;
    }
}