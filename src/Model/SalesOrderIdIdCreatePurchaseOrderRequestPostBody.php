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
     * @var bool|null
     */
    protected $mergeItems;

    /**
     * @var list<string>|null
     */
    protected $orderItemIds;

    /**
     * @var string|null
     */
    protected $requestType;

    /**
     * @var list<string>|null
     */
    protected $supplierIds;

    /**
     * @var bool|null
     */
    protected $useItemQuantity;

    /**
     * @var string|null
     */
    protected $warehouseId;

    public function getMergeItems(): ?bool
    {
        return $this->mergeItems;
    }

    public function setMergeItems(?bool $mergeItems): self
    {
        $this->initialized['mergeItems'] = true;
        $this->mergeItems = $mergeItems;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getOrderItemIds(): ?array
    {
        return $this->orderItemIds;
    }

    /**
     * @param  list<string>|null  $orderItemIds
     */
    public function setOrderItemIds(?array $orderItemIds): self
    {
        $this->initialized['orderItemIds'] = true;
        $this->orderItemIds = $orderItemIds;

        return $this;
    }

    public function getRequestType(): ?string
    {
        return $this->requestType;
    }

    public function setRequestType(?string $requestType): self
    {
        $this->initialized['requestType'] = true;
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getSupplierIds(): ?array
    {
        return $this->supplierIds;
    }

    /**
     * @param  list<string>|null  $supplierIds
     */
    public function setSupplierIds(?array $supplierIds): self
    {
        $this->initialized['supplierIds'] = true;
        $this->supplierIds = $supplierIds;

        return $this;
    }

    public function getUseItemQuantity(): ?bool
    {
        return $this->useItemQuantity;
    }

    public function setUseItemQuantity(?bool $useItemQuantity): self
    {
        $this->initialized['useItemQuantity'] = true;
        $this->useItemQuantity = $useItemQuantity;

        return $this;
    }

    public function getWarehouseId(): ?string
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(?string $warehouseId): self
    {
        $this->initialized['warehouseId'] = true;
        $this->warehouseId = $warehouseId;

        return $this;
    }
}
