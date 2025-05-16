<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoodsIdIdCreateSupplierReturnPostBody extends \ArrayObject
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
     * @var string
     */
    protected $purchaseOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $supplierId;
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseOrderId(): string
    {
        return $this->purchaseOrderId;
    }
    /**
     * 
     *
     * @param string $purchaseOrderId
     *
     * @return self
     */
    public function setPurchaseOrderId(string $purchaseOrderId): self
    {
        $this->initialized['purchaseOrderId'] = true;
        $this->purchaseOrderId = $purchaseOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSupplierId(): string
    {
        return $this->supplierId;
    }
    /**
     * 
     *
     * @param string $supplierId
     *
     * @return self
     */
    public function setSupplierId(string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;
        return $this;
    }
}