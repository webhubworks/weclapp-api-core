<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdPrintLabelPostBody extends \ArrayObject
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
    protected $salesOrderItemIds;
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
    public function getSalesOrderItemIds(): ?array
    {
        return $this->salesOrderItemIds;
    }
    /**
     * 
     *
     * @param list<string>|null $salesOrderItemIds
     *
     * @return self
     */
    public function setSalesOrderItemIds(?array $salesOrderItemIds): self
    {
        $this->initialized['salesOrderItemIds'] = true;
        $this->salesOrderItemIds = $salesOrderItemIds;
        return $this;
    }
}