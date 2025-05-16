<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderRequestIdIdPushPurchasePricesPostBody extends \ArrayObject
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
     * @var list<string>
     */
    protected $supplierIds;

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
}
