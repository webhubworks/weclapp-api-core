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
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var bool|null
     */
    protected $attachPurchaseOrderRequestCsvFile;
    /**
     * 
     *
     * @var bool|null
     */
    protected $attachRecordDocument;
    /**
     * 
     *
     * @var bool|null
     */
    protected $attachReturnLabel;
    /**
     * 
     *
     * @var bool|null
     */
    protected $attachShippingLabel;
    /**
     * 
     *
     * @var string|null
     */
    protected $bccRecipients;
    /**
     * 
     *
     * @var string|null
     */
    protected $ccRecipients;
    /**
     * 
     *
     * @var string|null
     */
    protected $event;
    /**
     * 
     *
     * @var string|null
     */
    protected $mailAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $otherRecipients;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $paymentMethods;
    /**
     * 
     *
     * @var string|null
     */
    protected $recipientType;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $salesChannels;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesInvoiceOrigin;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $salesInvoiceTypes;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $salesOrderOrigins;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $shipmentOutTypes;
    /**
     * 
     *
     * @var string|null
     */
    protected $templateId;
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
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAttachPurchaseOrderRequestCsvFile(): ?bool
    {
        return $this->attachPurchaseOrderRequestCsvFile;
    }
    /**
     * 
     *
     * @param bool|null $attachPurchaseOrderRequestCsvFile
     *
     * @return self
     */
    public function setAttachPurchaseOrderRequestCsvFile(?bool $attachPurchaseOrderRequestCsvFile): self
    {
        $this->initialized['attachPurchaseOrderRequestCsvFile'] = true;
        $this->attachPurchaseOrderRequestCsvFile = $attachPurchaseOrderRequestCsvFile;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAttachRecordDocument(): ?bool
    {
        return $this->attachRecordDocument;
    }
    /**
     * 
     *
     * @param bool|null $attachRecordDocument
     *
     * @return self
     */
    public function setAttachRecordDocument(?bool $attachRecordDocument): self
    {
        $this->initialized['attachRecordDocument'] = true;
        $this->attachRecordDocument = $attachRecordDocument;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAttachReturnLabel(): ?bool
    {
        return $this->attachReturnLabel;
    }
    /**
     * 
     *
     * @param bool|null $attachReturnLabel
     *
     * @return self
     */
    public function setAttachReturnLabel(?bool $attachReturnLabel): self
    {
        $this->initialized['attachReturnLabel'] = true;
        $this->attachReturnLabel = $attachReturnLabel;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAttachShippingLabel(): ?bool
    {
        return $this->attachShippingLabel;
    }
    /**
     * 
     *
     * @param bool|null $attachShippingLabel
     *
     * @return self
     */
    public function setAttachShippingLabel(?bool $attachShippingLabel): self
    {
        $this->initialized['attachShippingLabel'] = true;
        $this->attachShippingLabel = $attachShippingLabel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBccRecipients(): ?string
    {
        return $this->bccRecipients;
    }
    /**
     * 
     *
     * @param string|null $bccRecipients
     *
     * @return self
     */
    public function setBccRecipients(?string $bccRecipients): self
    {
        $this->initialized['bccRecipients'] = true;
        $this->bccRecipients = $bccRecipients;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCcRecipients(): ?string
    {
        return $this->ccRecipients;
    }
    /**
     * 
     *
     * @param string|null $ccRecipients
     *
     * @return self
     */
    public function setCcRecipients(?string $ccRecipients): self
    {
        $this->initialized['ccRecipients'] = true;
        $this->ccRecipients = $ccRecipients;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }
    /**
     * 
     *
     * @param string|null $event
     *
     * @return self
     */
    public function setEvent(?string $event): self
    {
        $this->initialized['event'] = true;
        $this->event = $event;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMailAccountId(): ?string
    {
        return $this->mailAccountId;
    }
    /**
     * 
     *
     * @param string|null $mailAccountId
     *
     * @return self
     */
    public function setMailAccountId(?string $mailAccountId): self
    {
        $this->initialized['mailAccountId'] = true;
        $this->mailAccountId = $mailAccountId;
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
     * @return string|null
     */
    public function getOtherRecipients(): ?string
    {
        return $this->otherRecipients;
    }
    /**
     * 
     *
     * @param string|null $otherRecipients
     *
     * @return self
     */
    public function setOtherRecipients(?string $otherRecipients): self
    {
        $this->initialized['otherRecipients'] = true;
        $this->otherRecipients = $otherRecipients;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getPaymentMethods(): ?array
    {
        return $this->paymentMethods;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $paymentMethods
     *
     * @return self
     */
    public function setPaymentMethods(?array $paymentMethods): self
    {
        $this->initialized['paymentMethods'] = true;
        $this->paymentMethods = $paymentMethods;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecipientType(): ?string
    {
        return $this->recipientType;
    }
    /**
     * 
     *
     * @param string|null $recipientType
     *
     * @return self
     */
    public function setRecipientType(?string $recipientType): self
    {
        $this->initialized['recipientType'] = true;
        $this->recipientType = $recipientType;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSalesChannels(): ?array
    {
        return $this->salesChannels;
    }
    /**
     * 
     *
     * @param list<string>|null $salesChannels
     *
     * @return self
     */
    public function setSalesChannels(?array $salesChannels): self
    {
        $this->initialized['salesChannels'] = true;
        $this->salesChannels = $salesChannels;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesInvoiceOrigin(): ?string
    {
        return $this->salesInvoiceOrigin;
    }
    /**
     * 
     *
     * @param string|null $salesInvoiceOrigin
     *
     * @return self
     */
    public function setSalesInvoiceOrigin(?string $salesInvoiceOrigin): self
    {
        $this->initialized['salesInvoiceOrigin'] = true;
        $this->salesInvoiceOrigin = $salesInvoiceOrigin;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSalesInvoiceTypes(): ?array
    {
        return $this->salesInvoiceTypes;
    }
    /**
     * 
     *
     * @param list<string>|null $salesInvoiceTypes
     *
     * @return self
     */
    public function setSalesInvoiceTypes(?array $salesInvoiceTypes): self
    {
        $this->initialized['salesInvoiceTypes'] = true;
        $this->salesInvoiceTypes = $salesInvoiceTypes;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSalesOrderOrigins(): ?array
    {
        return $this->salesOrderOrigins;
    }
    /**
     * 
     *
     * @param list<string>|null $salesOrderOrigins
     *
     * @return self
     */
    public function setSalesOrderOrigins(?array $salesOrderOrigins): self
    {
        $this->initialized['salesOrderOrigins'] = true;
        $this->salesOrderOrigins = $salesOrderOrigins;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getShipmentOutTypes(): ?array
    {
        return $this->shipmentOutTypes;
    }
    /**
     * 
     *
     * @param list<string>|null $shipmentOutTypes
     *
     * @return self
     */
    public function setShipmentOutTypes(?array $shipmentOutTypes): self
    {
        $this->initialized['shipmentOutTypes'] = true;
        $this->shipmentOutTypes = $shipmentOutTypes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }
    /**
     * 
     *
     * @param string|null $templateId
     *
     * @return self
     */
    public function setTemplateId(?string $templateId): self
    {
        $this->initialized['templateId'] = true;
        $this->templateId = $templateId;
        return $this;
    }
}