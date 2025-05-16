<?php

namespace Webhubworks\WeclappApiCore\Model;

class BaseSalesRecordWithAddresses extends \ArrayObject
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
     * @var list<CustomAttribute>|null
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
     * @var string|null
     */
    protected $defaultShippingCarrierId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $defaultShippingCarrierName;

    /**
     * @var RecordAddress|null
     */
    protected $deliveryAddress;

    /**
     * @var EmailAddresses|null
     */
    protected $deliveryEmailAddresses;

    /**
     * @var RecordAddress|null
     */
    protected $invoiceAddress;

    /**
     * @var int|null
     */
    protected $plannedDeliveryDate;

    /**
     * @var int|null
     */
    protected $plannedShippingDate;

    /**
     * @var RecordAddress|null
     */
    protected $recordAddress;

    /**
     * @var EmailAddresses|null
     */
    protected $salesInvoiceEmailAddresses;

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
     * @return list<CustomAttribute>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<CustomAttribute>|null  $customAttributes
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

    public function getDefaultShippingCarrierId(): ?string
    {
        return $this->defaultShippingCarrierId;
    }

    public function setDefaultShippingCarrierId(?string $defaultShippingCarrierId): self
    {
        $this->initialized['defaultShippingCarrierId'] = true;
        $this->defaultShippingCarrierId = $defaultShippingCarrierId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getDefaultShippingCarrierName(): ?string
    {
        return $this->defaultShippingCarrierName;
    }

    /**
     * @deprecated
     */
    public function setDefaultShippingCarrierName(?string $defaultShippingCarrierName): self
    {
        $this->initialized['defaultShippingCarrierName'] = true;
        $this->defaultShippingCarrierName = $defaultShippingCarrierName;

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

    public function getPlannedDeliveryDate(): ?int
    {
        return $this->plannedDeliveryDate;
    }

    public function setPlannedDeliveryDate(?int $plannedDeliveryDate): self
    {
        $this->initialized['plannedDeliveryDate'] = true;
        $this->plannedDeliveryDate = $plannedDeliveryDate;

        return $this;
    }

    public function getPlannedShippingDate(): ?int
    {
        return $this->plannedShippingDate;
    }

    public function setPlannedShippingDate(?int $plannedShippingDate): self
    {
        $this->initialized['plannedShippingDate'] = true;
        $this->plannedShippingDate = $plannedShippingDate;

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
}
