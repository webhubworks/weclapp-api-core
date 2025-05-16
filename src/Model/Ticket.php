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
    protected $assignedPoolingGroupId;
    /**
     * 
     *
     * @var string
     */
    protected $assignedUserId;
    /**
     * 
     *
     * @var bool
     */
    protected $billable;
    /**
     * 
     *
     * @var bool
     */
    protected $billableStatus;
    /**
     * 
     *
     * @var string
     */
    protected $ccEmailAddresses;
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
    protected $contractId;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $disableEmailTemplates;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var list<EntityReference>
     */
    protected $entityReferences;
    /**
     * 
     *
     * @var int
     */
    protected $finishedDate;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var int
     */
    protected $followUpDate;
    /**
     * 
     *
     * @var string
     */
    protected $invoicingStatus;
    /**
     * 
     *
     * @var bool
     */
    protected $isTemplate;
    /**
     * 
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var string
     */
    protected $legacyArticleId;
    /**
     * 
     *
     * @var bool
     */
    protected $legacyTimeAndMaterialTicket;
    /**
     * 
     *
     * @var string
     */
    protected $mail2TicketId;
    /**
     * 
     *
     * @var string
     */
    protected $mobilePhoneNumber;
    /**
     * 
     *
     * @var string
     */
    protected $note;
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
    protected $performanceRecordedStatus;
    /**
     * 
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * 
     *
     * @var int
     */
    protected $publicPageExpirationDate;
    /**
     * 
     *
     * @var string
     */
    protected $publicPageUuid;
    /**
     * 
     *
     * @var bool
     */
    protected $resolvedYourIssue;
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
    protected $room;
    /**
     * 
     *
     * @var string
     */
    protected $salesOrderId;
    /**
     * 
     *
     * @var int
     */
    protected $solutionDueDate;
    /**
     * 
     *
     * @var string
     */
    protected $subject;
    /**
     * 
     *
     * @var list<string>
     */
    protected $tags;
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
    protected $ticketNumber;
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
    protected $ticketRating;
    /**
     * 
     *
     * @var string
     */
    protected $ticketRatingComment;
    /**
     * 
     *
     * @var int
     */
    protected $ticketRatingDate;
    /**
     * 
     *
     * @var string
     */
    protected $ticketServiceLevelAgreementId;
    /**
     * 
     *
     * @var string
     */
    protected $ticketStatusId;
    /**
     * 
     *
     * @var string
     */
    protected $ticketTypeId;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $watchers;
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
    public function getAssignedUserId(): string
    {
        return $this->assignedUserId;
    }
    /**
     * 
     *
     * @param string $assignedUserId
     *
     * @return self
     */
    public function setAssignedUserId(string $assignedUserId): self
    {
        $this->initialized['assignedUserId'] = true;
        $this->assignedUserId = $assignedUserId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBillable(): bool
    {
        return $this->billable;
    }
    /**
     * 
     *
     * @param bool $billable
     *
     * @return self
     */
    public function setBillable(bool $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBillableStatus(): bool
    {
        return $this->billableStatus;
    }
    /**
     * 
     *
     * @param bool $billableStatus
     *
     * @return self
     */
    public function setBillableStatus(bool $billableStatus): self
    {
        $this->initialized['billableStatus'] = true;
        $this->billableStatus = $billableStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCcEmailAddresses(): string
    {
        return $this->ccEmailAddresses;
    }
    /**
     * 
     *
     * @param string $ccEmailAddresses
     *
     * @return self
     */
    public function setCcEmailAddresses(string $ccEmailAddresses): self
    {
        $this->initialized['ccEmailAddresses'] = true;
        $this->ccEmailAddresses = $ccEmailAddresses;
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
    public function getContractId(): string
    {
        return $this->contractId;
    }
    /**
     * 
     *
     * @param string $contractId
     *
     * @return self
     */
    public function setContractId(string $contractId): self
    {
        $this->initialized['contractId'] = true;
        $this->contractId = $contractId;
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
     * @return bool
     */
    public function getDisableEmailTemplates(): bool
    {
        return $this->disableEmailTemplates;
    }
    /**
     * 
     *
     * @param bool $disableEmailTemplates
     *
     * @return self
     */
    public function setDisableEmailTemplates(bool $disableEmailTemplates): self
    {
        $this->initialized['disableEmailTemplates'] = true;
        $this->disableEmailTemplates = $disableEmailTemplates;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return list<EntityReference>
     */
    public function getEntityReferences(): array
    {
        return $this->entityReferences;
    }
    /**
     * 
     *
     * @param list<EntityReference> $entityReferences
     *
     * @return self
     */
    public function setEntityReferences(array $entityReferences): self
    {
        $this->initialized['entityReferences'] = true;
        $this->entityReferences = $entityReferences;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFinishedDate(): int
    {
        return $this->finishedDate;
    }
    /**
     * 
     *
     * @param int $finishedDate
     *
     * @return self
     */
    public function setFinishedDate(int $finishedDate): self
    {
        $this->initialized['finishedDate'] = true;
        $this->finishedDate = $finishedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFollowUpDate(): int
    {
        return $this->followUpDate;
    }
    /**
     * 
     *
     * @param int $followUpDate
     *
     * @return self
     */
    public function setFollowUpDate(int $followUpDate): self
    {
        $this->initialized['followUpDate'] = true;
        $this->followUpDate = $followUpDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoicingStatus(): string
    {
        return $this->invoicingStatus;
    }
    /**
     * 
     *
     * @param string $invoicingStatus
     *
     * @return self
     */
    public function setInvoicingStatus(string $invoicingStatus): self
    {
        $this->initialized['invoicingStatus'] = true;
        $this->invoicingStatus = $invoicingStatus;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsTemplate(): bool
    {
        return $this->isTemplate;
    }
    /**
     * 
     *
     * @param bool $isTemplate
     *
     * @return self
     */
    public function setIsTemplate(bool $isTemplate): self
    {
        $this->initialized['isTemplate'] = true;
        $this->isTemplate = $isTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLegacyArticleId(): string
    {
        return $this->legacyArticleId;
    }
    /**
     * 
     *
     * @param string $legacyArticleId
     *
     * @return self
     */
    public function setLegacyArticleId(string $legacyArticleId): self
    {
        $this->initialized['legacyArticleId'] = true;
        $this->legacyArticleId = $legacyArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getLegacyTimeAndMaterialTicket(): bool
    {
        return $this->legacyTimeAndMaterialTicket;
    }
    /**
     * 
     *
     * @param bool $legacyTimeAndMaterialTicket
     *
     * @return self
     */
    public function setLegacyTimeAndMaterialTicket(bool $legacyTimeAndMaterialTicket): self
    {
        $this->initialized['legacyTimeAndMaterialTicket'] = true;
        $this->legacyTimeAndMaterialTicket = $legacyTimeAndMaterialTicket;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMail2TicketId(): string
    {
        return $this->mail2TicketId;
    }
    /**
     * 
     *
     * @param string $mail2TicketId
     *
     * @return self
     */
    public function setMail2TicketId(string $mail2TicketId): self
    {
        $this->initialized['mail2TicketId'] = true;
        $this->mail2TicketId = $mail2TicketId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMobilePhoneNumber(): string
    {
        return $this->mobilePhoneNumber;
    }
    /**
     * 
     *
     * @param string $mobilePhoneNumber
     *
     * @return self
     */
    public function setMobilePhoneNumber(string $mobilePhoneNumber): self
    {
        $this->initialized['mobilePhoneNumber'] = true;
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
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
    public function getPerformanceRecordedStatus(): string
    {
        return $this->performanceRecordedStatus;
    }
    /**
     * 
     *
     * @param string $performanceRecordedStatus
     *
     * @return self
     */
    public function setPerformanceRecordedStatus(string $performanceRecordedStatus): self
    {
        $this->initialized['performanceRecordedStatus'] = true;
        $this->performanceRecordedStatus = $performanceRecordedStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * 
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPublicPageExpirationDate(): int
    {
        return $this->publicPageExpirationDate;
    }
    /**
     * 
     *
     * @param int $publicPageExpirationDate
     *
     * @return self
     */
    public function setPublicPageExpirationDate(int $publicPageExpirationDate): self
    {
        $this->initialized['publicPageExpirationDate'] = true;
        $this->publicPageExpirationDate = $publicPageExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPublicPageUuid(): string
    {
        return $this->publicPageUuid;
    }
    /**
     * 
     *
     * @param string $publicPageUuid
     *
     * @return self
     */
    public function setPublicPageUuid(string $publicPageUuid): self
    {
        $this->initialized['publicPageUuid'] = true;
        $this->publicPageUuid = $publicPageUuid;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getResolvedYourIssue(): bool
    {
        return $this->resolvedYourIssue;
    }
    /**
     * 
     *
     * @param bool $resolvedYourIssue
     *
     * @return self
     */
    public function setResolvedYourIssue(bool $resolvedYourIssue): self
    {
        $this->initialized['resolvedYourIssue'] = true;
        $this->resolvedYourIssue = $resolvedYourIssue;
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
    public function getRoom(): string
    {
        return $this->room;
    }
    /**
     * 
     *
     * @param string $room
     *
     * @return self
     */
    public function setRoom(string $room): self
    {
        $this->initialized['room'] = true;
        $this->room = $room;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesOrderId(): string
    {
        return $this->salesOrderId;
    }
    /**
     * 
     *
     * @param string $salesOrderId
     *
     * @return self
     */
    public function setSalesOrderId(string $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSolutionDueDate(): int
    {
        return $this->solutionDueDate;
    }
    /**
     * 
     *
     * @param int $solutionDueDate
     *
     * @return self
     */
    public function setSolutionDueDate(int $solutionDueDate): self
    {
        $this->initialized['solutionDueDate'] = true;
        $this->solutionDueDate = $solutionDueDate;
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
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
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
    public function getTicketNumber(): string
    {
        return $this->ticketNumber;
    }
    /**
     * 
     *
     * @param string $ticketNumber
     *
     * @return self
     */
    public function setTicketNumber(string $ticketNumber): self
    {
        $this->initialized['ticketNumber'] = true;
        $this->ticketNumber = $ticketNumber;
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
    public function getTicketRating(): string
    {
        return $this->ticketRating;
    }
    /**
     * 
     *
     * @param string $ticketRating
     *
     * @return self
     */
    public function setTicketRating(string $ticketRating): self
    {
        $this->initialized['ticketRating'] = true;
        $this->ticketRating = $ticketRating;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTicketRatingComment(): string
    {
        return $this->ticketRatingComment;
    }
    /**
     * 
     *
     * @param string $ticketRatingComment
     *
     * @return self
     */
    public function setTicketRatingComment(string $ticketRatingComment): self
    {
        $this->initialized['ticketRatingComment'] = true;
        $this->ticketRatingComment = $ticketRatingComment;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTicketRatingDate(): int
    {
        return $this->ticketRatingDate;
    }
    /**
     * 
     *
     * @param int $ticketRatingDate
     *
     * @return self
     */
    public function setTicketRatingDate(int $ticketRatingDate): self
    {
        $this->initialized['ticketRatingDate'] = true;
        $this->ticketRatingDate = $ticketRatingDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTicketServiceLevelAgreementId(): string
    {
        return $this->ticketServiceLevelAgreementId;
    }
    /**
     * 
     *
     * @param string $ticketServiceLevelAgreementId
     *
     * @return self
     */
    public function setTicketServiceLevelAgreementId(string $ticketServiceLevelAgreementId): self
    {
        $this->initialized['ticketServiceLevelAgreementId'] = true;
        $this->ticketServiceLevelAgreementId = $ticketServiceLevelAgreementId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTicketStatusId(): string
    {
        return $this->ticketStatusId;
    }
    /**
     * 
     *
     * @param string $ticketStatusId
     *
     * @return self
     */
    public function setTicketStatusId(string $ticketStatusId): self
    {
        $this->initialized['ticketStatusId'] = true;
        $this->ticketStatusId = $ticketStatusId;
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
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getWatchers(): array
    {
        return $this->watchers;
    }
    /**
     * 
     *
     * @param list<OnlyId> $watchers
     *
     * @return self
     */
    public function setWatchers(array $watchers): self
    {
        $this->initialized['watchers'] = true;
        $this->watchers = $watchers;
        return $this;
    }
}