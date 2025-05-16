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
    protected $commercialLanguage;

    /**
     * @var string
     */
    protected $creatorId;

    /**
     * @var string
     */
    protected $description;

    /**
     * @deprecated
     *
     * @var bool
     */
    protected $disableEmailTemplate;

    /**
     * @var string
     */
    protected $recordComment;

    /**
     * @var string
     */
    protected $recordFreeText;

    /**
     * @var string
     */
    protected $recordOpening;

    /**
     * @var bool
     */
    protected $sentToRecipient;

    /**
     * @var list<string>
     */
    protected $tags;

    /**
     * @var int
     */
    protected $currencyConversionDate;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $currencyConversionRate;

    /**
     * @var string
     */
    protected $grossAmount;

    /**
     * @var string
     */
    protected $grossAmountInCompanyCurrency;

    /**
     * @var string
     */
    protected $headerDiscount;

    /**
     * @var string
     */
    protected $headerSurcharge;

    /**
     * @var string
     */
    protected $netAmount;

    /**
     * @var string
     */
    protected $netAmountInCompanyCurrency;

    /**
     * @var string
     */
    protected $nonStandardTaxId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $nonStandardTaxName;

    /**
     * @var string
     */
    protected $paymentMethodId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $paymentMethodName;

    /**
     * @var string
     */
    protected $recordCurrencyId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $recordCurrencyName;

    /**
     * @var string
     */
    protected $termOfPaymentId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $termOfPaymentName;

    /**
     * @var string
     */
    protected $commission;

    /**
     * @var list<CommissionSalesPartner>
     */
    protected $commissionSalesPartners;

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
    protected $dispatchCountryCode;

    /**
     * @var bool
     */
    protected $factoring;

    /**
     * @var int
     */
    protected $pricingDate;

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
    protected $salesChannel;

    /**
     * @var int
     */
    protected $servicePeriodFrom;

    /**
     * @var int
     */
    protected $servicePeriodTo;

    /**
     * @var string
     */
    protected $shipmentMethodId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $shipmentMethodName;

    /**
     * @var int
     */
    protected $bookingDate;

    /**
     * @var string
     */
    protected $bookingText;

    /**
     * @var int
     */
    protected $cancellationDate;

    /**
     * @var string
     */
    protected $cancellationNumber;

    /**
     * @var bool
     */
    protected $cancellationSlipCommissionBlock;

    /**
     * @var bool
     */
    protected $cancellationSlipCommissionSettlementDone;

    /**
     * @var string
     */
    protected $collectiveInvoicePositionPrintType;

    /**
     * @var bool
     */
    protected $commissionBlock;

    /**
     * @var bool
     */
    protected $commissionSettlementDone;

    /**
     * @var string
     */
    protected $costCenterId;

    /**
     * @var string
     */
    protected $costTypeId;

    /**
     * @var bool
     */
    protected $creditResetsOrderState;

    /**
     * @var string
     */
    protected $customerHabitualExporterLetterOfIntentId;

    /**
     * @var RecordAddress
     */
    protected $deliveryAddress;

    /**
     * @var int
     */
    protected $deliveryDate;

    /**
     * @var bool
     */
    protected $directDebitFileCreated;

    /**
     * @var int
     */
    protected $directDebitFileLatestDate;

    /**
     * @var int
     */
    protected $dueDate;

    /**
     * @var int
     */
    protected $dunningBlockDateUntilDate;

    /**
     * @var string
     */
    protected $dunningBlockNote;

    /**
     * @var string
     */
    protected $dunningBlockState;

    /**
     * @var int
     */
    protected $invoiceDate;

    /**
     * @var string
     */
    protected $invoiceNumber;

    /**
     * @var string
     */
    protected $orderNumberAtCustomer;

    /**
     * @var bool
     */
    protected $paid;

    /**
     * @var string
     */
    protected $paymentStatus;

    /**
     * @var string
     */
    protected $precedingSalesInvoiceId;

    /**
     * @var RecordAddress
     */
    protected $recordAddress;

    /**
     * @var bool
     */
    protected $recordCommentInheritance;

    /**
     * @var EmailAddresses
     */
    protected $recordEmailAddresses;

    /**
     * @var bool
     */
    protected $recordFreeTextInheritance;

    /**
     * @var bool
     */
    protected $recordOpeningInheritance;

    /**
     * @var list<SalesInvoiceItem>
     */
    protected $salesInvoiceItems;

    /**
     * @var string
     */
    protected $salesInvoiceType;

    /**
     * @var string
     */
    protected $salesOrderId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $salesOrderNumber;

    /**
     * @var list<OnlyId>
     */
    protected $salesOrders;

    /**
     * @var string
     */
    protected $sepaDirectDebitMandateId;

    /**
     * @var list<SalesInvoiceShippingCostItem>
     */
    protected $shippingCostItems;

    /**
     * @var int
     */
    protected $shippingDate;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var list<SalesInvoiceStatusHistory>
     */
    protected $statusHistory;

    /**
     * @var string
     */
    protected $vatRegistrationNumber;

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

    public function getCommercialLanguage(): string
    {
        return $this->commercialLanguage;
    }

    public function setCommercialLanguage(string $commercialLanguage): self
    {
        $this->initialized['commercialLanguage'] = true;
        $this->commercialLanguage = $commercialLanguage;

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

    /**
     * @deprecated
     */
    public function getDisableEmailTemplate(): bool
    {
        return $this->disableEmailTemplate;
    }

    /**
     * @deprecated
     */
    public function setDisableEmailTemplate(bool $disableEmailTemplate): self
    {
        $this->initialized['disableEmailTemplate'] = true;
        $this->disableEmailTemplate = $disableEmailTemplate;

        return $this;
    }

    public function getRecordComment(): string
    {
        return $this->recordComment;
    }

    public function setRecordComment(string $recordComment): self
    {
        $this->initialized['recordComment'] = true;
        $this->recordComment = $recordComment;

        return $this;
    }

    public function getRecordFreeText(): string
    {
        return $this->recordFreeText;
    }

    public function setRecordFreeText(string $recordFreeText): self
    {
        $this->initialized['recordFreeText'] = true;
        $this->recordFreeText = $recordFreeText;

        return $this;
    }

    public function getRecordOpening(): string
    {
        return $this->recordOpening;
    }

    public function setRecordOpening(string $recordOpening): self
    {
        $this->initialized['recordOpening'] = true;
        $this->recordOpening = $recordOpening;

        return $this;
    }

    public function getSentToRecipient(): bool
    {
        return $this->sentToRecipient;
    }

    public function setSentToRecipient(bool $sentToRecipient): self
    {
        $this->initialized['sentToRecipient'] = true;
        $this->sentToRecipient = $sentToRecipient;

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

    public function getCurrencyConversionDate(): int
    {
        return $this->currencyConversionDate;
    }

    public function setCurrencyConversionDate(int $currencyConversionDate): self
    {
        $this->initialized['currencyConversionDate'] = true;
        $this->currencyConversionDate = $currencyConversionDate;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCurrencyConversionRate(): string
    {
        return $this->currencyConversionRate;
    }

    /**
     * @deprecated
     */
    public function setCurrencyConversionRate(string $currencyConversionRate): self
    {
        $this->initialized['currencyConversionRate'] = true;
        $this->currencyConversionRate = $currencyConversionRate;

        return $this;
    }

    public function getGrossAmount(): string
    {
        return $this->grossAmount;
    }

    public function setGrossAmount(string $grossAmount): self
    {
        $this->initialized['grossAmount'] = true;
        $this->grossAmount = $grossAmount;

        return $this;
    }

    public function getGrossAmountInCompanyCurrency(): string
    {
        return $this->grossAmountInCompanyCurrency;
    }

    public function setGrossAmountInCompanyCurrency(string $grossAmountInCompanyCurrency): self
    {
        $this->initialized['grossAmountInCompanyCurrency'] = true;
        $this->grossAmountInCompanyCurrency = $grossAmountInCompanyCurrency;

        return $this;
    }

    public function getHeaderDiscount(): string
    {
        return $this->headerDiscount;
    }

    public function setHeaderDiscount(string $headerDiscount): self
    {
        $this->initialized['headerDiscount'] = true;
        $this->headerDiscount = $headerDiscount;

        return $this;
    }

    public function getHeaderSurcharge(): string
    {
        return $this->headerSurcharge;
    }

    public function setHeaderSurcharge(string $headerSurcharge): self
    {
        $this->initialized['headerSurcharge'] = true;
        $this->headerSurcharge = $headerSurcharge;

        return $this;
    }

    public function getNetAmount(): string
    {
        return $this->netAmount;
    }

    public function setNetAmount(string $netAmount): self
    {
        $this->initialized['netAmount'] = true;
        $this->netAmount = $netAmount;

        return $this;
    }

    public function getNetAmountInCompanyCurrency(): string
    {
        return $this->netAmountInCompanyCurrency;
    }

    public function setNetAmountInCompanyCurrency(string $netAmountInCompanyCurrency): self
    {
        $this->initialized['netAmountInCompanyCurrency'] = true;
        $this->netAmountInCompanyCurrency = $netAmountInCompanyCurrency;

        return $this;
    }

    public function getNonStandardTaxId(): string
    {
        return $this->nonStandardTaxId;
    }

    public function setNonStandardTaxId(string $nonStandardTaxId): self
    {
        $this->initialized['nonStandardTaxId'] = true;
        $this->nonStandardTaxId = $nonStandardTaxId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getNonStandardTaxName(): string
    {
        return $this->nonStandardTaxName;
    }

    /**
     * @deprecated
     */
    public function setNonStandardTaxName(string $nonStandardTaxName): self
    {
        $this->initialized['nonStandardTaxName'] = true;
        $this->nonStandardTaxName = $nonStandardTaxName;

        return $this;
    }

    public function getPaymentMethodId(): string
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId(string $paymentMethodId): self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPaymentMethodName(): string
    {
        return $this->paymentMethodName;
    }

    /**
     * @deprecated
     */
    public function setPaymentMethodName(string $paymentMethodName): self
    {
        $this->initialized['paymentMethodName'] = true;
        $this->paymentMethodName = $paymentMethodName;

        return $this;
    }

    public function getRecordCurrencyId(): string
    {
        return $this->recordCurrencyId;
    }

    public function setRecordCurrencyId(string $recordCurrencyId): self
    {
        $this->initialized['recordCurrencyId'] = true;
        $this->recordCurrencyId = $recordCurrencyId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getRecordCurrencyName(): string
    {
        return $this->recordCurrencyName;
    }

    /**
     * @deprecated
     */
    public function setRecordCurrencyName(string $recordCurrencyName): self
    {
        $this->initialized['recordCurrencyName'] = true;
        $this->recordCurrencyName = $recordCurrencyName;

        return $this;
    }

    public function getTermOfPaymentId(): string
    {
        return $this->termOfPaymentId;
    }

    public function setTermOfPaymentId(string $termOfPaymentId): self
    {
        $this->initialized['termOfPaymentId'] = true;
        $this->termOfPaymentId = $termOfPaymentId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getTermOfPaymentName(): string
    {
        return $this->termOfPaymentName;
    }

    /**
     * @deprecated
     */
    public function setTermOfPaymentName(string $termOfPaymentName): self
    {
        $this->initialized['termOfPaymentName'] = true;
        $this->termOfPaymentName = $termOfPaymentName;

        return $this;
    }

    public function getCommission(): string
    {
        return $this->commission;
    }

    public function setCommission(string $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;

        return $this;
    }

    /**
     * @return list<CommissionSalesPartner>
     */
    public function getCommissionSalesPartners(): array
    {
        return $this->commissionSalesPartners;
    }

    /**
     * @param  list<CommissionSalesPartner>  $commissionSalesPartners
     */
    public function setCommissionSalesPartners(array $commissionSalesPartners): self
    {
        $this->initialized['commissionSalesPartners'] = true;
        $this->commissionSalesPartners = $commissionSalesPartners;

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

    public function getDispatchCountryCode(): string
    {
        return $this->dispatchCountryCode;
    }

    public function setDispatchCountryCode(string $dispatchCountryCode): self
    {
        $this->initialized['dispatchCountryCode'] = true;
        $this->dispatchCountryCode = $dispatchCountryCode;

        return $this;
    }

    public function getFactoring(): bool
    {
        return $this->factoring;
    }

    public function setFactoring(bool $factoring): self
    {
        $this->initialized['factoring'] = true;
        $this->factoring = $factoring;

        return $this;
    }

    public function getPricingDate(): int
    {
        return $this->pricingDate;
    }

    public function setPricingDate(int $pricingDate): self
    {
        $this->initialized['pricingDate'] = true;
        $this->pricingDate = $pricingDate;

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

    public function getServicePeriodFrom(): int
    {
        return $this->servicePeriodFrom;
    }

    public function setServicePeriodFrom(int $servicePeriodFrom): self
    {
        $this->initialized['servicePeriodFrom'] = true;
        $this->servicePeriodFrom = $servicePeriodFrom;

        return $this;
    }

    public function getServicePeriodTo(): int
    {
        return $this->servicePeriodTo;
    }

    public function setServicePeriodTo(int $servicePeriodTo): self
    {
        $this->initialized['servicePeriodTo'] = true;
        $this->servicePeriodTo = $servicePeriodTo;

        return $this;
    }

    public function getShipmentMethodId(): string
    {
        return $this->shipmentMethodId;
    }

    public function setShipmentMethodId(string $shipmentMethodId): self
    {
        $this->initialized['shipmentMethodId'] = true;
        $this->shipmentMethodId = $shipmentMethodId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getShipmentMethodName(): string
    {
        return $this->shipmentMethodName;
    }

    /**
     * @deprecated
     */
    public function setShipmentMethodName(string $shipmentMethodName): self
    {
        $this->initialized['shipmentMethodName'] = true;
        $this->shipmentMethodName = $shipmentMethodName;

        return $this;
    }

    public function getBookingDate(): int
    {
        return $this->bookingDate;
    }

    public function setBookingDate(int $bookingDate): self
    {
        $this->initialized['bookingDate'] = true;
        $this->bookingDate = $bookingDate;

        return $this;
    }

    public function getBookingText(): string
    {
        return $this->bookingText;
    }

    public function setBookingText(string $bookingText): self
    {
        $this->initialized['bookingText'] = true;
        $this->bookingText = $bookingText;

        return $this;
    }

    public function getCancellationDate(): int
    {
        return $this->cancellationDate;
    }

    public function setCancellationDate(int $cancellationDate): self
    {
        $this->initialized['cancellationDate'] = true;
        $this->cancellationDate = $cancellationDate;

        return $this;
    }

    public function getCancellationNumber(): string
    {
        return $this->cancellationNumber;
    }

    public function setCancellationNumber(string $cancellationNumber): self
    {
        $this->initialized['cancellationNumber'] = true;
        $this->cancellationNumber = $cancellationNumber;

        return $this;
    }

    public function getCancellationSlipCommissionBlock(): bool
    {
        return $this->cancellationSlipCommissionBlock;
    }

    public function setCancellationSlipCommissionBlock(bool $cancellationSlipCommissionBlock): self
    {
        $this->initialized['cancellationSlipCommissionBlock'] = true;
        $this->cancellationSlipCommissionBlock = $cancellationSlipCommissionBlock;

        return $this;
    }

    public function getCancellationSlipCommissionSettlementDone(): bool
    {
        return $this->cancellationSlipCommissionSettlementDone;
    }

    public function setCancellationSlipCommissionSettlementDone(bool $cancellationSlipCommissionSettlementDone): self
    {
        $this->initialized['cancellationSlipCommissionSettlementDone'] = true;
        $this->cancellationSlipCommissionSettlementDone = $cancellationSlipCommissionSettlementDone;

        return $this;
    }

    public function getCollectiveInvoicePositionPrintType(): string
    {
        return $this->collectiveInvoicePositionPrintType;
    }

    public function setCollectiveInvoicePositionPrintType(string $collectiveInvoicePositionPrintType): self
    {
        $this->initialized['collectiveInvoicePositionPrintType'] = true;
        $this->collectiveInvoicePositionPrintType = $collectiveInvoicePositionPrintType;

        return $this;
    }

    public function getCommissionBlock(): bool
    {
        return $this->commissionBlock;
    }

    public function setCommissionBlock(bool $commissionBlock): self
    {
        $this->initialized['commissionBlock'] = true;
        $this->commissionBlock = $commissionBlock;

        return $this;
    }

    public function getCommissionSettlementDone(): bool
    {
        return $this->commissionSettlementDone;
    }

    public function setCommissionSettlementDone(bool $commissionSettlementDone): self
    {
        $this->initialized['commissionSettlementDone'] = true;
        $this->commissionSettlementDone = $commissionSettlementDone;

        return $this;
    }

    public function getCostCenterId(): string
    {
        return $this->costCenterId;
    }

    public function setCostCenterId(string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;

        return $this;
    }

    public function getCostTypeId(): string
    {
        return $this->costTypeId;
    }

    public function setCostTypeId(string $costTypeId): self
    {
        $this->initialized['costTypeId'] = true;
        $this->costTypeId = $costTypeId;

        return $this;
    }

    public function getCreditResetsOrderState(): bool
    {
        return $this->creditResetsOrderState;
    }

    public function setCreditResetsOrderState(bool $creditResetsOrderState): self
    {
        $this->initialized['creditResetsOrderState'] = true;
        $this->creditResetsOrderState = $creditResetsOrderState;

        return $this;
    }

    public function getCustomerHabitualExporterLetterOfIntentId(): string
    {
        return $this->customerHabitualExporterLetterOfIntentId;
    }

    public function setCustomerHabitualExporterLetterOfIntentId(string $customerHabitualExporterLetterOfIntentId): self
    {
        $this->initialized['customerHabitualExporterLetterOfIntentId'] = true;
        $this->customerHabitualExporterLetterOfIntentId = $customerHabitualExporterLetterOfIntentId;

        return $this;
    }

    public function getDeliveryAddress(): RecordAddress
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(RecordAddress $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getDeliveryDate(): int
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    public function getDirectDebitFileCreated(): bool
    {
        return $this->directDebitFileCreated;
    }

    public function setDirectDebitFileCreated(bool $directDebitFileCreated): self
    {
        $this->initialized['directDebitFileCreated'] = true;
        $this->directDebitFileCreated = $directDebitFileCreated;

        return $this;
    }

    public function getDirectDebitFileLatestDate(): int
    {
        return $this->directDebitFileLatestDate;
    }

    public function setDirectDebitFileLatestDate(int $directDebitFileLatestDate): self
    {
        $this->initialized['directDebitFileLatestDate'] = true;
        $this->directDebitFileLatestDate = $directDebitFileLatestDate;

        return $this;
    }

    public function getDueDate(): int
    {
        return $this->dueDate;
    }

    public function setDueDate(int $dueDate): self
    {
        $this->initialized['dueDate'] = true;
        $this->dueDate = $dueDate;

        return $this;
    }

    public function getDunningBlockDateUntilDate(): int
    {
        return $this->dunningBlockDateUntilDate;
    }

    public function setDunningBlockDateUntilDate(int $dunningBlockDateUntilDate): self
    {
        $this->initialized['dunningBlockDateUntilDate'] = true;
        $this->dunningBlockDateUntilDate = $dunningBlockDateUntilDate;

        return $this;
    }

    public function getDunningBlockNote(): string
    {
        return $this->dunningBlockNote;
    }

    public function setDunningBlockNote(string $dunningBlockNote): self
    {
        $this->initialized['dunningBlockNote'] = true;
        $this->dunningBlockNote = $dunningBlockNote;

        return $this;
    }

    public function getDunningBlockState(): string
    {
        return $this->dunningBlockState;
    }

    public function setDunningBlockState(string $dunningBlockState): self
    {
        $this->initialized['dunningBlockState'] = true;
        $this->dunningBlockState = $dunningBlockState;

        return $this;
    }

    public function getInvoiceDate(): int
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(int $invoiceDate): self
    {
        $this->initialized['invoiceDate'] = true;
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber(string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    public function getOrderNumberAtCustomer(): string
    {
        return $this->orderNumberAtCustomer;
    }

    public function setOrderNumberAtCustomer(string $orderNumberAtCustomer): self
    {
        $this->initialized['orderNumberAtCustomer'] = true;
        $this->orderNumberAtCustomer = $orderNumberAtCustomer;

        return $this;
    }

    public function getPaid(): bool
    {
        return $this->paid;
    }

    public function setPaid(bool $paid): self
    {
        $this->initialized['paid'] = true;
        $this->paid = $paid;

        return $this;
    }

    public function getPaymentStatus(): string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(string $paymentStatus): self
    {
        $this->initialized['paymentStatus'] = true;
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    public function getPrecedingSalesInvoiceId(): string
    {
        return $this->precedingSalesInvoiceId;
    }

    public function setPrecedingSalesInvoiceId(string $precedingSalesInvoiceId): self
    {
        $this->initialized['precedingSalesInvoiceId'] = true;
        $this->precedingSalesInvoiceId = $precedingSalesInvoiceId;

        return $this;
    }

    public function getRecordAddress(): RecordAddress
    {
        return $this->recordAddress;
    }

    public function setRecordAddress(RecordAddress $recordAddress): self
    {
        $this->initialized['recordAddress'] = true;
        $this->recordAddress = $recordAddress;

        return $this;
    }

    public function getRecordCommentInheritance(): bool
    {
        return $this->recordCommentInheritance;
    }

    public function setRecordCommentInheritance(bool $recordCommentInheritance): self
    {
        $this->initialized['recordCommentInheritance'] = true;
        $this->recordCommentInheritance = $recordCommentInheritance;

        return $this;
    }

    public function getRecordEmailAddresses(): EmailAddresses
    {
        return $this->recordEmailAddresses;
    }

    public function setRecordEmailAddresses(EmailAddresses $recordEmailAddresses): self
    {
        $this->initialized['recordEmailAddresses'] = true;
        $this->recordEmailAddresses = $recordEmailAddresses;

        return $this;
    }

    public function getRecordFreeTextInheritance(): bool
    {
        return $this->recordFreeTextInheritance;
    }

    public function setRecordFreeTextInheritance(bool $recordFreeTextInheritance): self
    {
        $this->initialized['recordFreeTextInheritance'] = true;
        $this->recordFreeTextInheritance = $recordFreeTextInheritance;

        return $this;
    }

    public function getRecordOpeningInheritance(): bool
    {
        return $this->recordOpeningInheritance;
    }

    public function setRecordOpeningInheritance(bool $recordOpeningInheritance): self
    {
        $this->initialized['recordOpeningInheritance'] = true;
        $this->recordOpeningInheritance = $recordOpeningInheritance;

        return $this;
    }

    /**
     * @return list<SalesInvoiceItem>
     */
    public function getSalesInvoiceItems(): array
    {
        return $this->salesInvoiceItems;
    }

    /**
     * @param  list<SalesInvoiceItem>  $salesInvoiceItems
     */
    public function setSalesInvoiceItems(array $salesInvoiceItems): self
    {
        $this->initialized['salesInvoiceItems'] = true;
        $this->salesInvoiceItems = $salesInvoiceItems;

        return $this;
    }

    public function getSalesInvoiceType(): string
    {
        return $this->salesInvoiceType;
    }

    public function setSalesInvoiceType(string $salesInvoiceType): self
    {
        $this->initialized['salesInvoiceType'] = true;
        $this->salesInvoiceType = $salesInvoiceType;

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

    /**
     * @deprecated
     */
    public function getSalesOrderNumber(): string
    {
        return $this->salesOrderNumber;
    }

    /**
     * @deprecated
     */
    public function setSalesOrderNumber(string $salesOrderNumber): self
    {
        $this->initialized['salesOrderNumber'] = true;
        $this->salesOrderNumber = $salesOrderNumber;

        return $this;
    }

    /**
     * @return list<OnlyId>
     */
    public function getSalesOrders(): array
    {
        return $this->salesOrders;
    }

    /**
     * @param  list<OnlyId>  $salesOrders
     */
    public function setSalesOrders(array $salesOrders): self
    {
        $this->initialized['salesOrders'] = true;
        $this->salesOrders = $salesOrders;

        return $this;
    }

    public function getSepaDirectDebitMandateId(): string
    {
        return $this->sepaDirectDebitMandateId;
    }

    public function setSepaDirectDebitMandateId(string $sepaDirectDebitMandateId): self
    {
        $this->initialized['sepaDirectDebitMandateId'] = true;
        $this->sepaDirectDebitMandateId = $sepaDirectDebitMandateId;

        return $this;
    }

    /**
     * @return list<SalesInvoiceShippingCostItem>
     */
    public function getShippingCostItems(): array
    {
        return $this->shippingCostItems;
    }

    /**
     * @param  list<SalesInvoiceShippingCostItem>  $shippingCostItems
     */
    public function setShippingCostItems(array $shippingCostItems): self
    {
        $this->initialized['shippingCostItems'] = true;
        $this->shippingCostItems = $shippingCostItems;

        return $this;
    }

    public function getShippingDate(): int
    {
        return $this->shippingDate;
    }

    public function setShippingDate(int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return list<SalesInvoiceStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }

    /**
     * @param  list<SalesInvoiceStatusHistory>  $statusHistory
     */
    public function setStatusHistory(array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;

        return $this;
    }

    public function getVatRegistrationNumber(): string
    {
        return $this->vatRegistrationNumber;
    }

    public function setVatRegistrationNumber(string $vatRegistrationNumber): self
    {
        $this->initialized['vatRegistrationNumber'] = true;
        $this->vatRegistrationNumber = $vatRegistrationNumber;

        return $this;
    }
}
