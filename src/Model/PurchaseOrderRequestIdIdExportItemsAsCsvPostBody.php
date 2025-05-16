<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderRequestIdIdExportItemsAsCsvPostBody extends \ArrayObject
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
     * @var string
     */
    protected $supplierId;

    public function getSupplierId(): string
    {
        return $this->supplierId;
    }

    public function setSupplierId(string $supplierId): self
    {
        $this->initialized['supplierId'] = true;
        $this->supplierId = $supplierId;

        return $this;
    }
}
