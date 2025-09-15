<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderIdIdCancelDropshippingShipmentsPostBody extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $shipmentIds;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getShipmentIds(): ?array
    {
        return $this->shipmentIds;
    }
    /**
     * 
     *
     * @param list<string>|null $shipmentIds
     *
     * @return self
     */
    public function setShipmentIds(?array $shipmentIds): self
    {
        $this->initialized['shipmentIds'] = true;
        $this->shipmentIds = $shipmentIds;
        return $this;
    }
}