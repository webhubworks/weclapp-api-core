<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderIdIdPrintLabelPostBody extends \ArrayObject
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
    protected $purchaseOrderItemIds;
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
    public function getPurchaseOrderItemIds(): ?array
    {
        return $this->purchaseOrderItemIds;
    }
    /**
     * 
     *
     * @param list<string>|null $purchaseOrderItemIds
     *
     * @return self
     */
    public function setPurchaseOrderItemIds(?array $purchaseOrderItemIds): self
    {
        $this->initialized['purchaseOrderItemIds'] = true;
        $this->purchaseOrderItemIds = $purchaseOrderItemIds;
        return $this;
    }
}