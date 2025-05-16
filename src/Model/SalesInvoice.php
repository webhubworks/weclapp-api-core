<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesInvoice extends \ArrayObject
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
     * @var int|null
     */
    protected $currencyConversionDate;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $currencyConversionRate;

    /**
     * @var string|null
     */
    protected $grossAmount;

    /**
     * @var string|null
     */
    protected $grossAmountInCompanyCurrency;

    /**
     * @var string|null
     */
    protected $headerDiscount;

    /**
     * @var string|null
     */
    protected $headerSurcharge;

    /**
     * @var string|null
     */
    protected $netAmount;

    /**
     * @var string|null
     */
    protected $netAmountInCompanyCurrency;

    /**
     * @var string|null
     */
    protected $nonStandardTaxId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $nonStandardTaxName;

    /**
     * @var string|null
     */
    protected $paymentMethodId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $paymentMethodName;

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
     * @var string|null
     */
    protected $termOfPaymentId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $termOfPaymentName;

    /**
     * @var string|null
     */
    protected $commission;

    /**
     * @var list<CommissionSalesPartner>|null
     */
    protected $commissionSalesPartners;

    /**
     * @var string|null
     */
    protected $customerId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $customerNumber;

    /**
     * @var string|null
     */
    protected $dispatchCountryCode;

    /**
     * @var bool|null
     */
    protected $factoring;

    /**
     * @var int|null
     */
    protected $pricingDate;

    /**
     * @var string|null
     */
    protected $responsibleUserId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $responsibleUserUsername;

    /**
     * @var string|null
     */
    protected $salesChannel;

    /**
     * @var int|null
     */
    protected $servicePeriodFrom;

    /**
     * @var int|null
     */
    protected $servicePeriodTo;

    /**
     * @var string|null
     */
    protected $shipmentMethodId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $shipmentMethodName;

    /**
     * @var int|null
     */
    protected $bookingDate;

    /**
     * @var string|null
     */
    protected $bookingText;

    /**
     * @var int|null
     */
    protected $cancellationDate;

    /**
     * @var string|null
     */
    protected $cancellationNumber;

    /**
     * @var bool|null
     */
    protected $cancellationSlipCommissionBlock;

    /**
     * @var bool|null
     */
    protected $cancellationSlipCommissionSettlementDone;

    /**
     * @var string|null
     */
    protected $collectiveInvoicePositionPrintType;

    /**
     * @var bool|null
     */
    protected $commissionBlock;

    /**
     * @var bool|null
     */
    protected $commissionSettlementDone;

    /**
     * @var string|null
     */
    protected $costCenterId;

    /**
     * @var string|null
     */
    protected $costTypeId;

    /**
     * @var bool|null
     */
    protected $creditResetsOrderState;

    /**
     * @var string|null
     */
    protected $customerHabitualExporterLetterOfIntentId;

    /**
     * @var RecordAddress|null
     */
    protected $deliveryAddress;

    /**
     * @var int|null
     */
    protected $deliveryDate;

    /**
     * @var bool|null
     */
    protected $directDebitFileCreated;

    /**
     * @var int|null
     */
    protected $directDebitFileLatestDate;

    /**
     * @var int|null
     */
    protected $dueDate;

    /**
     * @var int|null
     */
    protected $dunningBlockDateUntilDate;

    /**
     * @var string|null
     */
    protected $dunningBlockNote;

    /**
     * @var string|null
     */
    protected $dunningBlockState;

    /**
     * @var int|null
     */
    protected $invoiceDate;

    /**
     * @var string|null
     */
    protected $invoiceNumber;

    /**
     * @var string|null
     */
    protected $orderNumberAtCustomer;

    /**
     * @var bool|null
     */
    protected $paid;

    /**
     * @var string|null
     */
    protected $paymentStatus;

    /**
     * @var string|null
     */
    protected $precedingSalesInvoiceId;

    /**
     * @var RecordAddress|null
     */
    protected $recordAddress;

    /**
     * @var bool|null
     */
    protected $recordCommentInheritance;

    /**
     * @var EmailAddresses|null
     */
    protected $recordEmailAddresses;

    /**
     * @var bool|null
     */
    protected $recordFreeTextInheritance;

    /**
     * @var bool|null
     */
    protected $recordOpeningInheritance;

    /**
     * @var list<SalesInvoiceItem>|null
     */
    protected $salesInvoiceItems;

    /**
     * @var string|null
     */
    protected $salesInvoiceType;

    /**
     * @var string|null
     */
    protected $salesOrderId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $salesOrderNumber;

    /**
     * @var list<OnlyId>|null
     */
    protected $salesOrders;

    /**
     * @var string|null
     */
    protected $sepaDirectDebitMandateId;

    /**
     * @var list<SalesInvoiceShippingCostItem>|null
     */
    protected $shippingCostItems;

    /**
     * @var int|null
     */
    protected $shippingDate;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var list<SalesInvoiceStatusHistory>|null
     */
    protected $statusHistory;

    /**
     * @var string|null
     */
    protected $vatRegistrationNumber;

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

    public function getCurrencyConversionDate(): ?int
    {
        return $this->currencyConversionDate;
    }

    public function setCurrencyConversionDate(?int $currencyConversionDate): self
    {
        $this->initialized['currencyConversionDate'] = true;
        $this->currencyConversionDate = $currencyConversionDate;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCurrencyConversionRate(): ?string
    {
        return $this->currencyConversionRate;
    }

    /**
     * @deprecated
     */
    public function setCurrencyConversionRate(?string $currencyConversionRate): self
    {
        $this->initialized['currencyConversionRate'] = true;
        $this->currencyConversionRate = $currencyConversionRate;

        return $this;
    }

    public function getGrossAmount(): ?string
    {
        return $this->grossAmount;
    }

    public function setGrossAmount(?string $grossAmount): self
    {
        $this->initialized['grossAmount'] = true;
        $this->grossAmount = $grossAmount;

        return $this;
    }

    public function getGrossAmountInCompanyCurrency(): ?string
    {
        return $this->grossAmountInCompanyCurrency;
    }

    public function setGrossAmountInCompanyCurrency(?string $grossAmountInCompanyCurrency): self
    {
        $this->initialized['grossAmountInCompanyCurrency'] = true;
        $this->grossAmountInCompanyCurrency = $grossAmountInCompanyCurrency;

        return $this;
    }

    public function getHeaderDiscount(): ?string
    {
        return $this->headerDiscount;
    }

    public function setHeaderDiscount(?string $headerDiscount): self
    {
        $this->initialized['headerDiscount'] = true;
        $this->headerDiscount = $headerDiscount;

        return $this;
    }

    public function getHeaderSurcharge(): ?string
    {
        return $this->headerSurcharge;
    }

    public function setHeaderSurcharge(?string $headerSurcharge): self
    {
        $this->initialized['headerSurcharge'] = true;
        $this->headerSurcharge = $headerSurcharge;

        return $this;
    }

    public function getNetAmount(): ?string
    {
        return $this->netAmount;
    }

    public function setNetAmount(?string $netAmount): self
    {
        $this->initialized['netAmount'] = true;
        $this->netAmount = $netAmount;

        return $this;
    }

    public function getNetAmountInCompanyCurrency(): ?string
    {
        return $this->netAmountInCompanyCurrency;
    }

    public function setNetAmountInCompanyCurrency(?string $netAmountInCompanyCurrency): self
    {
        $this->initialized['netAmountInCompanyCurrency'] = true;
        $this->netAmountInCompanyCurrency = $netAmountInCompanyCurrency;

        return $this;
    }

    public function getNonStandardTaxId(): ?string
    {
        return $this->nonStandardTaxId;
    }

    public function setNonStandardTaxId(?string $nonStandardTaxId): self
    {
        $this->initialized['nonStandardTaxId'] = true;
        $this->nonStandardTaxId = $nonStandardTaxId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getNonStandardTaxName(): ?string
    {
        return $this->nonStandardTaxName;
    }

    /**
     * @deprecated
     */
    public function setNonStandardTaxName(?string $nonStandardTaxName): self
    {
        $this->initialized['nonStandardTaxName'] = true;
        $this->nonStandardTaxName = $nonStandardTaxName;

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

    /**
     * @deprecated
     */
    public function getPaymentMethodName(): ?string
    {
        return $this->paymentMethodName;
    }

    /**
     * @deprecated
     */
    public function setPaymentMethodName(?string $paymentMethodName): self
    {
        $this->initialized['paymentMethodName'] = true;
        $this->paymentMethodName = $paymentMethodName;

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

    /**
     * @deprecated
     */
    public function getTermOfPaymentName(): ?string
    {
        return $this->termOfPaymentName;
    }

    /**
     * @deprecated
     */
    public function setTermOfPaymentName(?string $termOfPaymentName): self
    {
        $this->initialized['termOfPaymentName'] = true;
        $this->termOfPaymentName = $termOfPaymentName;

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

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCustomerNumber(): ?string
    {
        return $this->customerNumber;
    }

    /**
     * @deprecated
     */
    public function setCustomerNumber(?string $customerNumber): self
    {
        $this->initialized['customerNumber'] = true;
        $this->customerNumber = $customerNumber;

        return $this;
    }

    public function getDispatchCountryCode(): ?string
    {
        return $this->dispatchCountryCode;
    }

    public function setDispatchCountryCode(?string $dispatchCountryCode): self
    {
        $this->initialized['dispatchCountryCode'] = true;
        $this->dispatchCountryCode = $dispatchCountryCode;

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

    /**
     * @deprecated
     */
    public function getResponsibleUserUsername(): ?string
    {
        return $this->responsibleUserUsername;
    }

    /**
     * @deprecated
     */
    public function setResponsibleUserUsername(?string $responsibleUserUsername): self
    {
        $this->initialized['responsibleUserUsername'] = true;
        $this->responsibleUserUsername = $responsibleUserUsername;

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

    public function getServicePeriodFrom(): ?int
    {
        return $this->servicePeriodFrom;
    }

    public function setServicePeriodFrom(?int $servicePeriodFrom): self
    {
        $this->initialized['servicePeriodFrom'] = true;
        $this->servicePeriodFrom = $servicePeriodFrom;

        return $this;
    }

    public function getServicePeriodTo(): ?int
    {
        return $this->servicePeriodTo;
    }

    public function setServicePeriodTo(?int $servicePeriodTo): self
    {
        $this->initialized['servicePeriodTo'] = true;
        $this->servicePeriodTo = $servicePeriodTo;

        return $this;
    }

    public function getShipmentMethodId(): ?string
    {
        return $this->shipmentMethodId;
    }

    public function setShipmentMethodId(?string $shipmentMethodId): self
    {
        $this->initialized['shipmentMethodId'] = true;
        $this->shipmentMethodId = $shipmentMethodId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getShipmentMethodName(): ?string
    {
        return $this->shipmentMethodName;
    }

    /**
     * @deprecated
     */
    public function setShipmentMethodName(?string $shipmentMethodName): self
    {
        $this->initialized['shipmentMethodName'] = true;
        $this->shipmentMethodName = $shipmentMethodName;

        return $this;
    }

    public function getBookingDate(): ?int
    {
        return $this->bookingDate;
    }

    public function setBookingDate(?int $bookingDate): self
    {
        $this->initialized['bookingDate'] = true;
        $this->bookingDate = $bookingDate;

        return $this;
    }

    public function getBookingText(): ?string
    {
        return $this->bookingText;
    }

    public function setBookingText(?string $bookingText): self
    {
        $this->initialized['bookingText'] = true;
        $this->bookingText = $bookingText;

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

    public function getCancellationNumber(): ?string
    {
        return $this->cancellationNumber;
    }

    public function setCancellationNumber(?string $cancellationNumber): self
    {
        $this->initialized['cancellationNumber'] = true;
        $this->cancellationNumber = $cancellationNumber;

        return $this;
    }

    public function getCancellationSlipCommissionBlock(): ?bool
    {
        return $this->cancellationSlipCommissionBlock;
    }

    public function setCancellationSlipCommissionBlock(?bool $cancellationSlipCommissionBlock): self
    {
        $this->initialized['cancellationSlipCommissionBlock'] = true;
        $this->cancellationSlipCommissionBlock = $cancellationSlipCommissionBlock;

        return $this;
    }

    public function getCancellationSlipCommissionSettlementDone(): ?bool
    {
        return $this->cancellationSlipCommissionSettlementDone;
    }

    public function setCancellationSlipCommissionSettlementDone(?bool $cancellationSlipCommissionSettlementDone): self
    {
        $this->initialized['cancellationSlipCommissionSettlementDone'] = true;
        $this->cancellationSlipCommissionSettlementDone = $cancellationSlipCommissionSettlementDone;

        return $this;
    }

    public function getCollectiveInvoicePositionPrintType(): ?string
    {
        return $this->collectiveInvoicePositionPrintType;
    }

    public function setCollectiveInvoicePositionPrintType(?string $collectiveInvoicePositionPrintType): self
    {
        $this->initialized['collectiveInvoicePositionPrintType'] = true;
        $this->collectiveInvoicePositionPrintType = $collectiveInvoicePositionPrintType;

        return $this;
    }

    public function getCommissionBlock(): ?bool
    {
        return $this->commissionBlock;
    }

    public function setCommissionBlock(?bool $commissionBlock): self
    {
        $this->initialized['commissionBlock'] = true;
        $this->commissionBlock = $commissionBlock;

        return $this;
    }

    public function getCommissionSettlementDone(): ?bool
    {
        return $this->commissionSettlementDone;
    }

    public function setCommissionSettlementDone(?bool $commissionSettlementDone): self
    {
        $this->initialized['commissionSettlementDone'] = true;
        $this->commissionSettlementDone = $commissionSettlementDone;

        return $this;
    }

    public function getCostCenterId(): ?string
    {
        return $this->costCenterId;
    }

    public function setCostCenterId(?string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;

        return $this;
    }

    public function getCostTypeId(): ?string
    {
        return $this->costTypeId;
    }

    public function setCostTypeId(?string $costTypeId): self
    {
        $this->initialized['costTypeId'] = true;
        $this->costTypeId = $costTypeId;

        return $this;
    }

    public function getCreditResetsOrderState(): ?bool
    {
        return $this->creditResetsOrderState;
    }

    public function setCreditResetsOrderState(?bool $creditResetsOrderState): self
    {
        $this->initialized['creditResetsOrderState'] = true;
        $this->creditResetsOrderState = $creditResetsOrderState;

        return $this;
    }

    public function getCustomerHabitualExporterLetterOfIntentId(): ?string
    {
        return $this->customerHabitualExporterLetterOfIntentId;
    }

    public function setCustomerHabitualExporterLetterOfIntentId(?string $customerHabitualExporterLetterOfIntentId): self
    {
        $this->initialized['customerHabitualExporterLetterOfIntentId'] = true;
        $this->customerHabitualExporterLetterOfIntentId = $customerHabitualExporterLetterOfIntentId;

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

    public function getDeliveryDate(): ?int
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(?int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    public function getDirectDebitFileCreated(): ?bool
    {
        return $this->directDebitFileCreated;
    }

    public function setDirectDebitFileCreated(?bool $directDebitFileCreated): self
    {
        $this->initialized['directDebitFileCreated'] = true;
        $this->directDebitFileCreated = $directDebitFileCreated;

        return $this;
    }

    public function getDirectDebitFileLatestDate(): ?int
    {
        return $this->directDebitFileLatestDate;
    }

    public function setDirectDebitFileLatestDate(?int $directDebitFileLatestDate): self
    {
        $this->initialized['directDebitFileLatestDate'] = true;
        $this->directDebitFileLatestDate = $directDebitFileLatestDate;

        return $this;
    }

    public function getDueDate(): ?int
    {
        return $this->dueDate;
    }

    public function setDueDate(?int $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;

        return $this;
    }

    public function getDunningBlockDateUntilDate(): ?int
    {
        return $this->dunningBlockDateUntilDate;
    }

    public function setDunningBlockDateUntilDate(?int $dunningBlockDateUntilDate): self
    {
        $this->initialized['dunningBlockDateUntilDate'] = true;
        $this->dunningBlockDateUntilDate = $dunningBlockDateUntilDate;

        return $this;
    }

    public function getDunningBlockNote(): ?string
    {
        return $this->dunningBlockNote;
    }

    public function setDunningBlockNote(?string $dunningBlockNote): self
    {
        $this->initialized['dunningBlockNote'] = true;
        $this->dunningBlockNote = $dunningBlockNote;

        return $this;
    }

    public function getDunningBlockState(): ?string
    {
        return $this->dunningBlockState;
    }

    public function setDunningBlockState(?string $dunningBlockState): self
    {
        $this->initialized['dunningBlockState'] = true;
        $this->dunningBlockState = $dunningBlockState;

        return $this;
    }

    public function getInvoiceDate(): ?int
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(?int $invoiceDate): self
    {
        $this->initialized['invoiceDate'] = true;
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;

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

    public function getPaid(): ?bool
    {
        return $this->paid;
    }

    public function setPaid(?bool $paid): self
    {
        $this->initialized['paid'] = true;
        $this->paid = $paid;

        return $this;
    }

    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(?string $paymentStatus): self
    {
        $this->initialized['paymentStatus'] = true;
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    public function getPrecedingSalesInvoiceId(): ?string
    {
        return $this->precedingSalesInvoiceId;
    }

    public function setPrecedingSalesInvoiceId(?string $precedingSalesInvoiceId): self
    {
        $this->initialized['precedingSalesInvoiceId'] = true;
        $this->precedingSalesInvoiceId = $precedingSalesInvoiceId;

        return $this;
    }

    public function getRecordAddress(): ?RecordAddress
    {
        return $this->recordAddress;
    }

    public function setRecordAddress(?RecordAddress $recordAddress): self
    {
        $this->initialized['recordAddress'] = true;
        $this->recordAddress = $recordAddress;

        return $this;
    }

    public function getRecordCommentInheritance(): ?bool
    {
        return $this->recordCommentInheritance;
    }

    public function setRecordCommentInheritance(?bool $recordCommentInheritance): self
    {
        $this->initialized['recordCommentInheritance'] = true;
        $this->recordCommentInheritance = $recordCommentInheritance;

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

    public function getRecordFreeTextInheritance(): ?bool
    {
        return $this->recordFreeTextInheritance;
    }

    public function setRecordFreeTextInheritance(?bool $recordFreeTextInheritance): self
    {
        $this->initialized['recordFreeTextInheritance'] = true;
        $this->recordFreeTextInheritance = $recordFreeTextInheritance;

        return $this;
    }

    public function getRecordOpeningInheritance(): ?bool
    {
        return $this->recordOpeningInheritance;
    }

    public function setRecordOpeningInheritance(?bool $recordOpeningInheritance): self
    {
        $this->initialized['recordOpeningInheritance'] = true;
        $this->recordOpeningInheritance = $recordOpeningInheritance;

        return $this;
    }

    /**
     * @return list<SalesInvoiceItem>|null
     */
    public function getSalesInvoiceItems(): ?array
    {
        return $this->salesInvoiceItems;
    }

    /**
     * @param  list<SalesInvoiceItem>|null  $salesInvoiceItems
     */
    public function setSalesInvoiceItems(?array $salesInvoiceItems): self
    {
        $this->initialized['salesInvoiceItems'] = true;
        $this->salesInvoiceItems = $salesInvoiceItems;

        return $this;
    }

    public function getSalesInvoiceType(): ?string
    {
        return $this->salesInvoiceType;
    }

    public function setSalesInvoiceType(?string $salesInvoiceType): self
    {
        $this->initialized['salesInvoiceType'] = true;
        $this->salesInvoiceType = $salesInvoiceType;

        return $this;
    }

    public function getSalesOrderId(): ?string
    {
        return $this->salesOrderId;
    }

    public function setSalesOrderId(?string $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSalesOrderNumber(): ?string
    {
        return $this->salesOrderNumber;
    }

    /**
     * @deprecated
     */
    public function setSalesOrderNumber(?string $salesOrderNumber): self
    {
        $this->initialized['salesOrderNumber'] = true;
        $this->salesOrderNumber = $salesOrderNumber;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getSalesOrders(): ?array
    {
        return $this->salesOrders;
    }

    /**
     * @param  list<OnlyId>|null  $salesOrders
     */
    public function setSalesOrders(?array $salesOrders): self
    {
        $this->initialized['salesOrders'] = true;
        $this->salesOrders = $salesOrders;

        return $this;
    }

    public function getSepaDirectDebitMandateId(): ?string
    {
        return $this->sepaDirectDebitMandateId;
    }

    public function setSepaDirectDebitMandateId(?string $sepaDirectDebitMandateId): self
    {
        $this->initialized['sepaDirectDebitMandateId'] = true;
        $this->sepaDirectDebitMandateId = $sepaDirectDebitMandateId;

        return $this;
    }

    /**
     * @return list<SalesInvoiceShippingCostItem>|null
     */
    public function getShippingCostItems(): ?array
    {
        return $this->shippingCostItems;
    }

    /**
     * @param  list<SalesInvoiceShippingCostItem>|null  $shippingCostItems
     */
    public function setShippingCostItems(?array $shippingCostItems): self
    {
        $this->initialized['shippingCostItems'] = true;
        $this->shippingCostItems = $shippingCostItems;

        return $this;
    }

    public function getShippingDate(): ?int
    {
        return $this->shippingDate;
    }

    public function setShippingDate(?int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return list<SalesInvoiceStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }

    /**
     * @param  list<SalesInvoiceStatusHistory>|null  $statusHistory
     */
    public function setStatusHistory(?array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;

        return $this;
    }

    public function getVatRegistrationNumber(): ?string
    {
        return $this->vatRegistrationNumber;
    }

    public function setVatRegistrationNumber(?string $vatRegistrationNumber): self
    {
        $this->initialized['vatRegistrationNumber'] = true;
        $this->vatRegistrationNumber = $vatRegistrationNumber;

        return $this;
    }
}
