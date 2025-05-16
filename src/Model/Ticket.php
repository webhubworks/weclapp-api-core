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
    protected $assignedPoolingGroupId;

    /**
     * @var string
     */
    protected $assignedUserId;

    /**
     * @var bool
     */
    protected $billable;

    /**
     * @var bool
     */
    protected $billableStatus;

    /**
     * @var string
     */
    protected $ccEmailAddresses;

    /**
     * @var string
     */
    protected $contactId;

    /**
     * @var string
     */
    protected $contractId;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $disableEmailTemplates;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var list<EntityReference>
     */
    protected $entityReferences;

    /**
     * @var int
     */
    protected $finishedDate;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var int
     */
    protected $followUpDate;

    /**
     * @var string
     */
    protected $invoicingStatus;

    /**
     * @var bool
     */
    protected $isTemplate;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $legacyArticleId;

    /**
     * @var bool
     */
    protected $legacyTimeAndMaterialTicket;

    /**
     * @var string
     */
    protected $mail2TicketId;

    /**
     * @var string
     */
    protected $mobilePhoneNumber;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var string
     */
    protected $partyId;

    /**
     * @var string
     */
    protected $performanceRecordedStatus;

    /**
     * @var string
     */
    protected $phoneNumber;

    /**
     * @var int
     */
    protected $publicPageExpirationDate;

    /**
     * @var string
     */
    protected $publicPageUuid;

    /**
     * @var bool
     */
    protected $resolvedYourIssue;

    /**
     * @var string
     */
    protected $responsibleUserId;

    /**
     * @var string
     */
    protected $room;

    /**
     * @var string
     */
    protected $salesOrderId;

    /**
     * @var int
     */
    protected $solutionDueDate;

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var list<string>
     */
    protected $tags;

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
    protected $ticketNumber;

    /**
     * @var string
     */
    protected $ticketPriorityId;

    /**
     * @var string
     */
    protected $ticketRating;

    /**
     * @var string
     */
    protected $ticketRatingComment;

    /**
     * @var int
     */
    protected $ticketRatingDate;

    /**
     * @var string
     */
    protected $ticketServiceLevelAgreementId;

    /**
     * @var string
     */
    protected $ticketStatusId;

    /**
     * @var string
     */
    protected $ticketTypeId;

    /**
     * @var list<OnlyId>
     */
    protected $watchers;

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

    public function getAssignedUserId(): string
    {
        return $this->assignedUserId;
    }

    public function setAssignedUserId(string $assignedUserId): self
    {
        $this->initialized['assignedUserId'] = true;
        $this->assignedUserId = $assignedUserId;

        return $this;
    }

    public function getBillable(): bool
    {
        return $this->billable;
    }

    public function setBillable(bool $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;

        return $this;
    }

    public function getBillableStatus(): bool
    {
        return $this->billableStatus;
    }

    public function setBillableStatus(bool $billableStatus): self
    {
        $this->initialized['billableStatus'] = true;
        $this->billableStatus = $billableStatus;

        return $this;
    }

    public function getCcEmailAddresses(): string
    {
        return $this->ccEmailAddresses;
    }

    public function setCcEmailAddresses(string $ccEmailAddresses): self
    {
        $this->initialized['ccEmailAddresses'] = true;
        $this->ccEmailAddresses = $ccEmailAddresses;

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

    public function getContractId(): string
    {
        return $this->contractId;
    }

    public function setContractId(string $contractId): self
    {
        $this->initialized['contractId'] = true;
        $this->contractId = $contractId;

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

    public function getDisableEmailTemplates(): bool
    {
        return $this->disableEmailTemplates;
    }

    public function setDisableEmailTemplates(bool $disableEmailTemplates): self
    {
        $this->initialized['disableEmailTemplates'] = true;
        $this->disableEmailTemplates = $disableEmailTemplates;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * @return list<EntityReference>
     */
    public function getEntityReferences(): array
    {
        return $this->entityReferences;
    }

    /**
     * @param  list<EntityReference>  $entityReferences
     */
    public function setEntityReferences(array $entityReferences): self
    {
        $this->initialized['entityReferences'] = true;
        $this->entityReferences = $entityReferences;

        return $this;
    }

    public function getFinishedDate(): int
    {
        return $this->finishedDate;
    }

    public function setFinishedDate(int $finishedDate): self
    {
        $this->initialized['finishedDate'] = true;
        $this->finishedDate = $finishedDate;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    public function getFollowUpDate(): int
    {
        return $this->followUpDate;
    }

    public function setFollowUpDate(int $followUpDate): self
    {
        $this->initialized['followUpDate'] = true;
        $this->followUpDate = $followUpDate;

        return $this;
    }

    public function getInvoicingStatus(): string
    {
        return $this->invoicingStatus;
    }

    public function setInvoicingStatus(string $invoicingStatus): self
    {
        $this->initialized['invoicingStatus'] = true;
        $this->invoicingStatus = $invoicingStatus;

        return $this;
    }

    public function getIsTemplate(): bool
    {
        return $this->isTemplate;
    }

    public function setIsTemplate(bool $isTemplate): self
    {
        $this->initialized['isTemplate'] = true;
        $this->isTemplate = $isTemplate;

        return $this;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    public function getLegacyArticleId(): string
    {
        return $this->legacyArticleId;
    }

    public function setLegacyArticleId(string $legacyArticleId): self
    {
        $this->initialized['legacyArticleId'] = true;
        $this->legacyArticleId = $legacyArticleId;

        return $this;
    }

    public function getLegacyTimeAndMaterialTicket(): bool
    {
        return $this->legacyTimeAndMaterialTicket;
    }

    public function setLegacyTimeAndMaterialTicket(bool $legacyTimeAndMaterialTicket): self
    {
        $this->initialized['legacyTimeAndMaterialTicket'] = true;
        $this->legacyTimeAndMaterialTicket = $legacyTimeAndMaterialTicket;

        return $this;
    }

    public function getMail2TicketId(): string
    {
        return $this->mail2TicketId;
    }

    public function setMail2TicketId(string $mail2TicketId): self
    {
        $this->initialized['mail2TicketId'] = true;
        $this->mail2TicketId = $mail2TicketId;

        return $this;
    }

    public function getMobilePhoneNumber(): string
    {
        return $this->mobilePhoneNumber;
    }

    public function setMobilePhoneNumber(string $mobilePhoneNumber): self
    {
        $this->initialized['mobilePhoneNumber'] = true;
        $this->mobilePhoneNumber = $mobilePhoneNumber;

        return $this;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

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

    public function getPerformanceRecordedStatus(): string
    {
        return $this->performanceRecordedStatus;
    }

    public function setPerformanceRecordedStatus(string $performanceRecordedStatus): self
    {
        $this->initialized['performanceRecordedStatus'] = true;
        $this->performanceRecordedStatus = $performanceRecordedStatus;

        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getPublicPageExpirationDate(): int
    {
        return $this->publicPageExpirationDate;
    }

    public function setPublicPageExpirationDate(int $publicPageExpirationDate): self
    {
        $this->initialized['publicPageExpirationDate'] = true;
        $this->publicPageExpirationDate = $publicPageExpirationDate;

        return $this;
    }

    public function getPublicPageUuid(): string
    {
        return $this->publicPageUuid;
    }

    public function setPublicPageUuid(string $publicPageUuid): self
    {
        $this->initialized['publicPageUuid'] = true;
        $this->publicPageUuid = $publicPageUuid;

        return $this;
    }

    public function getResolvedYourIssue(): bool
    {
        return $this->resolvedYourIssue;
    }

    public function setResolvedYourIssue(bool $resolvedYourIssue): self
    {
        $this->initialized['resolvedYourIssue'] = true;
        $this->resolvedYourIssue = $resolvedYourIssue;

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

    public function getRoom(): string
    {
        return $this->room;
    }

    public function setRoom(string $room): self
    {
        $this->initialized['room'] = true;
        $this->room = $room;

        return $this;
    }

    public function getSalesOrderId(): string
    {
        return $this->salesOrderId;
    }

    public function setSalesOrderId(string $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;

        return $this;
    }

    public function getSolutionDueDate(): int
    {
        return $this->solutionDueDate;
    }

    public function setSolutionDueDate(int $solutionDueDate): self
    {
        $this->initialized['solutionDueDate'] = true;
        $this->solutionDueDate = $solutionDueDate;

        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

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

    public function getTicketNumber(): string
    {
        return $this->ticketNumber;
    }

    public function setTicketNumber(string $ticketNumber): self
    {
        $this->initialized['ticketNumber'] = true;
        $this->ticketNumber = $ticketNumber;

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

    public function getTicketRating(): string
    {
        return $this->ticketRating;
    }

    public function setTicketRating(string $ticketRating): self
    {
        $this->initialized['ticketRating'] = true;
        $this->ticketRating = $ticketRating;

        return $this;
    }

    public function getTicketRatingComment(): string
    {
        return $this->ticketRatingComment;
    }

    public function setTicketRatingComment(string $ticketRatingComment): self
    {
        $this->initialized['ticketRatingComment'] = true;
        $this->ticketRatingComment = $ticketRatingComment;

        return $this;
    }

    public function getTicketRatingDate(): int
    {
        return $this->ticketRatingDate;
    }

    public function setTicketRatingDate(int $ticketRatingDate): self
    {
        $this->initialized['ticketRatingDate'] = true;
        $this->ticketRatingDate = $ticketRatingDate;

        return $this;
    }

    public function getTicketServiceLevelAgreementId(): string
    {
        return $this->ticketServiceLevelAgreementId;
    }

    public function setTicketServiceLevelAgreementId(string $ticketServiceLevelAgreementId): self
    {
        $this->initialized['ticketServiceLevelAgreementId'] = true;
        $this->ticketServiceLevelAgreementId = $ticketServiceLevelAgreementId;

        return $this;
    }

    public function getTicketStatusId(): string
    {
        return $this->ticketStatusId;
    }

    public function setTicketStatusId(string $ticketStatusId): self
    {
        $this->initialized['ticketStatusId'] = true;
        $this->ticketStatusId = $ticketStatusId;

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

    /**
     * @return list<OnlyId>
     */
    public function getWatchers(): array
    {
        return $this->watchers;
    }

    /**
     * @param  list<OnlyId>  $watchers
     */
    public function setWatchers(array $watchers): self
    {
        $this->initialized['watchers'] = true;
        $this->watchers = $watchers;

        return $this;
    }
}
