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
     * @var string
     */
    protected $performanceRecordItemId;
    /**
     * 
     *
     * @var string
     */
    protected $quantity;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $salesInvoiceItemId;
    /**
     * 
     *
     * @var string
     */
    protected $salesOrderItemId;
    /**
     * 
     *
     * @var string
     */
    protected $shipmentItemId;
    /**
     * 
     *
     * @return string
     */
    public function getPerformanceRecordItemId(): string
    {
        return $this->performanceRecordItemId;
    }
    /**
     * 
     *
     * @param string $performanceRecordItemId
     *
     * @return self
     */
    public function setPerformanceRecordItemId(string $performanceRecordItemId): self
    {
        $this->initialized['performanceRecordItemId'] = true;
        $this->performanceRecordItemId = $performanceRecordItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(string $quantity): self
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
     * @return string
     */
    public function getSalesInvoiceItemId(): string
    {
        return $this->salesInvoiceItemId;
    }
    /**
     * 
     *
     * @param string $salesInvoiceItemId
     *
     * @deprecated
     *
     * @return self
     */
    public function setSalesInvoiceItemId(string $salesInvoiceItemId): self
    {
        $this->initialized['salesInvoiceItemId'] = true;
        $this->salesInvoiceItemId = $salesInvoiceItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesOrderItemId(): string
    {
        return $this->salesOrderItemId;
    }
    /**
     * 
     *
     * @param string $salesOrderItemId
     *
     * @return self
     */
    public function setSalesOrderItemId(string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShipmentItemId(): string
    {
        return $this->shipmentItemId;
    }
    /**
     * 
     *
     * @param string $shipmentItemId
     *
     * @return self
     */
    public function setShipmentItemId(string $shipmentItemId): self
    {
        $this->initialized['shipmentItemId'] = true;
        $this->shipmentItemId = $shipmentItemId;
        return $this;
    }
}