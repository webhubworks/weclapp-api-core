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
     * @var string|null
     */
    protected $purchaseOrderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $supplierId;
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseOrderId(): ?string
    {
        return $this->purchaseOrderId;
    }
    /**
     * 
     *
     * @param string|null $purchaseOrderId
     *
     * @return self
     */
    public function setPurchaseOrderId(?string $purchaseOrderId): self
    {
        $this->initialized['purchaseOrderId'] = true;
        $this->purchaseOrderId = $purchaseOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * 
     *
     * @param string|null $supplierId
     *
     * @return self
     */
    public function setSupplierId(?string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;
        return $this;
    }
}