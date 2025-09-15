<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShipmentIdIdPrintLabelPostBody extends \ArrayObject
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
    protected $itemLabelQuantityPrintSetting;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $shipmentItemIds;
    /**
     * 
     *
     * @return string|null
     */
    public function getItemLabelQuantityPrintSetting(): ?string
    {
        return $this->itemLabelQuantityPrintSetting;
    }
    /**
     * 
     *
     * @param string|null $itemLabelQuantityPrintSetting
     *
     * @return self
     */
    public function setItemLabelQuantityPrintSetting(?string $itemLabelQuantityPrintSetting): self
    {
        $this->initialized['itemLabelQuantityPrintSetting'] = true;
        $this->itemLabelQuantityPrintSetting = $itemLabelQuantityPrintSetting;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getShipmentItemIds(): ?array
    {
        return $this->shipmentItemIds;
    }
    /**
     * 
     *
     * @param list<string>|null $shipmentItemIds
     *
     * @return self
     */
    public function setShipmentItemIds(?array $shipmentItemIds): self
    {
        $this->initialized['shipmentItemIds'] = true;
        $this->shipmentItemIds = $shipmentItemIds;
        return $this;
    }
}