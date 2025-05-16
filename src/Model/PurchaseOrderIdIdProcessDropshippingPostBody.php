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
     * @var list<PurchaseOrderIdIdProcessDropshippingPostBodyProcessPurchaseOrderItemsItem>|null
     */
    protected $processPurchaseOrderItems;

    /**
     * @var PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters|null
     */
    protected $shipmentParameters;

    /**
     * @return list<PurchaseOrderIdIdProcessDropshippingPostBodyProcessPurchaseOrderItemsItem>|null
     */
    public function getProcessPurchaseOrderItems(): ?array
    {
        return $this->processPurchaseOrderItems;
    }

    /**
     * @param  list<PurchaseOrderIdIdProcessDropshippingPostBodyProcessPurchaseOrderItemsItem>|null  $processPurchaseOrderItems
     */
    public function setProcessPurchaseOrderItems(?array $processPurchaseOrderItems): self
    {
        $this->initialized['processPurchaseOrderItems'] = true;
        $this->processPurchaseOrderItems = $processPurchaseOrderItems;

        return $this;
    }

    public function getShipmentParameters(): ?PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters
    {
        return $this->shipmentParameters;
    }

    public function setShipmentParameters(?PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters $shipmentParameters): self
    {
        $this->initialized['shipmentParameters'] = true;
        $this->shipmentParameters = $shipmentParameters;

        return $this;
    }
}
