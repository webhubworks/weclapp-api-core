<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostBody extends \ArrayObject
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
     * @var int
     */
    protected $offerItemId;
    /**
     * 
     *
     * @var string
     */
    protected $orderedQuantity;
    /**
     * 
     *
     * @return int
     */
    public function getOfferItemId(): int
    {
        return $this->offerItemId;
    }
    /**
     * 
     *
     * @param int $offerItemId
     *
     * @return self
     */
    public function setOfferItemId(int $offerItemId): self
    {
        $this->initialized['offerItemId'] = true;
        $this->offerItemId = $offerItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrderedQuantity(): string
    {
        return $this->orderedQuantity;
    }
    /**
     * 
     *
     * @param string $orderedQuantity
     *
     * @return self
     */
    public function setOrderedQuantity(string $orderedQuantity): self
    {
        $this->initialized['orderedQuantity'] = true;
        $this->orderedQuantity = $orderedQuantity;
        return $this;
    }
}