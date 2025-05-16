<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters extends \ArrayObject
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
     * @var int|null
     */
    protected $deliveryDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $deliveryNoteNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $shippingDate;
    /**
     * 
     *
     * @return int|null
     */
    public function getDeliveryDate(): ?int
    {
        return $this->deliveryDate;
    }
    /**
     * 
     *
     * @param int|null $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(?int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDeliveryNoteNumber(): ?string
    {
        return $this->deliveryNoteNumber;
    }
    /**
     * 
     *
     * @param string|null $deliveryNoteNumber
     *
     * @return self
     */
    public function setDeliveryNoteNumber(?string $deliveryNoteNumber): self
    {
        $this->initialized['deliveryNoteNumber'] = true;
        $this->deliveryNoteNumber = $deliveryNoteNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getShippingDate(): ?int
    {
        return $this->shippingDate;
    }
    /**
     * 
     *
     * @param int|null $shippingDate
     *
     * @return self
     */
    public function setShippingDate(?int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;
        return $this;
    }
}