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
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var list<mixed>|null
     */
    protected $customAttributes;

    /**
     * @var string|null
     */
    protected $commercialLanguage;

    /**
     * @var string|null
     */
    protected $creatorId;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @deprecated
     *
     * @var bool|null
     */
    protected $disableEmailTemplate;

    /**
     * @var string|null
     */
    protected $recordComment;

    /**
     * @var string|null
     */
    protected $recordFreeText;

    /**
     * @var string|null
     */
    protected $recordOpening;

    /**
     * @var bool|null
     */
    protected $sentToRecipient;

    /**
     * @var list<string>|null
     */
    protected $tags;

    /**
     * @var list<ContractAdditionalAddress>|null
     */
    protected $additionalAddresses;

    /**
     * @var string|null
     */
    protected $authorizationUnitId;

    /**
     * @var bool|null
     */
    protected $automaticExtension;

    /**
     * @var string|null
     */
    protected $billUntil;

    /**
     * @var int|null
     */
    protected $billingDay;

    /**
     * @var string|null
     */
    protected $billingTargetInvoiceStatus;

    /**
     * @var string|null
     */
    protected $billingType;

    /**
     * @var int|null
     */
    protected $cancellationDate;

    /**
     * @var int|null
     */
    protected $cancellationPeriodQuantity;

    /**
     * @var string|null
     */
    protected $cancellationPeriodSoftframe;

    /**
     * @var string|null
     */
    protected $cancellationPeriodUnit;

    /**
     * @var string|null
     */
    protected $commission;

    /**
     * @var list<CommissionSalesPartner>|null
     */
    protected $commissionSalesPartners;

    /**
     * @var list<ContractCostItem>|null
     */
    protected $contractCostItems;

    /**
     * @var int|null
     */
    protected $contractDate;

    /**
     * @var list<ContractItem>|null
     */
    protected $contractItems;

    /**
     * @var string|null
     */
    protected $contractNumber;

    /**
     * @var string|null
     */
    protected $contractNumberAtParty;

    /**
     * @var string|null
     */
    protected $contractStatus;

    /**
     * @var RecordAddress|null
     */
    protected $correspondenceAddress;

    /**
     * @var RecordAddress|null
     */
    protected $deliveryAddress;

    /**
     * @var EmailAddresses|null
     */
    protected $deliveryEmailAddresses;

    /**
     * @var bool|null
     */
    protected $differingCorrespondenceAddress;

    /**
     * @var bool|null
     */
    protected $differingDeliveryAddress;

    /**
     * @var bool|null
     */
    protected $differingInvoiceAddress;

    /**
     * @var int|null
     */
    protected $endDate;

    /**
     * @var int|null
     */
    protected $extensionQuantity;

    /**
     * @var string|null
     */
    protected $extensionUnit;

    /**
     * @var bool|null
     */
    protected $factoring;

    /**
     * @var RecordAddress|null
     */
    protected $invoiceAddress;

    /**
     * @var string|null
     */
    protected $invoiceRecipientId;

    /**
     * @var int|null
     */
    protected $latestCancellationWarningQuantity;

    /**
     * @var string|null
     */
    protected $latestCancellationWarningUnit;

    /**
     * @var int|null
     */
    protected $latestPossibleTerminationDate;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $nextContractBillingDate;

    /**
     * @var string|null
     */
    protected $nonStandardInputTaxId;

    /**
     * @var string|null
     */
    protected $orderNumberAtCustomer;

    /**
     * @var string|null
     */
    protected $partyId;

    /**
     * @var string|null
     */
    protected $paymentMethodId;

    /**
     * @var int|null
     */
    protected $pricingDate;

    /**
     * @var EmailAddresses|null
     */
    protected $purchaseEmailAddresses;

    /**
     * @var string|null
     */
    protected $recordCurrencyId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $recordCurrencyName;

    /**
     * @var EmailAddresses|null
     */
    protected $recordEmailAddresses;

    /**
     * @var int|null
     */
    protected $reminderDate;

    /**
     * @var string|null
     */
    protected $reminderSendType;

    /**
     * @var string|null
     */
    protected $reminderType;

    /**
     * @var string|null
     */
    protected $responsibleUserId;

    /**
     * @var string|null
     */
    protected $salesChannel;

    /**
     * @var EmailAddresses|null
     */
    protected $salesInvoiceEmailAddresses;

    /**
     * @var EmailAddresses|null
     */
    protected $salesOrderEmailAddresses;

    /**
     * @var int|null
     */
    protected $startDate;

    /**
     * @var bool|null
     */
    protected $template;

    /**
     * @var string|null
     */
    protected $termOfPaymentId;

    /**
     * @var string|null
     */
    protected $terminationReasonId;

    /**
     * @var string|null
     */
    protected $ticketServiceLevelAgreementId;

    /**
     * @var list<OnlyId>|null
     */
    protected $types;

    /**
     * @var bool|null
     */
    protected $unlimited;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    /**
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>|null  $customAttributes
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getCommercialLanguage(): ?string
    {
        return $this->commercialLanguage;
    }

    public function setCommercialLanguage(?string $commercialLanguage): self
    {
        $this->initialized['commercialLanguage'] = true;
        $this->commercialLanguage = $commercialLanguage;

        return $this;
    }

    public function getCreatorId(): ?string
    {
        return $this->creatorId;
    }

    public function setCreatorId(?string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getDisableEmailTemplate(): ?bool
    {
        return $this->disableEmailTemplate;
    }

    /**
     * @deprecated
     */
    public function setDisableEmailTemplate(?bool $disableEmailTemplate): self
    {
        $this->initialized['disableEmailTemplate'] = true;
        $this->disableEmailTemplate = $disableEmailTemplate;

        return $this;
    }

    public function getRecordComment(): ?string
    {
        return $this->recordComment;
    }

    public function setRecordComment(?string $recordComment): self
    {
        $this->initialized['recordComment'] = true;
        $this->recordComment = $recordComment;

        return $this;
    }

    public function getRecordFreeText(): ?string
    {
        return $this->recordFreeText;
    }

    public function setRecordFreeText(?string $recordFreeText): self
    {
        $this->initialized['recordFreeText'] = true;
        $this->recordFreeText = $recordFreeText;

        return $this;
    }

    public function getRecordOpening(): ?string
    {
        return $this->recordOpening;
    }

    public function setRecordOpening(?string $recordOpening): self
    {
        $this->initialized['recordOpening'] = true;
        $this->recordOpening = $recordOpening;

        return $this;
    }

    public function getSentToRecipient(): ?bool
    {
        return $this->sentToRecipient;
    }

    public function setSentToRecipient(?bool $sentToRecipient): self
    {
        $this->initialized['sentToRecipient'] = true;
        $this->sentToRecipient = $sentToRecipient;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param  list<string>|null  $tags
     */
    public function setTags(?array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return list<ContractAdditionalAddress>|null
     */
    public function getAdditionalAddresses(): ?array
    {
        return $this->additionalAddresses;
    }

    /**
     * @param  list<ContractAdditionalAddress>|null  $additionalAddresses
     */
    public function setAdditionalAddresses(?array $additionalAddresses): self
    {
        $this->initialized['additionalAddresses'] = true;
        $this->additionalAddresses = $additionalAddresses;

        return $this;
    }

    public function getAuthorizationUnitId(): ?string
    {
        return $this->authorizationUnitId;
    }

    public function setAuthorizationUnitId(?string $authorizationUnitId): self
    {
        $this->initialized['authorizationUnitId'] = true;
        $this->authorizationUnitId = $authorizationUnitId;

        return $this;
    }

    public function getAutomaticExtension(): ?bool
    {
        return $this->automaticExtension;
    }

    public function setAutomaticExtension(?bool $automaticExtension): self
    {
        $this->initialized['automaticExtension'] = true;
        $this->automaticExtension = $automaticExtension;

        return $this;
    }

    public function getBillUntil(): ?string
    {
        return $this->billUntil;
    }

    public function setBillUntil(?string $billUntil): self
    {
        $this->initialized['billUntil'] = true;
        $this->billUntil = $billUntil;

        return $this;
    }

    public function getBillingDay(): ?int
    {
        return $this->billingDay;
    }

    public function setBillingDay(?int $billingDay): self
    {
        $this->initialized['billingDay'] = true;
        $this->billingDay = $billingDay;

        return $this;
    }

    public function getBillingTargetInvoiceStatus(): ?string
    {
        return $this->billingTargetInvoiceStatus;
    }

    public function setBillingTargetInvoiceStatus(?string $billingTargetInvoiceStatus): self
    {
        $this->initialized['billingTargetInvoiceStatus'] = true;
        $this->billingTargetInvoiceStatus = $billingTargetInvoiceStatus;

        return $this;
    }

    public function getBillingType(): ?string
    {
        return $this->billingType;
    }

    public function setBillingType(?string $billingType): self
    {
        $this->initialized['billingType'] = true;
        $this->billingType = $billingType;

        return $this;
    }

    public function getCancellationDate(): ?int
    {
        return $this->cancellationDate;
    }

    public function setCancellationDate(?int $cancellationDate): self
    {
        $this->initialized['cancellationDate'] = true;
        $this->cancellationDate = $cancellationDate;

        return $this;
    }

    public function getCancellationPeriodQuantity(): ?int
    {
        return $this->cancellationPeriodQuantity;
    }

    public function setCancellationPeriodQuantity(?int $cancellationPeriodQuantity): self
    {
        $this->initialized['cancellationPeriodQuantity'] = true;
        $this->cancellationPeriodQuantity = $cancellationPeriodQuantity;

        return $this;
    }

    public function getCancellationPeriodSoftframe(): ?string
    {
        return $this->cancellationPeriodSoftframe;
    }

    public function setCancellationPeriodSoftframe(?string $cancellationPeriodSoftframe): self
    {
        $this->initialized['cancellationPeriodSoftframe'] = true;
        $this->cancellationPeriodSoftframe = $cancellationPeriodSoftframe;

        return $this;
    }

    public function getCancellationPeriodUnit(): ?string
    {
        return $this->cancellationPeriodUnit;
    }

    public function setCancellationPeriodUnit(?string $cancellationPeriodUnit): self
    {
        $this->initialized['cancellationPeriodUnit'] = true;
        $this->cancellationPeriodUnit = $cancellationPeriodUnit;

        return $this;
    }

    public function getCommission(): ?string
    {
        return $this->commission;
    }

    public function setCommission(?string $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;

        return $this;
    }

    /**
     * @return list<CommissionSalesPartner>|null
     */
    public function getCommissionSalesPartners(): ?array
    {
        return $this->commissionSalesPartners;
    }

    /**
     * @param  list<CommissionSalesPartner>|null  $commissionSalesPartners
     */
    public function setCommissionSalesPartners(?array $commissionSalesPartners): self
    {
        $this->initialized['commissionSalesPartners'] = true;
        $this->commissionSalesPartners = $commissionSalesPartners;

        return $this;
    }

    /**
     * @return list<ContractCostItem>|null
     */
    public function getContractCostItems(): ?array
    {
        return $this->contractCostItems;
    }

    /**
     * @param  list<ContractCostItem>|null  $contractCostItems
     */
    public function setContractCostItems(?array $contractCostItems): self
    {
        $this->initialized['contractCostItems'] = true;
        $this->contractCostItems = $contractCostItems;

        return $this;
    }

    public function getContractDate(): ?int
    {
        return $this->contractDate;
    }

    public function setContractDate(?int $contractDate): self
    {
        $this->initialized['contractDate'] = true;
        $this->contractDate = $contractDate;

        return $this;
    }

    /**
     * @return list<ContractItem>|null
     */
    public function getContractItems(): ?array
    {
        return $this->contractItems;
    }

    /**
     * @param  list<ContractItem>|null  $contractItems
     */
    public function setContractItems(?array $contractItems): self
    {
        $this->initialized['contractItems'] = true;
        $this->contractItems = $contractItems;

        return $this;
    }

    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }

    public function setContractNumber(?string $contractNumber): self
    {
        $this->initialized['contractNumber'] = true;
        $this->contractNumber = $contractNumber;

        return $this;
    }

    public function getContractNumberAtParty(): ?string
    {
        return $this->contractNumberAtParty;
    }

    public function setContractNumberAtParty(?string $contractNumberAtParty): self
    {
        $this->initialized['contractNumberAtParty'] = true;
        $this->contractNumberAtParty = $contractNumberAtParty;

        return $this;
    }

    public function getContractStatus(): ?string
    {
        return $this->contractStatus;
    }

    public function setContractStatus(?string $contractStatus): self
    {
        $this->initialized['contractStatus'] = true;
        $this->contractStatus = $contractStatus;

        return $this;
    }

    public function getCorrespondenceAddress(): ?RecordAddress
    {
        return $this->correspondenceAddress;
    }

    public function setCorrespondenceAddress(?RecordAddress $correspondenceAddress): self
    {
        $this->initialized['correspondenceAddress'] = true;
        $this->correspondenceAddress = $correspondenceAddress;

        return $this;
    }

    public function getDeliveryAddress(): ?RecordAddress
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?RecordAddress $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getDeliveryEmailAddresses(): ?EmailAddresses
    {
        return $this->deliveryEmailAddresses;
    }

    public function setDeliveryEmailAddresses(?EmailAddresses $deliveryEmailAddresses): self
    {
        $this->initialized['deliveryEmailAddresses'] = true;
        $this->deliveryEmailAddresses = $deliveryEmailAddresses;

        return $this;
    }

    public function getDifferingCorrespondenceAddress(): ?bool
    {
        return $this->differingCorrespondenceAddress;
    }

    public function setDifferingCorrespondenceAddress(?bool $differingCorrespondenceAddress): self
    {
        $this->initialized['differingCorrespondenceAddress'] = true;
        $this->differingCorrespondenceAddress = $differingCorrespondenceAddress;

        return $this;
    }

    public function getDifferingDeliveryAddress(): ?bool
    {
        return $this->differingDeliveryAddress;
    }

    public function setDifferingDeliveryAddress(?bool $differingDeliveryAddress): self
    {
        $this->initialized['differingDeliveryAddress'] = true;
        $this->differingDeliveryAddress = $differingDeliveryAddress;

        return $this;
    }

    public function getDifferingInvoiceAddress(): ?bool
    {
        return $this->differingInvoiceAddress;
    }

    public function setDifferingInvoiceAddress(?bool $differingInvoiceAddress): self
    {
        $this->initialized['differingInvoiceAddress'] = true;
        $this->differingInvoiceAddress = $differingInvoiceAddress;

        return $this;
    }

    public function getEndDate(): ?int
    {
        return $this->endDate;
    }

    public function setEndDate(?int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    public function getExtensionQuantity(): ?int
    {
        return $this->extensionQuantity;
    }

    public function setExtensionQuantity(?int $extensionQuantity): self
    {
        $this->initialized['extensionQuantity'] = true;
        $this->extensionQuantity = $extensionQuantity;

        return $this;
    }

    public function getExtensionUnit(): ?string
    {
        return $this->extensionUnit;
    }

    public function setExtensionUnit(?string $extensionUnit): self
    {
        $this->initialized['extensionUnit'] = true;
        $this->extensionUnit = $extensionUnit;

        return $this;
    }

    public function getFactoring(): ?bool
    {
        return $this->factoring;
    }

    public function setFactoring(?bool $factoring): self
    {
        $this->initialized['factoring'] = true;
        $this->factoring = $factoring;

        return $this;
    }

    public function getInvoiceAddress(): ?RecordAddress
    {
        return $this->invoiceAddress;
    }

    public function setInvoiceAddress(?RecordAddress $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;

        return $this;
    }

    public function getInvoiceRecipientId(): ?string
    {
        return $this->invoiceRecipientId;
    }

    public function setInvoiceRecipientId(?string $invoiceRecipientId): self
    {
        $this->initialized['invoiceRecipientId'] = true;
        $this->invoiceRecipientId = $invoiceRecipientId;

        return $this;
    }

    public function getLatestCancellationWarningQuantity(): ?int
    {
        return $this->latestCancellationWarningQuantity;
    }

    public function setLatestCancellationWarningQuantity(?int $latestCancellationWarningQuantity): self
    {
        $this->initialized['latestCancellationWarningQuantity'] = true;
        $this->latestCancellationWarningQuantity = $latestCancellationWarningQuantity;

        return $this;
    }

    public function getLatestCancellationWarningUnit(): ?string
    {
        return $this->latestCancellationWarningUnit;
    }

    public function setLatestCancellationWarningUnit(?string $latestCancellationWarningUnit): self
    {
        $this->initialized['latestCancellationWarningUnit'] = true;
        $this->latestCancellationWarningUnit = $latestCancellationWarningUnit;

        return $this;
    }

    public function getLatestPossibleTerminationDate(): ?int
    {
        return $this->latestPossibleTerminationDate;
    }

    public function setLatestPossibleTerminationDate(?int $latestPossibleTerminationDate): self
    {
        $this->initialized['latestPossibleTerminationDate'] = true;
        $this->latestPossibleTerminationDate = $latestPossibleTerminationDate;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getNextContractBillingDate(): ?int
    {
        return $this->nextContractBillingDate;
    }

    public function setNextContractBillingDate(?int $nextContractBillingDate): self
    {
        $this->initialized['nextContractBillingDate'] = true;
        $this->nextContractBillingDate = $nextContractBillingDate;

        return $this;
    }

    public function getNonStandardInputTaxId(): ?string
    {
        return $this->nonStandardInputTaxId;
    }

    public function setNonStandardInputTaxId(?string $nonStandardInputTaxId): self
    {
        $this->initialized['nonStandardInputTaxId'] = true;
        $this->nonStandardInputTaxId = $nonStandardInputTaxId;

        return $this;
    }

    public function getOrderNumberAtCustomer(): ?string
    {
        return $this->orderNumberAtCustomer;
    }

    public function setOrderNumberAtCustomer(?string $orderNumberAtCustomer): self
    {
        $this->initialized['orderNumberAtCustomer'] = true;
        $this->orderNumberAtCustomer = $orderNumberAtCustomer;

        return $this;
    }

    public function getPartyId(): ?string
    {
        return $this->partyId;
    }

    public function setPartyId(?string $partyId): self
    {
        $this->initialized['partyId'] = true;
        $this->partyId = $partyId;

        return $this;
    }

    public function getPaymentMethodId(): ?string
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId(?string $paymentMethodId): self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }

    public function getPricingDate(): ?int
    {
        return $this->pricingDate;
    }

    public function setPricingDate(?int $pricingDate): self
    {
        $this->initialized['pricingDate'] = true;
        $this->pricingDate = $pricingDate;

        return $this;
    }

    public function getPurchaseEmailAddresses(): ?EmailAddresses
    {
        return $this->purchaseEmailAddresses;
    }

    public function setPurchaseEmailAddresses(?EmailAddresses $purchaseEmailAddresses): self
    {
        $this->initialized['purchaseEmailAddresses'] = true;
        $this->purchaseEmailAddresses = $purchaseEmailAddresses;

        return $this;
    }

    public function getRecordCurrencyId(): ?string
    {
        return $this->recordCurrencyId;
    }

    public function setRecordCurrencyId(?string $recordCurrencyId): self
    {
        $this->initialized['recordCurrencyId'] = true;
        $this->recordCurrencyId = $recordCurrencyId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getRecordCurrencyName(): ?string
    {
        return $this->recordCurrencyName;
    }

    /**
     * @deprecated
     */
    public function setRecordCurrencyName(?string $recordCurrencyName): self
    {
        $this->initialized['recordCurrencyName'] = true;
        $this->recordCurrencyName = $recordCurrencyName;

        return $this;
    }

    public function getRecordEmailAddresses(): ?EmailAddresses
    {
        return $this->recordEmailAddresses;
    }

    public function setRecordEmailAddresses(?EmailAddresses $recordEmailAddresses): self
    {
        $this->initialized['recordEmailAddresses'] = true;
        $this->recordEmailAddresses = $recordEmailAddresses;

        return $this;
    }

    public function getReminderDate(): ?int
    {
        return $this->reminderDate;
    }

    public function setReminderDate(?int $reminderDate): self
    {
        $this->initialized['reminderDate'] = true;
        $this->reminderDate = $reminderDate;

        return $this;
    }

    public function getReminderSendType(): ?string
    {
        return $this->reminderSendType;
    }

    public function setReminderSendType(?string $reminderSendType): self
    {
        $this->initialized['reminderSendType'] = true;
        $this->reminderSendType = $reminderSendType;

        return $this;
    }

    public function getReminderType(): ?string
    {
        return $this->reminderType;
    }

    public function setReminderType(?string $reminderType): self
    {
        $this->initialized['reminderType'] = true;
        $this->reminderType = $reminderType;

        return $this;
    }

    public function getResponsibleUserId(): ?string
    {
        return $this->responsibleUserId;
    }

    public function setResponsibleUserId(?string $responsibleUserId): self
    {
        $this->initialized['responsibleUserId'] = true;
        $this->responsibleUserId = $responsibleUserId;

        return $this;
    }

    public function getSalesChannel(): ?string
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;

        return $this;
    }

    public function getSalesInvoiceEmailAddresses(): ?EmailAddresses
    {
        return $this->salesInvoiceEmailAddresses;
    }

    public function setSalesInvoiceEmailAddresses(?EmailAddresses $salesInvoiceEmailAddresses): self
    {
        $this->initialized['salesInvoiceEmailAddresses'] = true;
        $this->salesInvoiceEmailAddresses = $salesInvoiceEmailAddresses;

        return $this;
    }

    public function getSalesOrderEmailAddresses(): ?EmailAddresses
    {
        return $this->salesOrderEmailAddresses;
    }

    public function setSalesOrderEmailAddresses(?EmailAddresses $salesOrderEmailAddresses): self
    {
        $this->initialized['salesOrderEmailAddresses'] = true;
        $this->salesOrderEmailAddresses = $salesOrderEmailAddresses;

        return $this;
    }

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    public function getTemplate(): ?bool
    {
        return $this->template;
    }

    public function setTemplate(?bool $template): self
    {
        $this->initialized['template'] = true;
        $this->template = $template;

        return $this;
    }

    public function getTermOfPaymentId(): ?string
    {
        return $this->termOfPaymentId;
    }

    public function setTermOfPaymentId(?string $termOfPaymentId): self
    {
        $this->initialized['termOfPaymentId'] = true;
        $this->termOfPaymentId = $termOfPaymentId;

        return $this;
    }

    public function getTerminationReasonId(): ?string
    {
        return $this->terminationReasonId;
    }

    public function setTerminationReasonId(?string $terminationReasonId): self
    {
        $this->initialized['terminationReasonId'] = true;
        $this->terminationReasonId = $terminationReasonId;

        return $this;
    }

    public function getTicketServiceLevelAgreementId(): ?string
    {
        return $this->ticketServiceLevelAgreementId;
    }

    public function setTicketServiceLevelAgreementId(?string $ticketServiceLevelAgreementId): self
    {
        $this->initialized['ticketServiceLevelAgreementId'] = true;
        $this->ticketServiceLevelAgreementId = $ticketServiceLevelAgreementId;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }

    /**
     * @param  list<OnlyId>|null  $types
     */
    public function setTypes(?array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;

        return $this;
    }

    public function getUnlimited(): ?bool
    {
        return $this->unlimited;
    }

    public function setUnlimited(?bool $unlimited): self
    {
        $this->initialized['unlimited'] = true;
        $this->unlimited = $unlimited;

        return $this;
    }
}
