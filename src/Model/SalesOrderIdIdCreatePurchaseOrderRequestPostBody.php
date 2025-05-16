<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdCreatePurchaseOrderRequestPostBody extends \ArrayObject
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
     * @var bool
     */
    protected $mergeItems;

    /**
     * @var list<string>
     */
    protected $orderItemIds;

    /**
     * @var string
     */
    protected $requestType;

    /**
     * @var list<string>
     */
    protected $supplierIds;

    /**
     * @var bool
     */
    protected $useItemQuantity;

    /**
     * @var string
     */
    protected $warehouseId;

    public function getMergeItems(): bool
    {
        return $this->mergeItems;
    }

    public function setMergeItems(bool $mergeItems): self
    {
        $this->initialized['mergeItems'] = true;
        $this->mergeItems = $mergeItems;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getOrderItemIds(): array
    {
        return $this->orderItemIds;
    }

    /**
     * @param  list<string>  $orderItemIds
     */
    public function setOrderItemIds(array $orderItemIds): self
    {
        $this->initialized['orderItemIds'] = true;
        $this->orderItemIds = $orderItemIds;

        return $this;
    }

    public function getRequestType(): string
    {
        return $this->requestType;
    }

    public function setRequestType(string $requestType): self
    {
        $this->initialized['requestType'] = true;
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSupplierIds(): array
    {
        return $this->supplierIds;
    }

    /**
     * @param  list<string>  $supplierIds
     */
    public function setSupplierIds(array $supplierIds): self
    {
        $this->initialized['supplierIds'] = true;
        $this->supplierIds = $supplierIds;

        return $this;
    }

    public function getUseItemQuantity(): bool
    {
        return $this->useItemQuantity;
    }

    public function setUseItemQuantity(bool $useItemQuantity): self
    {
        $this->initialized['useItemQuantity'] = true;
        $this->useItemQuantity = $useItemQuantity;

        return $this;
    }

    public function getWarehouseId(): string
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
