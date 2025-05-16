<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderIdIdCreateIncomingGoodsPostBody extends \ArrayObject
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
    protected $additionalPurchaseOrderIds;

    /**
     * @return list<string>
     */
    public function getAdditionalPurchaseOrderIds(): array
    {
        return $this->additionalPurchaseOrderIds;
    }

    /**
     * @param  list<string>  $additionalPurchaseOrderIds
     */
    public function setAdditionalPurchaseOrderIds(array $additionalPurchaseOrderIds): self
    {
        $this->initialized['additionalPurchaseOrderIds'] = true;
        $this->additionalPurchaseOrderIds = $additionalPurchaseOrderIds;

        return $this;
    }
}
