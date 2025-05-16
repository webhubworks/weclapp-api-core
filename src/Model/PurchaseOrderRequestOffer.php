<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderRequestOffer extends \ArrayObject
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
     * @deprecated
     *
     * @var string
     */
    protected $commercialLanguage;

    /**
     * @var string
     */
    protected $creatorId;

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
    protected $description;

    /**
     * @deprecated
     *
     * @var bool
     */
    protected $disableEmailTemplate;

    /**
     * @var int
     */
    protected $endDate;

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
     * @var int
     */
    protected $offerDate;

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
     * @var int
     */
    protected $plannedDeliveryDate;

    /**
     * @var list<PurchaseOrderRequestOfferItem>
     */
    protected $purchaseOrderRequestOfferItems;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $recordComment;

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
     * @var EmailAddresses
     */
    protected $recordEmailAddresses;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $recordFreeText;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $recordOpening;

    /**
     * @var int
     */
    protected $replyDate;

    /**
     * @var int
     */
    protected $requestDate;

    /**
     * @deprecated
     *
     * @var bool
     */
    protected $sentToRecipient;

    /**
     * @var int
     */
    protected $startDate;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $supplierId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $supplierNumber;

    /**
     * @var string
     */
    protected $supplierReference;

    /**
     * @deprecated
     *
     * @var list<string>
     */
    protected $tags;

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
     * @var int
     */
    protected $validFrom;

    /**
     * @var int
     */
    protected $validTo;

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

    /**
     * @deprecated
     */
    public function getCommercialLanguage(): string
    {
        return $this->commercialLanguage;
    }

    /**
     * @deprecated
     */
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

    public function getEndDate(): int
    {
        return $this->endDate;
    }

    public function setEndDate(int $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

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

    public function getOfferDate(): int
    {
        return $this->offerDate;
    }

    public function setOfferDate(int $offerDate): self
    {
        $this->initialized['offerDate'] = true;
        $this->offerDate = $offerDate;

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

    public function getPlannedDeliveryDate(): int
    {
        return $this->plannedDeliveryDate;
    }

    public function setPlannedDeliveryDate(int $plannedDeliveryDate): self
    {
        $this->initialized['plannedDeliveryDate'] = true;
        $this->plannedDeliveryDate = $plannedDeliveryDate;

        return $this;
    }

    /**
     * @return list<PurchaseOrderRequestOfferItem>
     */
    public function getPurchaseOrderRequestOfferItems(): array
    {
        return $this->purchaseOrderRequestOfferItems;
    }

    /**
     * @param  list<PurchaseOrderRequestOfferItem>  $purchaseOrderRequestOfferItems
     */
    public function setPurchaseOrderRequestOfferItems(array $purchaseOrderRequestOfferItems): self
    {
        $this->initialized['purchaseOrderRequestOfferItems'] = true;
        $this->purchaseOrderRequestOfferItems = $purchaseOrderRequestOfferItems;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getRecordComment(): string
    {
        return $this->recordComment;
    }

    /**
     * @deprecated
     */
    public function setRecordComment(string $recordComment): self
    {
        $this->initialized['recordComment'] = true;
        $this->recordComment = $recordComment;

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

    /**
     * @deprecated
     */
    public function getRecordFreeText(): string
    {
        return $this->recordFreeText;
    }

    /**
     * @deprecated
     */
    public function setRecordFreeText(string $recordFreeText): self
    {
        $this->initialized['recordFreeText'] = true;
        $this->recordFreeText = $recordFreeText;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getRecordOpening(): string
    {
        return $this->recordOpening;
    }

    /**
     * @deprecated
     */
    public function setRecordOpening(string $recordOpening): self
    {
        $this->initialized['recordOpening'] = true;
        $this->recordOpening = $recordOpening;

        return $this;
    }

    public function getReplyDate(): int
    {
        return $this->replyDate;
    }

    public function setReplyDate(int $replyDate): self
    {
        $this->initialized['replyDate'] = true;
        $this->replyDate = $replyDate;

        return $this;
    }

    public function getRequestDate(): int
    {
        return $this->requestDate;
    }

    public function setRequestDate(int $requestDate): self
    {
        $this->initialized['requestDate'] = true;
        $this->requestDate = $requestDate;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSentToRecipient(): bool
    {
        return $this->sentToRecipient;
    }

    /**
     * @deprecated
     */
    public function setSentToRecipient(bool $sentToRecipient): self
    {
        $this->initialized['sentToRecipient'] = true;
        $this->sentToRecipient = $sentToRecipient;

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

    public function getSupplierId(): string
    {
        return $this->supplierId;
    }

    public function setSupplierId(string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSupplierNumber(): string
    {
        return $this->supplierNumber;
    }

    /**
     * @deprecated
     */
    public function setSupplierNumber(string $supplierNumber): self
    {
        $this->initialized['supplierNumber'] = true;
        $this->supplierNumber = $supplierNumber;

        return $this;
    }

    public function getSupplierReference(): string
    {
        return $this->supplierReference;
    }

    public function setSupplierReference(string $supplierReference): self
    {
        $this->initialized['supplierReference'] = true;
        $this->supplierReference = $supplierReference;

        return $this;
    }

    /**
     * @deprecated
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param  list<string>  $tags
     *
     * @deprecated
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

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

    public function getValidFrom(): int
    {
        return $this->validFrom;
    }

    public function setValidFrom(int $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;

        return $this;
    }

    public function getValidTo(): int
    {
        return $this->validTo;
    }

    public function setValidTo(int $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;

        return $this;
    }
}
