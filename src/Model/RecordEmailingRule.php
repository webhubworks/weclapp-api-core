<?php

namespace Webhubworks\WeclappApiCore\Model;

class RecordEmailingRule extends \ArrayObject
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
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var bool
     */
    protected $attachPurchaseOrderRequestCsvFile;
    /**
     * 
     *
     * @var bool
     */
    protected $attachRecordDocument;
    /**
     * 
     *
     * @var bool
     */
    protected $attachReturnLabel;
    /**
     * 
     *
     * @var bool
     */
    protected $attachShippingLabel;
    /**
     * 
     *
     * @var string
     */
    protected $bccRecipients;
    /**
     * 
     *
     * @var string
     */
    protected $ccRecipients;
    /**
     * 
     *
     * @var string
     */
    protected $event;
    /**
     * 
     *
     * @var string
     */
    protected $mailAccountId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $otherRecipients;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $paymentMethodTypes;
    /**
     * 
     *
     * @var string
     */
    protected $recipientType;
    /**
     * 
     *
     * @var list<string>
     */
    protected $salesChannels;
    /**
     * 
     *
     * @var string
     */
    protected $salesInvoiceOrigin;
    /**
     * 
     *
     * @var list<string>
     */
    protected $salesInvoiceTypes;
    /**
     * 
     *
     * @var list<string>
     */
    protected $shipmentOutTypes;
    /**
     * 
     *
     * @var string
     */
    protected $templateId;
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
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAttachPurchaseOrderRequestCsvFile(): bool
    {
        return $this->attachPurchaseOrderRequestCsvFile;
    }
    /**
     * 
     *
     * @param bool $attachPurchaseOrderRequestCsvFile
     *
     * @return self
     */
    public function setAttachPurchaseOrderRequestCsvFile(bool $attachPurchaseOrderRequestCsvFile): self
    {
        $this->initialized['attachPurchaseOrderRequestCsvFile'] = true;
        $this->attachPurchaseOrderRequestCsvFile = $attachPurchaseOrderRequestCsvFile;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAttachRecordDocument(): bool
    {
        return $this->attachRecordDocument;
    }
    /**
     * 
     *
     * @param bool $attachRecordDocument
     *
     * @return self
     */
    public function setAttachRecordDocument(bool $attachRecordDocument): self
    {
        $this->initialized['attachRecordDocument'] = true;
        $this->attachRecordDocument = $attachRecordDocument;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAttachReturnLabel(): bool
    {
        return $this->attachReturnLabel;
    }
    /**
     * 
     *
     * @param bool $attachReturnLabel
     *
     * @return self
     */
    public function setAttachReturnLabel(bool $attachReturnLabel): self
    {
        $this->initialized['attachReturnLabel'] = true;
        $this->attachReturnLabel = $attachReturnLabel;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAttachShippingLabel(): bool
    {
        return $this->attachShippingLabel;
    }
    /**
     * 
     *
     * @param bool $attachShippingLabel
     *
     * @return self
     */
    public function setAttachShippingLabel(bool $attachShippingLabel): self
    {
        $this->initialized['attachShippingLabel'] = true;
        $this->attachShippingLabel = $attachShippingLabel;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBccRecipients(): string
    {
        return $this->bccRecipients;
    }
    /**
     * 
     *
     * @param string $bccRecipients
     *
     * @return self
     */
    public function setBccRecipients(string $bccRecipients): self
    {
        $this->initialized['bccRecipients'] = true;
        $this->bccRecipients = $bccRecipients;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCcRecipients(): string
    {
        return $this->ccRecipients;
    }
    /**
     * 
     *
     * @param string $ccRecipients
     *
     * @return self
     */
    public function setCcRecipients(string $ccRecipients): self
    {
        $this->initialized['ccRecipients'] = true;
        $this->ccRecipients = $ccRecipients;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }
    /**
     * 
     *
     * @param string $event
     *
     * @return self
     */
    public function setEvent(string $event): self
    {
        $this->initialized['event'] = true;
        $this->event = $event;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMailAccountId(): string
    {
        return $this->mailAccountId;
    }
    /**
     * 
     *
     * @param string $mailAccountId
     *
     * @return self
     */
    public function setMailAccountId(string $mailAccountId): self
    {
        $this->initialized['mailAccountId'] = true;
        $this->mailAccountId = $mailAccountId;
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
     * @return string
     */
    public function getOtherRecipients(): string
    {
        return $this->otherRecipients;
    }
    /**
     * 
     *
     * @param string $otherRecipients
     *
     * @return self
     */
    public function setOtherRecipients(string $otherRecipients): self
    {
        $this->initialized['otherRecipients'] = true;
        $this->otherRecipients = $otherRecipients;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getPaymentMethodTypes(): array
    {
        return $this->paymentMethodTypes;
    }
    /**
     * 
     *
     * @param list<OnlyId> $paymentMethodTypes
     *
     * @return self
     */
    public function setPaymentMethodTypes(array $paymentMethodTypes): self
    {
        $this->initialized['paymentMethodTypes'] = true;
        $this->paymentMethodTypes = $paymentMethodTypes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecipientType(): string
    {
        return $this->recipientType;
    }
    /**
     * 
     *
     * @param string $recipientType
     *
     * @return self
     */
    public function setRecipientType(string $recipientType): self
    {
        $this->initialized['recipientType'] = true;
        $this->recipientType = $recipientType;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getSalesChannels(): array
    {
        return $this->salesChannels;
    }
    /**
     * 
     *
     * @param list<string> $salesChannels
     *
     * @return self
     */
    public function setSalesChannels(array $salesChannels): self
    {
        $this->initialized['salesChannels'] = true;
        $this->salesChannels = $salesChannels;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesInvoiceOrigin(): string
    {
        return $this->salesInvoiceOrigin;
    }
    /**
     * 
     *
     * @param string $salesInvoiceOrigin
     *
     * @return self
     */
    public function setSalesInvoiceOrigin(string $salesInvoiceOrigin): self
    {
        $this->initialized['salesInvoiceOrigin'] = true;
        $this->salesInvoiceOrigin = $salesInvoiceOrigin;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getSalesInvoiceTypes(): array
    {
        return $this->salesInvoiceTypes;
    }
    /**
     * 
     *
     * @param list<string> $salesInvoiceTypes
     *
     * @return self
     */
    public function setSalesInvoiceTypes(array $salesInvoiceTypes): self
    {
        $this->initialized['salesInvoiceTypes'] = true;
        $this->salesInvoiceTypes = $salesInvoiceTypes;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getShipmentOutTypes(): array
    {
        return $this->shipmentOutTypes;
    }
    /**
     * 
     *
     * @param list<string> $shipmentOutTypes
     *
     * @return self
     */
    public function setShipmentOutTypes(array $shipmentOutTypes): self
    {
        $this->initialized['shipmentOutTypes'] = true;
        $this->shipmentOutTypes = $shipmentOutTypes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTemplateId(): string
    {
        return $this->templateId;
    }
    /**
     * 
     *
     * @param string $templateId
     *
     * @return self
     */
    public function setTemplateId(string $templateId): self
    {
        $this->initialized['templateId'] = true;
        $this->templateId = $templateId;
        return $this;
    }
}