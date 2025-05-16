<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderIdIdProcessDropshippingPostBody extends \ArrayObject
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
     * @var list<PurchaseOrderIdIdProcessDropshippingPostBodyProcessPurchaseOrderItemsItem>
     */
    protected $processPurchaseOrderItems;
    /**
     * 
     *
     * @var PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters
     */
    protected $shipmentParameters;
    /**
     * 
     *
     * @return list<PurchaseOrderIdIdProcessDropshippingPostBodyProcessPurchaseOrderItemsItem>
     */
    public function getProcessPurchaseOrderItems(): array
    {
        return $this->processPurchaseOrderItems;
    }
    /**
     * 
     *
     * @param list<PurchaseOrderIdIdProcessDropshippingPostBodyProcessPurchaseOrderItemsItem> $processPurchaseOrderItems
     *
     * @return self
     */
    public function setProcessPurchaseOrderItems(array $processPurchaseOrderItems): self
    {
        $this->initialized['processPurchaseOrderItems'] = true;
        $this->processPurchaseOrderItems = $processPurchaseOrderItems;
        return $this;
    }
    /**
     * 
     *
     * @return PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters
     */
    public function getShipmentParameters(): PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters
    {
        return $this->shipmentParameters;
    }
    /**
     * 
     *
     * @param PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters $shipmentParameters
     *
     * @return self
     */
    public function setShipmentParameters(PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters $shipmentParameters): self
    {
        $this->initialized['shipmentParameters'] = true;
        $this->shipmentParameters = $shipmentParameters;
        return $this;
    }
}