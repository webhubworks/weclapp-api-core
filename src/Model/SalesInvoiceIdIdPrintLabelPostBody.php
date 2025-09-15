<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesInvoiceIdIdPrintLabelPostBody extends \ArrayObject
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
    protected $salesInvoiceItemIds;
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
    public function getSalesInvoiceItemIds(): ?array
    {
        return $this->salesInvoiceItemIds;
    }
    /**
     * 
     *
     * @param list<string>|null $salesInvoiceItemIds
     *
     * @return self
     */
    public function setSalesInvoiceItemIds(?array $salesInvoiceItemIds): self
    {
        $this->initialized['salesInvoiceItemIds'] = true;
        $this->salesInvoiceItemIds = $salesInvoiceItemIds;
        return $this;
    }
}