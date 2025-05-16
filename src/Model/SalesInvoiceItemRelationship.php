<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesInvoiceItemRelationship extends \ArrayObject
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
    protected $performanceRecordItemId;

    /**
     * @var string|null
     */
    protected $quantity;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $salesInvoiceItemId;

    /**
     * @var string|null
     */
    protected $salesOrderItemId;

    /**
     * @var string|null
     */
    protected $shipmentItemId;

    public function getPerformanceRecordItemId(): ?string
    {
        return $this->performanceRecordItemId;
    }

    public function setPerformanceRecordItemId(?string $performanceRecordItemId): self
    {
        $this->initialized['performanceRecordItemId'] = true;
        $this->performanceRecordItemId = $performanceRecordItemId;

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
    public function getSalesInvoiceItemId(): ?string
    {
        return $this->salesInvoiceItemId;
    }

    /**
     * @deprecated
     */
    public function setSalesInvoiceItemId(?string $salesInvoiceItemId): self
    {
        $this->initialized['salesInvoiceItemId'] = true;
        $this->salesInvoiceItemId = $salesInvoiceItemId;

        return $this;
    }

    public function getSalesOrderItemId(): ?string
    {
        return $this->salesOrderItemId;
    }

    public function setSalesOrderItemId(?string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;

        return $this;
    }

    public function getShipmentItemId(): ?string
    {
        return $this->shipmentItemId;
    }

    public function setShipmentItemId(?string $shipmentItemId): self
    {
        $this->initialized['shipmentItemId'] = true;
        $this->shipmentItemId = $shipmentItemId;

        return $this;
    }
}
