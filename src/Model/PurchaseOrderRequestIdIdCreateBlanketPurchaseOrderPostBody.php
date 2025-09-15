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
     * @var string|null
     */
    protected $offerItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderedQuantity;
    /**
     * 
     *
     * @return string|null
     */
    public function getOfferItemId(): ?string
    {
        return $this->offerItemId;
    }
    /**
     * 
     *
     * @param string|null $offerItemId
     *
     * @return self
     */
    public function setOfferItemId(?string $offerItemId): self
    {
        $this->initialized['offerItemId'] = true;
        $this->offerItemId = $offerItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderedQuantity(): ?string
    {
        return $this->orderedQuantity;
    }
    /**
     * 
     *
     * @param string|null $orderedQuantity
     *
     * @return self
     */
    public function setOrderedQuantity(?string $orderedQuantity): self
    {
        $this->initialized['orderedQuantity'] = true;
        $this->orderedQuantity = $orderedQuantity;
        return $this;
    }
}