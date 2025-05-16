<?php

namespace Webhubworks\WeclappApiCore\Model;

class BaseRecordWithMoney extends \ArrayObject
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
}
