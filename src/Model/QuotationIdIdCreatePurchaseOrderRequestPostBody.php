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
     * @var bool|null
     */
    protected $mergeItems;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $quotationItemIds;
    /**
     * 
     *
     * @var string|null
     */
    protected $requestType;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $supplierIds;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useItemQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $warehouseId;
    /**
     * 
     *
     * @return bool|null
     */
    public function getMergeItems(): ?bool
    {
        return $this->mergeItems;
    }
    /**
     * 
     *
     * @param bool|null $mergeItems
     *
     * @return self
     */
    public function setMergeItems(?bool $mergeItems): self
    {
        $this->initialized['mergeItems'] = true;
        $this->mergeItems = $mergeItems;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getRequestType(): ?string
    {
        return $this->requestType;
    }
    /**
     * 
     *
     * @param string|null $requestType
     *
     * @return self
     */
    public function setRequestType(?string $requestType): self
    {
        $this->initialized['requestType'] = true;
        $this->requestType = $requestType;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSupplierIds(): ?array
    {
        return $this->supplierIds;
    }
    /**
     * 
     *
     * @param list<string>|null $supplierIds
     *
     * @return self
     */
    public function setSupplierIds(?array $supplierIds): self
    {
        $this->initialized['supplierIds'] = true;
        $this->supplierIds = $supplierIds;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseItemQuantity(): ?bool
    {
        return $this->useItemQuantity;
    }
    /**
     * 
     *
     * @param bool|null $useItemQuantity
     *
     * @return self
     */
    public function setUseItemQuantity(?bool $useItemQuantity): self
    {
        $this->initialized['useItemQuantity'] = true;
        $this->useItemQuantity = $useItemQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }
    /**
     * 
     *
     * @param string|null $warehouseId
     *
     * @return self
     */
    public function setWarehouseId(?string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;
        return $this;
    }
}