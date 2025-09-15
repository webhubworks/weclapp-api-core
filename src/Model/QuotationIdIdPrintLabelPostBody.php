<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationIdIdPrintLabelPostBody extends \ArrayObject
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
    protected $quotationItemIds;
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
    public function getQuotationItemIds(): ?array
    {
        return $this->quotationItemIds;
    }
    /**
     * 
     *
     * @param list<string>|null $quotationItemIds
     *
     * @return self
     */
    public function setQuotationItemIds(?array $quotationItemIds): self
    {
        $this->initialized['quotationItemIds'] = true;
        $this->quotationItemIds = $quotationItemIds;
        return $this;
    }
}