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
     * @var int
     */
    protected $deliveryDate;
    /**
     * 
     *
     * @var string
     */
    protected $deliveryNoteNumber;
    /**
     * 
     *
     * @var int
     */
    protected $shippingDate;
    /**
     * 
     *
     * @return int
     */
    public function getDeliveryDate(): int
    {
        return $this->deliveryDate;
    }
    /**
     * 
     *
     * @param int $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeliveryNoteNumber(): string
    {
        return $this->deliveryNoteNumber;
    }
    /**
     * 
     *
     * @param string $deliveryNoteNumber
     *
     * @return self
     */
    public function setDeliveryNoteNumber(string $deliveryNoteNumber): self
    {
        $this->initialized['deliveryNoteNumber'] = true;
        $this->deliveryNoteNumber = $deliveryNoteNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getShippingDate(): int
    {
        return $this->shippingDate;
    }
    /**
     * 
     *
     * @param int $shippingDate
     *
     * @return self
     */
    public function setShippingDate(int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;
        return $this;
    }
}