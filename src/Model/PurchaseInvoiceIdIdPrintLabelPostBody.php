<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseInvoiceIdIdPrintLabelPostBody extends \ArrayObject
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
    protected $purchaseInvoiceItemIds;
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
    public function getPurchaseInvoiceItemIds(): ?array
    {
        return $this->purchaseInvoiceItemIds;
    }
    /**
     * 
     *
     * @param list<string>|null $purchaseInvoiceItemIds
     *
     * @return self
     */
    public function setPurchaseInvoiceItemIds(?array $purchaseInvoiceItemIds): self
    {
        $this->initialized['purchaseInvoiceItemIds'] = true;
        $this->purchaseInvoiceItemIds = $purchaseInvoiceItemIds;
        return $this;
    }
}