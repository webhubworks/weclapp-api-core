<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseInvoiceItemRelationship extends \ArrayObject
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
     * @var string|null
     */
    protected $quantity;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $shipmentItemId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $supplierOrderItemId;

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

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getShipmentItemId(): ?string
    {
        return $this->shipmentItemId;
    }

    /**
     * @deprecated
     */
    public function setShipmentItemId(?string $shipmentItemId): self
    {
        $this->initialized['shipmentItemId'] = true;
        $this->shipmentItemId = $shipmentItemId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSupplierOrderItemId(): ?string
    {
        return $this->supplierOrderItemId;
    }

    /**
     * @deprecated
     */
    public function setSupplierOrderItemId(?string $supplierOrderItemId): self
    {
        $this->initialized['supplierOrderItemId'] = true;
        $this->supplierOrderItemId = $supplierOrderItemId;

        return $this;
    }
}
