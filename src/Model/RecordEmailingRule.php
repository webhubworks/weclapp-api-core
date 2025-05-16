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
     * @var bool
     */
    protected $active;

    /**
     * @var bool
     */
    protected $attachPurchaseOrderRequestCsvFile;

    /**
     * @var bool
     */
    protected $attachRecordDocument;

    /**
     * @var bool
     */
    protected $attachReturnLabel;

    /**
     * @var bool
     */
    protected $attachShippingLabel;

    /**
     * @var string
     */
    protected $bccRecipients;

    /**
     * @var string
     */
    protected $ccRecipients;

    /**
     * @var string
     */
    protected $event;

    /**
     * @var string
     */
    protected $mailAccountId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $otherRecipients;

    /**
     * @var list<OnlyId>
     */
    protected $paymentMethodTypes;

    /**
     * @var string
     */
    protected $recipientType;

    /**
     * @var list<string>
     */
    protected $salesChannels;

    /**
     * @var string
     */
    protected $salesInvoiceOrigin;

    /**
     * @var list<string>
     */
    protected $salesInvoiceTypes;

    /**
     * @var list<string>
     */
    protected $shipmentOutTypes;

    /**
     * @var string
     */
    protected $templateId;

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

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    public function getAttachPurchaseOrderRequestCsvFile(): bool
    {
        return $this->attachPurchaseOrderRequestCsvFile;
    }

    public function setAttachPurchaseOrderRequestCsvFile(bool $attachPurchaseOrderRequestCsvFile): self
    {
        $this->initialized['attachPurchaseOrderRequestCsvFile'] = true;
        $this->attachPurchaseOrderRequestCsvFile = $attachPurchaseOrderRequestCsvFile;

        return $this;
    }

    public function getAttachRecordDocument(): bool
    {
        return $this->attachRecordDocument;
    }

    public function setAttachRecordDocument(bool $attachRecordDocument): self
    {
        $this->initialized['attachRecordDocument'] = true;
        $this->attachRecordDocument = $attachRecordDocument;

        return $this;
    }

    public function getAttachReturnLabel(): bool
    {
        return $this->attachReturnLabel;
    }

    public function setAttachReturnLabel(bool $attachReturnLabel): self
    {
        $this->initialized['attachReturnLabel'] = true;
        $this->attachReturnLabel = $attachReturnLabel;

        return $this;
    }

    public function getAttachShippingLabel(): bool
    {
        return $this->attachShippingLabel;
    }

    public function setAttachShippingLabel(bool $attachShippingLabel): self
    {
        $this->initialized['attachShippingLabel'] = true;
        $this->attachShippingLabel = $attachShippingLabel;

        return $this;
    }

    public function getBccRecipients(): string
    {
        return $this->bccRecipients;
    }

    public function setBccRecipients(string $bccRecipients): self
    {
        $this->initialized['bccRecipients'] = true;
        $this->bccRecipients = $bccRecipients;

        return $this;
    }

    public function getCcRecipients(): string
    {
        return $this->ccRecipients;
    }

    public function setCcRecipients(string $ccRecipients): self
    {
        $this->initialized['ccRecipients'] = true;
        $this->ccRecipients = $ccRecipients;

        return $this;
    }

    public function getEvent(): string
    {
        return $this->event;
    }

    public function setEvent(string $event): self
    {
        $this->initialized['event'] = true;
        $this->event = $event;

        return $this;
    }

    public function getMailAccountId(): string
    {
        return $this->mailAccountId;
    }

    public function setMailAccountId(string $mailAccountId): self
    {
        $this->initialized['mailAccountId'] = true;
        $this->mailAccountId = $mailAccountId;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getOtherRecipients(): string
    {
        return $this->otherRecipients;
    }

    public function setOtherRecipients(string $otherRecipients): self
    {
        $this->initialized['otherRecipients'] = true;
        $this->otherRecipients = $otherRecipients;

        return $this;
    }

    /**
     * @return list<OnlyId>
     */
    public function getPaymentMethodTypes(): array
    {
        return $this->paymentMethodTypes;
    }

    /**
     * @param  list<OnlyId>  $paymentMethodTypes
     */
    public function setPaymentMethodTypes(array $paymentMethodTypes): self
    {
        $this->initialized['paymentMethodTypes'] = true;
        $this->paymentMethodTypes = $paymentMethodTypes;

        return $this;
    }

    public function getRecipientType(): string
    {
        return $this->recipientType;
    }

    public function setRecipientType(string $recipientType): self
    {
        $this->initialized['recipientType'] = true;
        $this->recipientType = $recipientType;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSalesChannels(): array
    {
        return $this->salesChannels;
    }

    /**
     * @param  list<string>  $salesChannels
     */
    public function setSalesChannels(array $salesChannels): self
    {
        $this->initialized['salesChannels'] = true;
        $this->salesChannels = $salesChannels;

        return $this;
    }

    public function getSalesInvoiceOrigin(): string
    {
        return $this->salesInvoiceOrigin;
    }

    public function setSalesInvoiceOrigin(string $salesInvoiceOrigin): self
    {
        $this->initialized['salesInvoiceOrigin'] = true;
        $this->salesInvoiceOrigin = $salesInvoiceOrigin;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSalesInvoiceTypes(): array
    {
        return $this->salesInvoiceTypes;
    }

    /**
     * @param  list<string>  $salesInvoiceTypes
     */
    public function setSalesInvoiceTypes(array $salesInvoiceTypes): self
    {
        $this->initialized['salesInvoiceTypes'] = true;
        $this->salesInvoiceTypes = $salesInvoiceTypes;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getShipmentOutTypes(): array
    {
        return $this->shipmentOutTypes;
    }

    /**
     * @param  list<string>  $shipmentOutTypes
     */
    public function setShipmentOutTypes(array $shipmentOutTypes): self
    {
        $this->initialized['shipmentOutTypes'] = true;
        $this->shipmentOutTypes = $shipmentOutTypes;

        return $this;
    }

    public function getTemplateId(): string
    {
        return $this->templateId;
    }

    public function setTemplateId(string $templateId): self
    {
        $this->initialized['templateId'] = true;
        $this->templateId = $templateId;

        return $this;
    }
}
