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
    protected $commercialLanguage;
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
    protected $description;
    /**
     * 
     *
     * @deprecated
     *
     * @var bool|null
     */
    protected $disableEmailTemplate;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordComment;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordFreeText;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordOpening;
    /**
     * 
     *
     * @var bool|null
     */
    protected $sentToRecipient;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $tags;
    /**
     * 
     *
     * @var list<ContractAdditionalAddress>|null
     */
    protected $additionalAddresses;
    /**
     * 
     *
     * @var string|null
     */
    protected $authorizationUnitId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $automaticExtension;
    /**
     * 
     *
     * @var string|null
     */
    protected $billUntil;
    /**
     * 
     *
     * @var int|null
     */
    protected $billingDay;
    /**
     * 
     *
     * @var string|null
     */
    protected $billingTargetInvoiceStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $billingType;
    /**
     * 
     *
     * @var int|null
     */
    protected $cancellationDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $cancellationPeriodQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $cancellationPeriodSoftframe;
    /**
     * 
     *
     * @var string|null
     */
    protected $cancellationPeriodUnit;
    /**
     * 
     *
     * @var string|null
     */
    protected $commission;
    /**
     * 
     *
     * @var list<CommissionSalesPartner>|null
     */
    protected $commissionSalesPartners;
    /**
     * 
     *
     * @var list<ContractCostItem>|null
     */
    protected $contractCostItems;
    /**
     * 
     *
     * @var int|null
     */
    protected $contractDate;
    /**
     * 
     *
     * @var list<ContractItem>|null
     */
    protected $contractItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $contractNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $contractNumberAtParty;
    /**
     * 
     *
     * @var string|null
     */
    protected $contractStatus;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $correspondenceAddress;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var EmailAddresses|null
     */
    protected $deliveryEmailAddresses;
    /**
     * 
     *
     * @var bool|null
     */
    protected $differingCorrespondenceAddress;
    /**
     * 
     *
     * @var bool|null
     */
    protected $differingDeliveryAddress;
    /**
     * 
     *
     * @var bool|null
     */
    protected $differingInvoiceAddress;
    /**
     * 
     *
     * @var int|null
     */
    protected $endDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $extensionQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $extensionUnit;
    /**
     * 
     *
     * @var bool|null
     */
    protected $factoring;
    /**
     * 
     *
     * @var RecordAddress|null
     */
    protected $invoiceAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoiceRecipientId;
    /**
     * 
     *
     * @var int|null
     */
    protected $latestCancellationWarningQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $latestCancellationWarningUnit;
    /**
     * 
     *
     * @var int|null
     */
    protected $latestPossibleTerminationDate;
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
    protected $nextContractBillingDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $nonStandardInputTaxId;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderNumberAtCustomer;
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
    protected $paymentMethodId;
    /**
     * 
     *
     * @var int|null
     */
    protected $pricingDate;
    /**
     * 
     *
     * @var EmailAddresses|null
     */
    protected $purchaseEmailAddresses;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordCurrencyId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $recordCurrencyName;
    /**
     * 
     *
     * @var EmailAddresses|null
     */
    protected $recordEmailAddresses;
    /**
     * 
     *
     * @var int|null
     */
    protected $reminderDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $reminderSendType;
    /**
     * 
     *
     * @var string|null
     */
    protected $reminderType;
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
    protected $salesChannel;
    /**
     * 
     *
     * @var EmailAddresses|null
     */
    protected $salesInvoiceEmailAddresses;
    /**
     * 
     *
     * @var EmailAddresses|null
     */
    protected $salesOrderEmailAddresses;
    /**
     * 
     *
     * @var int|null
     */
    protected $startDate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $template;
    /**
     * 
     *
     * @var string|null
     */
    protected $termOfPaymentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $terminationReasonId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketServiceLevelAgreementId;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $types;
    /**
     * 
     *
     * @var bool|null
     */
    protected $unlimited;
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
     * @deprecated
     *
     * @return bool|null
     */
    public function getDisableEmailTemplate(): ?bool
    {
        return $this->disableEmailTemplate;
    }
    /**
     * 
     *
     * @param bool|null $disableEmailTemplate
     *
     * @deprecated
     *
     * @return self
     */
    public function setDisableEmailTemplate(?bool $disableEmailTemplate): self
    {
        $this->initialized['disableEmailTemplate'] = true;
        $this->disableEmailTemplate = $disableEmailTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordComment(): ?string
    {
        return $this->recordComment;
    }
    /**
     * 
     *
     * @param string|null $recordComment
     *
     * @return self
     */
    public function setRecordComment(?string $recordComment): self
    {
        $this->initialized['recordComment'] = true;
        $this->recordComment = $recordComment;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordFreeText(): ?string
    {
        return $this->recordFreeText;
    }
    /**
     * 
     *
     * @param string|null $recordFreeText
     *
     * @return self
     */
    public function setRecordFreeText(?string $recordFreeText): self
    {
        $this->initialized['recordFreeText'] = true;
        $this->recordFreeText = $recordFreeText;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordOpening(): ?string
    {
        return $this->recordOpening;
    }
    /**
     * 
     *
     * @param string|null $recordOpening
     *
     * @return self
     */
    public function setRecordOpening(?string $recordOpening): self
    {
        $this->initialized['recordOpening'] = true;
        $this->recordOpening = $recordOpening;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSentToRecipient(): ?bool
    {
        return $this->sentToRecipient;
    }
    /**
     * 
     *
     * @param bool|null $sentToRecipient
     *
     * @return self
     */
    public function setSentToRecipient(?bool $sentToRecipient): self
    {
        $this->initialized['sentToRecipient'] = true;
        $this->sentToRecipient = $sentToRecipient;
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
     * @return list<ContractAdditionalAddress>|null
     */
    public function getAdditionalAddresses(): ?array
    {
        return $this->additionalAddresses;
    }
    /**
     * 
     *
     * @param list<ContractAdditionalAddress>|null $additionalAddresses
     *
     * @return self
     */
    public function setAdditionalAddresses(?array $additionalAddresses): self
    {
        $this->initialized['additionalAddresses'] = true;
        $this->additionalAddresses = $additionalAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthorizationUnitId(): ?string
    {
        return $this->authorizationUnitId;
    }
    /**
     * 
     *
     * @param string|null $authorizationUnitId
     *
     * @return self
     */
    public function setAuthorizationUnitId(?string $authorizationUnitId): self
    {
        $this->initialized['authorizationUnitId'] = true;
        $this->authorizationUnitId = $authorizationUnitId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAutomaticExtension(): ?bool
    {
        return $this->automaticExtension;
    }
    /**
     * 
     *
     * @param bool|null $automaticExtension
     *
     * @return self
     */
    public function setAutomaticExtension(?bool $automaticExtension): self
    {
        $this->initialized['automaticExtension'] = true;
        $this->automaticExtension = $automaticExtension;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBillUntil(): ?string
    {
        return $this->billUntil;
    }
    /**
     * 
     *
     * @param string|null $billUntil
     *
     * @return self
     */
    public function setBillUntil(?string $billUntil): self
    {
        $this->initialized['billUntil'] = true;
        $this->billUntil = $billUntil;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBillingDay(): ?int
    {
        return $this->billingDay;
    }
    /**
     * 
     *
     * @param int|null $billingDay
     *
     * @return self
     */
    public function setBillingDay(?int $billingDay): self
    {
        $this->initialized['billingDay'] = true;
        $this->billingDay = $billingDay;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBillingTargetInvoiceStatus(): ?string
    {
        return $this->billingTargetInvoiceStatus;
    }
    /**
     * 
     *
     * @param string|null $billingTargetInvoiceStatus
     *
     * @return self
     */
    public function setBillingTargetInvoiceStatus(?string $billingTargetInvoiceStatus): self
    {
        $this->initialized['billingTargetInvoiceStatus'] = true;
        $this->billingTargetInvoiceStatus = $billingTargetInvoiceStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBillingType(): ?string
    {
        return $this->billingType;
    }
    /**
     * 
     *
     * @param string|null $billingType
     *
     * @return self
     */
    public function setBillingType(?string $billingType): self
    {
        $this->initialized['billingType'] = true;
        $this->billingType = $billingType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCancellationDate(): ?int
    {
        return $this->cancellationDate;
    }
    /**
     * 
     *
     * @param int|null $cancellationDate
     *
     * @return self
     */
    public function setCancellationDate(?int $cancellationDate): self
    {
        $this->initialized['cancellationDate'] = true;
        $this->cancellationDate = $cancellationDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCancellationPeriodQuantity(): ?int
    {
        return $this->cancellationPeriodQuantity;
    }
    /**
     * 
     *
     * @param int|null $cancellationPeriodQuantity
     *
     * @return self
     */
    public function setCancellationPeriodQuantity(?int $cancellationPeriodQuantity): self
    {
        $this->initialized['cancellationPeriodQuantity'] = true;
        $this->cancellationPeriodQuantity = $cancellationPeriodQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCancellationPeriodSoftframe(): ?string
    {
        return $this->cancellationPeriodSoftframe;
    }
    /**
     * 
     *
     * @param string|null $cancellationPeriodSoftframe
     *
     * @return self
     */
    public function setCancellationPeriodSoftframe(?string $cancellationPeriodSoftframe): self
    {
        $this->initialized['cancellationPeriodSoftframe'] = true;
        $this->cancellationPeriodSoftframe = $cancellationPeriodSoftframe;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCancellationPeriodUnit(): ?string
    {
        return $this->cancellationPeriodUnit;
    }
    /**
     * 
     *
     * @param string|null $cancellationPeriodUnit
     *
     * @return self
     */
    public function setCancellationPeriodUnit(?string $cancellationPeriodUnit): self
    {
        $this->initialized['cancellationPeriodUnit'] = true;
        $this->cancellationPeriodUnit = $cancellationPeriodUnit;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommission(): ?string
    {
        return $this->commission;
    }
    /**
     * 
     *
     * @param string|null $commission
     *
     * @return self
     */
    public function setCommission(?string $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;
        return $this;
    }
    /**
     * 
     *
     * @return list<CommissionSalesPartner>|null
     */
    public function getCommissionSalesPartners(): ?array
    {
        return $this->commissionSalesPartners;
    }
    /**
     * 
     *
     * @param list<CommissionSalesPartner>|null $commissionSalesPartners
     *
     * @return self
     */
    public function setCommissionSalesPartners(?array $commissionSalesPartners): self
    {
        $this->initialized['commissionSalesPartners'] = true;
        $this->commissionSalesPartners = $commissionSalesPartners;
        return $this;
    }
    /**
     * 
     *
     * @return list<ContractCostItem>|null
     */
    public function getContractCostItems(): ?array
    {
        return $this->contractCostItems;
    }
    /**
     * 
     *
     * @param list<ContractCostItem>|null $contractCostItems
     *
     * @return self
     */
    public function setContractCostItems(?array $contractCostItems): self
    {
        $this->initialized['contractCostItems'] = true;
        $this->contractCostItems = $contractCostItems;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getContractDate(): ?int
    {
        return $this->contractDate;
    }
    /**
     * 
     *
     * @param int|null $contractDate
     *
     * @return self
     */
    public function setContractDate(?int $contractDate): self
    {
        $this->initialized['contractDate'] = true;
        $this->contractDate = $contractDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<ContractItem>|null
     */
    public function getContractItems(): ?array
    {
        return $this->contractItems;
    }
    /**
     * 
     *
     * @param list<ContractItem>|null $contractItems
     *
     * @return self
     */
    public function setContractItems(?array $contractItems): self
    {
        $this->initialized['contractItems'] = true;
        $this->contractItems = $contractItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }
    /**
     * 
     *
     * @param string|null $contractNumber
     *
     * @return self
     */
    public function setContractNumber(?string $contractNumber): self
    {
        $this->initialized['contractNumber'] = true;
        $this->contractNumber = $contractNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContractNumberAtParty(): ?string
    {
        return $this->contractNumberAtParty;
    }
    /**
     * 
     *
     * @param string|null $contractNumberAtParty
     *
     * @return self
     */
    public function setContractNumberAtParty(?string $contractNumberAtParty): self
    {
        $this->initialized['contractNumberAtParty'] = true;
        $this->contractNumberAtParty = $contractNumberAtParty;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContractStatus(): ?string
    {
        return $this->contractStatus;
    }
    /**
     * 
     *
     * @param string|null $contractStatus
     *
     * @return self
     */
    public function setContractStatus(?string $contractStatus): self
    {
        $this->initialized['contractStatus'] = true;
        $this->contractStatus = $contractStatus;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress|null
     */
    public function getCorrespondenceAddress(): ?RecordAddress
    {
        return $this->correspondenceAddress;
    }
    /**
     * 
     *
     * @param RecordAddress|null $correspondenceAddress
     *
     * @return self
     */
    public function setCorrespondenceAddress(?RecordAddress $correspondenceAddress): self
    {
        $this->initialized['correspondenceAddress'] = true;
        $this->correspondenceAddress = $correspondenceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress|null
     */
    public function getDeliveryAddress(): ?RecordAddress
    {
        return $this->deliveryAddress;
    }
    /**
     * 
     *
     * @param RecordAddress|null $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(?RecordAddress $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses|null
     */
    public function getDeliveryEmailAddresses(): ?EmailAddresses
    {
        return $this->deliveryEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses|null $deliveryEmailAddresses
     *
     * @return self
     */
    public function setDeliveryEmailAddresses(?EmailAddresses $deliveryEmailAddresses): self
    {
        $this->initialized['deliveryEmailAddresses'] = true;
        $this->deliveryEmailAddresses = $deliveryEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDifferingCorrespondenceAddress(): ?bool
    {
        return $this->differingCorrespondenceAddress;
    }
    /**
     * 
     *
     * @param bool|null $differingCorrespondenceAddress
     *
     * @return self
     */
    public function setDifferingCorrespondenceAddress(?bool $differingCorrespondenceAddress): self
    {
        $this->initialized['differingCorrespondenceAddress'] = true;
        $this->differingCorrespondenceAddress = $differingCorrespondenceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDifferingDeliveryAddress(): ?bool
    {
        return $this->differingDeliveryAddress;
    }
    /**
     * 
     *
     * @param bool|null $differingDeliveryAddress
     *
     * @return self
     */
    public function setDifferingDeliveryAddress(?bool $differingDeliveryAddress): self
    {
        $this->initialized['differingDeliveryAddress'] = true;
        $this->differingDeliveryAddress = $differingDeliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDifferingInvoiceAddress(): ?bool
    {
        return $this->differingInvoiceAddress;
    }
    /**
     * 
     *
     * @param bool|null $differingInvoiceAddress
     *
     * @return self
     */
    public function setDifferingInvoiceAddress(?bool $differingInvoiceAddress): self
    {
        $this->initialized['differingInvoiceAddress'] = true;
        $this->differingInvoiceAddress = $differingInvoiceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEndDate(): ?int
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param int|null $endDate
     *
     * @return self
     */
    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExtensionQuantity(): ?int
    {
        return $this->extensionQuantity;
    }
    /**
     * 
     *
     * @param int|null $extensionQuantity
     *
     * @return self
     */
    public function setExtensionQuantity(?int $extensionQuantity): self
    {
        $this->initialized['extensionQuantity'] = true;
        $this->extensionQuantity = $extensionQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExtensionUnit(): ?string
    {
        return $this->extensionUnit;
    }
    /**
     * 
     *
     * @param string|null $extensionUnit
     *
     * @return self
     */
    public function setExtensionUnit(?string $extensionUnit): self
    {
        $this->initialized['extensionUnit'] = true;
        $this->extensionUnit = $extensionUnit;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFactoring(): ?bool
    {
        return $this->factoring;
    }
    /**
     * 
     *
     * @param bool|null $factoring
     *
     * @return self
     */
    public function setFactoring(?bool $factoring): self
    {
        $this->initialized['factoring'] = true;
        $this->factoring = $factoring;
        return $this;
    }
    /**
     * 
     *
     * @return RecordAddress|null
     */
    public function getInvoiceAddress(): ?RecordAddress
    {
        return $this->invoiceAddress;
    }
    /**
     * 
     *
     * @param RecordAddress|null $invoiceAddress
     *
     * @return self
     */
    public function setInvoiceAddress(?RecordAddress $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoiceRecipientId(): ?string
    {
        return $this->invoiceRecipientId;
    }
    /**
     * 
     *
     * @param string|null $invoiceRecipientId
     *
     * @return self
     */
    public function setInvoiceRecipientId(?string $invoiceRecipientId): self
    {
        $this->initialized['invoiceRecipientId'] = true;
        $this->invoiceRecipientId = $invoiceRecipientId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLatestCancellationWarningQuantity(): ?int
    {
        return $this->latestCancellationWarningQuantity;
    }
    /**
     * 
     *
     * @param int|null $latestCancellationWarningQuantity
     *
     * @return self
     */
    public function setLatestCancellationWarningQuantity(?int $latestCancellationWarningQuantity): self
    {
        $this->initialized['latestCancellationWarningQuantity'] = true;
        $this->latestCancellationWarningQuantity = $latestCancellationWarningQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLatestCancellationWarningUnit(): ?string
    {
        return $this->latestCancellationWarningUnit;
    }
    /**
     * 
     *
     * @param string|null $latestCancellationWarningUnit
     *
     * @return self
     */
    public function setLatestCancellationWarningUnit(?string $latestCancellationWarningUnit): self
    {
        $this->initialized['latestCancellationWarningUnit'] = true;
        $this->latestCancellationWarningUnit = $latestCancellationWarningUnit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLatestPossibleTerminationDate(): ?int
    {
        return $this->latestPossibleTerminationDate;
    }
    /**
     * 
     *
     * @param int|null $latestPossibleTerminationDate
     *
     * @return self
     */
    public function setLatestPossibleTerminationDate(?int $latestPossibleTerminationDate): self
    {
        $this->initialized['latestPossibleTerminationDate'] = true;
        $this->latestPossibleTerminationDate = $latestPossibleTerminationDate;
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
    public function getNextContractBillingDate(): ?int
    {
        return $this->nextContractBillingDate;
    }
    /**
     * 
     *
     * @param int|null $nextContractBillingDate
     *
     * @return self
     */
    public function setNextContractBillingDate(?int $nextContractBillingDate): self
    {
        $this->initialized['nextContractBillingDate'] = true;
        $this->nextContractBillingDate = $nextContractBillingDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNonStandardInputTaxId(): ?string
    {
        return $this->nonStandardInputTaxId;
    }
    /**
     * 
     *
     * @param string|null $nonStandardInputTaxId
     *
     * @return self
     */
    public function setNonStandardInputTaxId(?string $nonStandardInputTaxId): self
    {
        $this->initialized['nonStandardInputTaxId'] = true;
        $this->nonStandardInputTaxId = $nonStandardInputTaxId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderNumberAtCustomer(): ?string
    {
        return $this->orderNumberAtCustomer;
    }
    /**
     * 
     *
     * @param string|null $orderNumberAtCustomer
     *
     * @return self
     */
    public function setOrderNumberAtCustomer(?string $orderNumberAtCustomer): self
    {
        $this->initialized['orderNumberAtCustomer'] = true;
        $this->orderNumberAtCustomer = $orderNumberAtCustomer;
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
    public function getPaymentMethodId(): ?string
    {
        return $this->paymentMethodId;
    }
    /**
     * 
     *
     * @param string|null $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(?string $paymentMethodId): self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPricingDate(): ?int
    {
        return $this->pricingDate;
    }
    /**
     * 
     *
     * @param int|null $pricingDate
     *
     * @return self
     */
    public function setPricingDate(?int $pricingDate): self
    {
        $this->initialized['pricingDate'] = true;
        $this->pricingDate = $pricingDate;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses|null
     */
    public function getPurchaseEmailAddresses(): ?EmailAddresses
    {
        return $this->purchaseEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses|null $purchaseEmailAddresses
     *
     * @return self
     */
    public function setPurchaseEmailAddresses(?EmailAddresses $purchaseEmailAddresses): self
    {
        $this->initialized['purchaseEmailAddresses'] = true;
        $this->purchaseEmailAddresses = $purchaseEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordCurrencyId(): ?string
    {
        return $this->recordCurrencyId;
    }
    /**
     * 
     *
     * @param string|null $recordCurrencyId
     *
     * @return self
     */
    public function setRecordCurrencyId(?string $recordCurrencyId): self
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
     * @return string|null
     */
    public function getRecordCurrencyName(): ?string
    {
        return $this->recordCurrencyName;
    }
    /**
     * 
     *
     * @param string|null $recordCurrencyName
     *
     * @deprecated
     *
     * @return self
     */
    public function setRecordCurrencyName(?string $recordCurrencyName): self
    {
        $this->initialized['recordCurrencyName'] = true;
        $this->recordCurrencyName = $recordCurrencyName;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses|null
     */
    public function getRecordEmailAddresses(): ?EmailAddresses
    {
        return $this->recordEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses|null $recordEmailAddresses
     *
     * @return self
     */
    public function setRecordEmailAddresses(?EmailAddresses $recordEmailAddresses): self
    {
        $this->initialized['recordEmailAddresses'] = true;
        $this->recordEmailAddresses = $recordEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReminderDate(): ?int
    {
        return $this->reminderDate;
    }
    /**
     * 
     *
     * @param int|null $reminderDate
     *
     * @return self
     */
    public function setReminderDate(?int $reminderDate): self
    {
        $this->initialized['reminderDate'] = true;
        $this->reminderDate = $reminderDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReminderSendType(): ?string
    {
        return $this->reminderSendType;
    }
    /**
     * 
     *
     * @param string|null $reminderSendType
     *
     * @return self
     */
    public function setReminderSendType(?string $reminderSendType): self
    {
        $this->initialized['reminderSendType'] = true;
        $this->reminderSendType = $reminderSendType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReminderType(): ?string
    {
        return $this->reminderType;
    }
    /**
     * 
     *
     * @param string|null $reminderType
     *
     * @return self
     */
    public function setReminderType(?string $reminderType): self
    {
        $this->initialized['reminderType'] = true;
        $this->reminderType = $reminderType;
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
     * @return EmailAddresses|null
     */
    public function getSalesInvoiceEmailAddresses(): ?EmailAddresses
    {
        return $this->salesInvoiceEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses|null $salesInvoiceEmailAddresses
     *
     * @return self
     */
    public function setSalesInvoiceEmailAddresses(?EmailAddresses $salesInvoiceEmailAddresses): self
    {
        $this->initialized['salesInvoiceEmailAddresses'] = true;
        $this->salesInvoiceEmailAddresses = $salesInvoiceEmailAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return EmailAddresses|null
     */
    public function getSalesOrderEmailAddresses(): ?EmailAddresses
    {
        return $this->salesOrderEmailAddresses;
    }
    /**
     * 
     *
     * @param EmailAddresses|null $salesOrderEmailAddresses
     *
     * @return self
     */
    public function setSalesOrderEmailAddresses(?EmailAddresses $salesOrderEmailAddresses): self
    {
        $this->initialized['salesOrderEmailAddresses'] = true;
        $this->salesOrderEmailAddresses = $salesOrderEmailAddresses;
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
     * @return bool|null
     */
    public function getTemplate(): ?bool
    {
        return $this->template;
    }
    /**
     * 
     *
     * @param bool|null $template
     *
     * @return self
     */
    public function setTemplate(?bool $template): self
    {
        $this->initialized['template'] = true;
        $this->template = $template;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTermOfPaymentId(): ?string
    {
        return $this->termOfPaymentId;
    }
    /**
     * 
     *
     * @param string|null $termOfPaymentId
     *
     * @return self
     */
    public function setTermOfPaymentId(?string $termOfPaymentId): self
    {
        $this->initialized['termOfPaymentId'] = true;
        $this->termOfPaymentId = $termOfPaymentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTerminationReasonId(): ?string
    {
        return $this->terminationReasonId;
    }
    /**
     * 
     *
     * @param string|null $terminationReasonId
     *
     * @return self
     */
    public function setTerminationReasonId(?string $terminationReasonId): self
    {
        $this->initialized['terminationReasonId'] = true;
        $this->terminationReasonId = $terminationReasonId;
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
     * @return list<OnlyId>|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $types
     *
     * @return self
     */
    public function setTypes(?array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUnlimited(): ?bool
    {
        return $this->unlimited;
    }
    /**
     * 
     *
     * @param bool|null $unlimited
     *
     * @return self
     */
    public function setUnlimited(?bool $unlimited): self
    {
        $this->initialized['unlimited'] = true;
        $this->unlimited = $unlimited;
        return $this;
    }
}