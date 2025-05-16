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
     * 
     *
     * @var string|null
     */
    protected $performanceRecordItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $quantity;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $salesInvoiceItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $shipmentItemId;
    /**
     * 
     *
     * @return string|null
     */
    public function getPerformanceRecordItemId(): ?string
    {
        return $this->performanceRecordItemId;
    }
    /**
     * 
     *
     * @param string|null $performanceRecordItemId
     *
     * @return self
     */
    public function setPerformanceRecordItemId(?string $performanceRecordItemId): self
    {
        $this->initialized['performanceRecordItemId'] = true;
        $this->performanceRecordItemId = $performanceRecordItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getSalesInvoiceItemId(): ?string
    {
        return $this->salesInvoiceItemId;
    }
    /**
     * 
     *
     * @param string|null $salesInvoiceItemId
     *
     * @deprecated
     *
     * @return self
     */
    public function setSalesInvoiceItemId(?string $salesInvoiceItemId): self
    {
        $this->initialized['salesInvoiceItemId'] = true;
        $this->salesInvoiceItemId = $salesInvoiceItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesOrderItemId(): ?string
    {
        return $this->salesOrderItemId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderItemId
     *
     * @return self
     */
    public function setSalesOrderItemId(?string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShipmentItemId(): ?string
    {
        return $this->shipmentItemId;
    }
    /**
     * 
     *
     * @param string|null $shipmentItemId
     *
     * @return self
     */
    public function setShipmentItemId(?string $shipmentItemId): self
    {
        $this->initialized['shipmentItemId'] = true;
        $this->shipmentItemId = $shipmentItemId;
        return $this;
    }
}