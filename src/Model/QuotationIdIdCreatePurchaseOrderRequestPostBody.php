<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationIdIdCreatePurchaseOrderRequestPostBody extends \ArrayObject
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
     * @var bool
     */
    protected $mergeItems;
    /**
     * 
     *
     * @var list<string>
     */
    protected $quotationItemIds;
    /**
     * 
     *
     * @var string
     */
    protected $requestType;
    /**
     * 
     *
     * @var list<string>
     */
    protected $supplierIds;
    /**
     * 
     *
     * @var bool
     */
    protected $useItemQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $warehouseId;
    /**
     * 
     *
     * @return bool
     */
    public function getMergeItems(): bool
    {
        return $this->mergeItems;
    }
    /**
     * 
     *
     * @param bool $mergeItems
     *
     * @return self
     */
    public function setMergeItems(bool $mergeItems): self
    {
        $this->initialized['mergeItems'] = true;
        $this->mergeItems = $mergeItems;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getQuotationItemIds(): array
    {
        return $this->quotationItemIds;
    }
    /**
     * 
     *
     * @param list<string> $quotationItemIds
     *
     * @return self
     */
    public function setQuotationItemIds(array $quotationItemIds): self
    {
        $this->initialized['quotationItemIds'] = true;
        $this->quotationItemIds = $quotationItemIds;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequestType(): string
    {
        return $this->requestType;
    }
    /**
     * 
     *
     * @param string $requestType
     *
     * @return self
     */
    public function setRequestType(string $requestType): self
    {
        $this->initialized['requestType'] = true;
        $this->requestType = $requestType;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getSupplierIds(): array
    {
        return $this->supplierIds;
    }
    /**
     * 
     *
     * @param list<string> $supplierIds
     *
     * @return self
     */
    public function setSupplierIds(array $supplierIds): self
    {
        $this->initialized['supplierIds'] = true;
        $this->supplierIds = $supplierIds;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUseItemQuantity(): bool
    {
        return $this->useItemQuantity;
    }
    /**
     * 
     *
     * @param bool $useItemQuantity
     *
     * @return self
     */
    public function setUseItemQuantity(bool $useItemQuantity): self
    {
        $this->initialized['useItemQuantity'] = true;
        $this->useItemQuantity = $useItemQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWarehouseId(): string
    {
        return $this->warehouseId;
    }
    /**
     * 
     *
     * @param string $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;
        return $this;
    }
}