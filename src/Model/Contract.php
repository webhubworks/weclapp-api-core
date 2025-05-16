<?php

namespace Webhubworks\WeclappApiCore\Model;

class Contract extends \ArrayObject
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
    protected $commercialLanguage;
    /**
     * 
     *
     * @var string
     */
    protected $creatorId;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @deprecated
     *
     * @var bool
     */
    protected $disableEmailTemplate;
    /**
     * 
     *
     * @var string
     */
    protected $recordComment;
    /**
     * 
     *
     * @var string
     */
    protected $recordFreeText;
    /**
     * 
     *
     * @var string
     */
    protected $recordOpening;
    /**
     * 
     *
     * @var bool
     */
    protected $sentToRecipient;
    /**
     * 
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * 
     *
     * @var list<ContractAdditionalAddress>
     */
    protected $additionalAddresses;
    /**
     * 
     *
     * @var string
     */
    protected $authorizationUnitId;
    /**
     * 
     *
     * @var bool
     */
    protected $automaticExtension;
    /**
     * 
     *
     * @var string
     */
    protected $billUntil;
    /**
     * 
     *
     * @var int
     */
    protected $billingDay;
    /**
     * 
     *
     * @var string
     */
    protected $billingTargetInvoiceStatus;
    /**
     * 
     *
     * @var string
     */
    protected $billingType;
    /**
     * 
     *
     * @var int
     */
    protected $cancellationDate;
    /**
     * 
     *
     * @var int
     */
    protected $cancellationPeriodQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $cancellationPeriodSoftframe;
    /**
     * 
     *
     * @var string
     */
    protected $cancellationPeriodUnit;
    /**
     * 
     *
     * @var string
     */
    protected $commission;
    /**
     * 
     *
     * @var list<CommissionSalesPartner>
     */
    protected $commissionSalesPartners;
    /**
     * 
     *
     * @var list<ContractCostItem>
     */
    protected $contractCostItems;
    /**
     * 
     *
     * @var int
     */
    protected $contractDate;
    /**
     * 
     *
     * @var list<ContractItem>
     */
    protected $contractItems;
    /**
     * 
     *
     * @var string
     */
    protected $contractNumber;
    /**
     * 
     *
     * @var string
     */
    protected $contractNumberAtParty;
    /**
     * 
     *
     * @var string
     */
    protected $contractStatus;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $correspondenceAddress;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var EmailAddresses
     */
    protected $deliveryEmailAddresses;
    /**
     * 
     *
     * @var bool
     */
    protected $differingCorrespondenceAddress;
    /**
     * 
     *
     * @var bool
     */
    protected $differingDeliveryAddress;
    /**
     * 
     *
     * @var bool
     */
    protected $differingInvoiceAddress;
    /**
     * 
     *
     * @var int
     */
    protected $endDate;
    /**
     * 
     *
     * @var int
     */
    protected $extensionQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $extensionUnit;
    /**
     * 
     *
     * @var bool
     */
    protected $factoring;
    /**
     * 
     *
     * @var RecordAddress
     */
    protected $invoiceAddress;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceRecipientId;
    /**
     * 
     *
     * @var int
     */
    protected $latestCancellationWarningQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $latestCancellationWarningUnit;
    /**
     * 
     *
     * @var int
     */
    protected $latestPossibleTerminationDate;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $nextContractBillingDate;
    /**
     * 
     *
     * @var string
     */
    protected $nonStandardInputTaxId;
    /**
     * 
     *
     * @var string
     */
    protected $orderNumberAtCustomer;
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
    protected $paymentMethodId;
    /**
     * 
     *
     * @var int
     */
    protected $pricingDate;
    /**
     * 
     *
     * @var EmailAddresses
     */
    protected $purchaseEmailAddresses;
    /**
     * 
     *
     * @var string
     */
    protected $recordCurrencyId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $recordCurrencyName;
    /**
     * 
     *
     * @var EmailAddresses
     */
    protected $recordEmailAddresses;
    /**
     * 
     *
     * @var int
     */
    protected $reminderDate;
    /**
     * 
     *
     * @var string
     */
    protected $reminderSendType;
    /**
     * 
     *
     * @var string
     */
    protected $reminderType;
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
    protected $salesChannel;
    /**
     * 
     *
     * @var EmailAddresses
     */
    protected $salesInvoiceEmailAddresses;
    /**
     * 
     *
     * @var EmailAddresses
     */
    protected $salesOrderEmailAddresses;
    /**
     * 
     *
     * @var int
     */
    protected $startDate;
    /**
     * 
     *
     * @var bool
     */
    protected $template;
    /**
     * 
     *
     * @var string
     */
    protected $termOfPaymentId;
    /**
     * 
     *
     * @var string
     */
    protected $terminationReasonId;
    /**
     * 
     *
     * @var string
     */
    protected $ticketServiceLevelAgreementId;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $types;
    /**
     * 
     *
     * @var bool
     */
    protected $unlimited;
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
    public function getCreatorId(): string
    {
        return $this->creatorId;
    }
    /**
     * 
     *
     * @param string $creatorId
     *
     * @return self
     */
    public function setCreatorId(string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
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
     * @deprecated
     *
     * @return bool
     */
    public function getDisableEmailTemplate(): bool
    {
        return $this->disableEmailTemplate;
    }
    /**
     * 
     *
     * @param bool $disableEmailTemplate
     *
     * @deprecated
     *
     * @return self
     */
    public function setDisableEmailTemplate(bool $disableEmailTemplate): self
    {
        $this->initialized['disableEmailTemplate'] = true;
        $this->disableEmailTemplate = $disableEmailTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecordComment(): string
    {
        return $this->recordComment;
    }
    /**
     * 
     *
     * @param string $recordComment
     *
     * @return self
     */
    public function setRecordComment(string $recordComment): self
    {
        $this->initialized['recordComment'] = true;
        $this->recordComment = $recordComment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecordFreeText(): string
    {
        return $this->recordFreeText;
    }
    /**
     * 
     *
     * @param string $recordFreeText
     *
     * @return self
     */
    public function setRecordFreeText(string $recordFreeText): self
    {
        $this->initialized['recordFreeText'] = true;
        $this->recordFreeText = $recordFreeText;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecordOpening(): string
    {
        return $this->recordOpening;
    }
    /**
     * 
     *
     * @param string $recordOpening
     *
     * @return self
     */
    public function setRecordOpening(string $recordOpening): self
    {
        $this->initialized['recordOpening'] = true;
        $this->recordOpening = $recordOpening;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSentToRecipient(): bool
    {
        return $this->sentToRecipient;
    }
    /**
     * 
     *
     * @param bool $sentToRecipient
     *
     * @return self
     */
    public function setSentToRecipient(bool $sentToRecipient): self
    {
        $this->initialized['sentToRecipient'] = true;
        $this->sentToRecipient = $sentToRecipient;
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
     * @return list<ContractAdditionalAddress>
     */
    public function getAdditionalAddresses(): array
    {
        return $this->additionalAddresses;
    }
    /**
     * 
     *
     * @param list<ContractAdditionalAddress> $additionalAddresses
     *
     * @return self
     */
    public function setAdditionalAddresses(array $additionalAddresses): self
    {
        $this->initialized['additionalAddresses'] = true;
        $this->additionalAddresses = $additionalAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthorizationUnitId(): string
    {
        return $this->authorizationUnitId;
    }
    /**
     * 
     *
     * @param string $authorizationUnitId
     *
     * @return self
     */
    public function setAuthorizationUnitId(string $authorizationUnitId): self
    {
        $this->initialized['authorizationUnitId'] = true;
        $this->authorizationUnitId = $authorizationUnitId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAutomaticExtension(): bool
    {
        return $this->automaticExtension;
    }
    /**
     * 
     *
     * @param bool $automaticExtension
     *
     * @return self
     */
    public function setAutomaticExtension(bool $automaticExtension): self
    {
        $this->initialized['automaticExtension'] = true;
        $this->automaticExtension = $automaticExtension;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBillUntil(): string
    {
        return $this->billUntil;
    }
    /**
     * 
     *
     * @param string $billUntil
     *
     * @return self
     */
    public function setBillUntil(string $billUntil): self
    {
        $this->initialized['billUntil'] = true;
        $this->billUntil = $billUntil;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBillingDay(): int
    {
        return $this->billingDay;
    }
    /**
     * 
     *
     * @param int $billingDay
     *
     * @return self
     */
    public function setBillingDay(int $billingDay): self
    {
        $this->initialized['billingDay'] = true;
        $this->billingDay = $billingDay;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBillingTargetInvoiceStatus(): string
    {
        return $this->billingTargetInvoiceStatus;
    }
    /**
     * 
     *
     * @param string $billingTargetInvoiceStatus
     *
     * @return self
     */
    public function setBillingTargetInvoiceStatus(string $billingTargetInvoiceStatus): self
    {
        $this->initialized['billingTargetInvoiceStatus'] = true;
        $this->billingTargetInvoiceStatus = $billingTargetInvoiceStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBillingType(): string
    {
        return $this->billingType;
    }
    /**
     * 
     *
     * @param string $billingType
     *
     * @return self
     */
    public function setBillingType(string $billingType): self
    {
        $this->initialized['billingType'] = true;
        $this->billingType = $billingType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCancellationDate(): int
    {
        return $this->cancellationDate;
    }
    /**
     * 
     *
     * @param int $cancellationDate
     *
     * @return self
     */
    public function setCancellationDate(int $cancellationDate): self
    {
        $this->initialized['cancellationDate'] = true;
        $this->cancellationDate = $cancellationDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCancellationPeriodQuantity(): int
    {
        return $this->cancellationPeriodQuantity;
    }
    /**
     * 
     *
     * @param int $cancellationPeriodQuantity
     *
     * @return self
     */
    public function setCancellationPeriodQuantity(int $cancellationPeriodQuantity): self
    {
        $this->initialized['cancellationPeriodQuantity'] = true;
        $this->cancellationPeriodQuantity = $cancellationPeriodQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCancellationPeriodSoftframe(): string
    {
        return $this->cancellationPeriodSoftframe;
    }
    /**
     * 
     *
     * @param string $cancellationPeriodSoftframe
     *
     * @return self
     */
    public function setCancellationPeriodSoftframe(string $cancellationPeriodSoftframe): self
    {
        $this->initialized['cancellationPeriodSoftframe'] = true;
        $this->cancellationPeriodSoftframe = $cancellationPeriodSoftframe;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCancellationPeriodUnit(): string
    {
        return $this->cancellationPeriodUnit;
    }
    /**
     * 
     *
     * @param string $cancellationPeriodUnit
     *
     * @return self
     */
    public function setCancellationPeriodUnit(string $cancellationPeriodUnit): self
    {
        $this->initialized['cancellationPeriodUnit'] = true;
        $this->cancellationPeriodUnit = $cancellationPeriodUnit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommission(): string
    {
        return $this->commission;
    }
    /**
     * 
     *
     * @param string $commission
     *
     * @return self
     */
    public function setCommission(string $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;
        return $this;
    }
    /**
     * 
     *
     * @return list<CommissionSalesPartner>
     */
    public function getCommissionSalesPartners(): array
    {
        return $this->commissionSalesPartners;
    }
    /**
     * 
     *
     * @param list<CommissionSalesPartner> $commissionSalesPartners
     *
     * @return self
     */
    public function setCommissionSalesPartners(array $commissionSalesPartners): self
    {
        $this->initialized['commissionSalesPartners'] = true;
        $this->commissionSalesPartners = $commissionSalesPartners;
        return $this;
    }
    /**
     * 
     *
     * @return list<ContractCostItem>
     */
    public function getContractCostItems(): array
    {
        return $this->contractCostItems;
    }
    /**
     * 
     *
     * @param list<ContractCostItem> $contractCostItems
     *
     * @return self
     */
    public function setContractCostItems(array $contractCostItems): self
    {
        $this->initialized['contractCostItems'] = true;
        $this->contractCostItems = $contractCostItems;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getContractDate(): int
    {
        return $this->contractDate;
    }
    /**
     * 
     *
     * @param int $contractDate
     *
     * @return self
     */
    public function setContractDate(int $contractDate): self
    {
        $this->initialized['contractDate'] = true;
        $this->contractDate = $contractDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<ContractItem>
     */
    public function getContractItems(): array
    {
        return $this->contractItems;
    }
    /**
     * 
     *
     * @param list<ContractItem> $contractItems
     *
     * @return self
     */
    public function setContractItems(array $contractItems): self
    {
        $this->initialized['contractItems'] = true;
        $this->contractItems = $contractItems;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContractNumber(): string
    {
        return $this->contractNumber;
    }
    /**
     * 
     *
     * @param string $contractNumber
     *
     * @return self
     */
    public function setContractNumber(string $contractNumber): self
    {
        $this->initialized['contractNumber'] = true;
        $this->contractNumber = $contractNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContractNumberAtParty(): string
    {
        return $this->contractNumberAtParty;
    }
    /**
     * 
     *
     * @param string $contractNumberAtParty
     *
     * @return self
     */
    public function setContractNumberAtParty(string $contractNumberAtParty): self
    {
        $this->initialized['contractNumberAtParty'] = true;
        $this->contractNumberAtParty = $contractNumberAtParty;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContractStatus(): string
    {
        return $this->contractStatus;
    }
    /**
     * 
     *
     * @param string $contractStatus
     *
     * @return self
     */
    public function setContractStatus(string $contractStatus): self
    {
        $this->initialized['contractStatus'] = true;
        $this->contractStatus = $contractStatus;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress
     */
    public function getCorrespondenceAddress(): RecordAddress
    {
        return $this->correspondenceAddress;
    }
    /**
     * 
     *
     * @param RecordAddress $correspondenceAddress
     *
     * @return self
     */
    public function setCorrespondenceAddress(RecordAddress $correspondenceAddress): self
    {
        $this->initialized['correspondenceAddress'] = true;
        $this->correspondenceAddress = $correspondenceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress
     */
    public function getDeliveryAddress(): RecordAddress
    {
        return $this->deliveryAddress;
    }
    /**
     * 
     *
     * @param RecordAddress $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(RecordAddress $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses
     */
    public function getDeliveryEmailAddresses(): EmailAddresses
    {
        return $this->deliveryEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses $deliveryEmailAddresses
     *
     * @return self
     */
    public function setDeliveryEmailAddresses(EmailAddresses $deliveryEmailAddresses): self
    {
        $this->initialized['deliveryEmailAddresses'] = true;
        $this->deliveryEmailAddresses = $deliveryEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDifferingCorrespondenceAddress(): bool
    {
        return $this->differingCorrespondenceAddress;
    }
    /**
     * 
     *
     * @param bool $differingCorrespondenceAddress
     *
     * @return self
     */
    public function setDifferingCorrespondenceAddress(bool $differingCorrespondenceAddress): self
    {
        $this->initialized['differingCorrespondenceAddress'] = true;
        $this->differingCorrespondenceAddress = $differingCorrespondenceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDifferingDeliveryAddress(): bool
    {
        return $this->differingDeliveryAddress;
    }
    /**
     * 
     *
     * @param bool $differingDeliveryAddress
     *
     * @return self
     */
    public function setDifferingDeliveryAddress(bool $differingDeliveryAddress): self
    {
        $this->initialized['differingDeliveryAddress'] = true;
        $this->differingDeliveryAddress = $differingDeliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDifferingInvoiceAddress(): bool
    {
        return $this->differingInvoiceAddress;
    }
    /**
     * 
     *
     * @param bool $differingInvoiceAddress
     *
     * @return self
     */
    public function setDifferingInvoiceAddress(bool $differingInvoiceAddress): self
    {
        $this->initialized['differingInvoiceAddress'] = true;
        $this->differingInvoiceAddress = $differingInvoiceAddress;
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
     * @return int
     */
    public function getExtensionQuantity(): int
    {
        return $this->extensionQuantity;
    }
    /**
     * 
     *
     * @param int $extensionQuantity
     *
     * @return self
     */
    public function setExtensionQuantity(int $extensionQuantity): self
    {
        $this->initialized['extensionQuantity'] = true;
        $this->extensionQuantity = $extensionQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExtensionUnit(): string
    {
        return $this->extensionUnit;
    }
    /**
     * 
     *
     * @param string $extensionUnit
     *
     * @return self
     */
    public function setExtensionUnit(string $extensionUnit): self
    {
        $this->initialized['extensionUnit'] = true;
        $this->extensionUnit = $extensionUnit;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFactoring(): bool
    {
        return $this->factoring;
    }
    /**
     * 
     *
     * @param bool $factoring
     *
     * @return self
     */
    public function setFactoring(bool $factoring): self
    {
        $this->initialized['factoring'] = true;
        $this->factoring = $factoring;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress
     */
    public function getInvoiceAddress(): RecordAddress
    {
        return $this->invoiceAddress;
    }
    /**
     * 
     *
     * @param RecordAddress $invoiceAddress
     *
     * @return self
     */
    public function setInvoiceAddress(RecordAddress $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoiceRecipientId(): string
    {
        return $this->invoiceRecipientId;
    }
    /**
     * 
     *
     * @param string $invoiceRecipientId
     *
     * @return self
     */
    public function setInvoiceRecipientId(string $invoiceRecipientId): self
    {
        $this->initialized['invoiceRecipientId'] = true;
        $this->invoiceRecipientId = $invoiceRecipientId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLatestCancellationWarningQuantity(): int
    {
        return $this->latestCancellationWarningQuantity;
    }
    /**
     * 
     *
     * @param int $latestCancellationWarningQuantity
     *
     * @return self
     */
    public function setLatestCancellationWarningQuantity(int $latestCancellationWarningQuantity): self
    {
        $this->initialized['latestCancellationWarningQuantity'] = true;
        $this->latestCancellationWarningQuantity = $latestCancellationWarningQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLatestCancellationWarningUnit(): string
    {
        return $this->latestCancellationWarningUnit;
    }
    /**
     * 
     *
     * @param string $latestCancellationWarningUnit
     *
     * @return self
     */
    public function setLatestCancellationWarningUnit(string $latestCancellationWarningUnit): self
    {
        $this->initialized['latestCancellationWarningUnit'] = true;
        $this->latestCancellationWarningUnit = $latestCancellationWarningUnit;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLatestPossibleTerminationDate(): int
    {
        return $this->latestPossibleTerminationDate;
    }
    /**
     * 
     *
     * @param int $latestPossibleTerminationDate
     *
     * @return self
     */
    public function setLatestPossibleTerminationDate(int $latestPossibleTerminationDate): self
    {
        $this->initialized['latestPossibleTerminationDate'] = true;
        $this->latestPossibleTerminationDate = $latestPossibleTerminationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNextContractBillingDate(): int
    {
        return $this->nextContractBillingDate;
    }
    /**
     * 
     *
     * @param int $nextContractBillingDate
     *
     * @return self
     */
    public function setNextContractBillingDate(int $nextContractBillingDate): self
    {
        $this->initialized['nextContractBillingDate'] = true;
        $this->nextContractBillingDate = $nextContractBillingDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNonStandardInputTaxId(): string
    {
        return $this->nonStandardInputTaxId;
    }
    /**
     * 
     *
     * @param string $nonStandardInputTaxId
     *
     * @return self
     */
    public function setNonStandardInputTaxId(string $nonStandardInputTaxId): self
    {
        $this->initialized['nonStandardInputTaxId'] = true;
        $this->nonStandardInputTaxId = $nonStandardInputTaxId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrderNumberAtCustomer(): string
    {
        return $this->orderNumberAtCustomer;
    }
    /**
     * 
     *
     * @param string $orderNumberAtCustomer
     *
     * @return self
     */
    public function setOrderNumberAtCustomer(string $orderNumberAtCustomer): self
    {
        $this->initialized['orderNumberAtCustomer'] = true;
        $this->orderNumberAtCustomer = $orderNumberAtCustomer;
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
    public function getPaymentMethodId(): string
    {
        return $this->paymentMethodId;
    }
    /**
     * 
     *
     * @param string $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(string $paymentMethodId): self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPricingDate(): int
    {
        return $this->pricingDate;
    }
    /**
     * 
     *
     * @param int $pricingDate
     *
     * @return self
     */
    public function setPricingDate(int $pricingDate): self
    {
        $this->initialized['pricingDate'] = true;
        $this->pricingDate = $pricingDate;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses
     */
    public function getPurchaseEmailAddresses(): EmailAddresses
    {
        return $this->purchaseEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses $purchaseEmailAddresses
     *
     * @return self
     */
    public function setPurchaseEmailAddresses(EmailAddresses $purchaseEmailAddresses): self
    {
        $this->initialized['purchaseEmailAddresses'] = true;
        $this->purchaseEmailAddresses = $purchaseEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecordCurrencyId(): string
    {
        return $this->recordCurrencyId;
    }
    /**
     * 
     *
     * @param string $recordCurrencyId
     *
     * @return self
     */
    public function setRecordCurrencyId(string $recordCurrencyId): self
    {
        $this->initialized['recordCurrencyId'] = true;
        $this->recordCurrencyId = $recordCurrencyId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getRecordCurrencyName(): string
    {
        return $this->recordCurrencyName;
    }
    /**
     * 
     *
     * @param string $recordCurrencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setRecordCurrencyName(string $recordCurrencyName): self
    {
        $this->initialized['recordCurrencyName'] = true;
        $this->recordCurrencyName = $recordCurrencyName;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses
     */
    public function getRecordEmailAddresses(): EmailAddresses
    {
        return $this->recordEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses $recordEmailAddresses
     *
     * @return self
     */
    public function setRecordEmailAddresses(EmailAddresses $recordEmailAddresses): self
    {
        $this->initialized['recordEmailAddresses'] = true;
        $this->recordEmailAddresses = $recordEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReminderDate(): int
    {
        return $this->reminderDate;
    }
    /**
     * 
     *
     * @param int $reminderDate
     *
     * @return self
     */
    public function setReminderDate(int $reminderDate): self
    {
        $this->initialized['reminderDate'] = true;
        $this->reminderDate = $reminderDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReminderSendType(): string
    {
        return $this->reminderSendType;
    }
    /**
     * 
     *
     * @param string $reminderSendType
     *
     * @return self
     */
    public function setReminderSendType(string $reminderSendType): self
    {
        $this->initialized['reminderSendType'] = true;
        $this->reminderSendType = $reminderSendType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReminderType(): string
    {
        return $this->reminderType;
    }
    /**
     * 
     *
     * @param string $reminderType
     *
     * @return self
     */
    public function setReminderType(string $reminderType): self
    {
        $this->initialized['reminderType'] = true;
        $this->reminderType = $reminderType;
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
    public function getSalesChannel(): string
    {
        return $this->salesChannel;
    }
    /**
     * 
     *
     * @param string $salesChannel
     *
     * @return self
     */
    public function setSalesChannel(string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses
     */
    public function getSalesInvoiceEmailAddresses(): EmailAddresses
    {
        return $this->salesInvoiceEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses $salesInvoiceEmailAddresses
     *
     * @return self
     */
    public function setSalesInvoiceEmailAddresses(EmailAddresses $salesInvoiceEmailAddresses): self
    {
        $this->initialized['salesInvoiceEmailAddresses'] = true;
        $this->salesInvoiceEmailAddresses = $salesInvoiceEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses
     */
    public function getSalesOrderEmailAddresses(): EmailAddresses
    {
        return $this->salesOrderEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses $salesOrderEmailAddresses
     *
     * @return self
     */
    public function setSalesOrderEmailAddresses(EmailAddresses $salesOrderEmailAddresses): self
    {
        $this->initialized['salesOrderEmailAddresses'] = true;
        $this->salesOrderEmailAddresses = $salesOrderEmailAddresses;
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
     * @return bool
     */
    public function getTemplate(): bool
    {
        return $this->template;
    }
    /**
     * 
     *
     * @param bool $template
     *
     * @return self
     */
    public function setTemplate(bool $template): self
    {
        $this->initialized['template'] = true;
        $this->template = $template;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTermOfPaymentId(): string
    {
        return $this->termOfPaymentId;
    }
    /**
     * 
     *
     * @param string $termOfPaymentId
     *
     * @return self
     */
    public function setTermOfPaymentId(string $termOfPaymentId): self
    {
        $this->initialized['termOfPaymentId'] = true;
        $this->termOfPaymentId = $termOfPaymentId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTerminationReasonId(): string
    {
        return $this->terminationReasonId;
    }
    /**
     * 
     *
     * @param string $terminationReasonId
     *
     * @return self
     */
    public function setTerminationReasonId(string $terminationReasonId): self
    {
        $this->initialized['terminationReasonId'] = true;
        $this->terminationReasonId = $terminationReasonId;
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
     * @return list<OnlyId>
     */
    public function getTypes(): array
    {
        return $this->types;
    }
    /**
     * 
     *
     * @param list<OnlyId> $types
     *
     * @return self
     */
    public function setTypes(array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUnlimited(): bool
    {
        return $this->unlimited;
    }
    /**
     * 
     *
     * @param bool $unlimited
     *
     * @return self
     */
    public function setUnlimited(bool $unlimited): self
    {
        $this->initialized['unlimited'] = true;
        $this->unlimited = $unlimited;
        return $this;
    }
}