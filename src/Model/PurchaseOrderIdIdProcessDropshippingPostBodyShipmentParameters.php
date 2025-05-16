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
     * @var int|null
     */
    protected $deliveryDate;

    /**
     * @var string|null
     */
    protected $deliveryNoteNumber;

    /**
     * @var int|null
     */
    protected $shippingDate;

    public function getDeliveryDate(): ?int
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(?int $deliveryDate): self
    {
        $this->initialized['deliveryDate'] = true;
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    public function getDeliveryNoteNumber(): ?string
    {
        return $this->deliveryNoteNumber;
    }

    public function setDeliveryNoteNumber(?string $deliveryNoteNumber): self
    {
        $this->initialized['deliveryNoteNumber'] = true;
        $this->deliveryNoteNumber = $deliveryNoteNumber;

        return $this;
    }

    public function getShippingDate(): ?int
    {
        return $this->shippingDate;
    }

    public function setShippingDate(?int $shippingDate): self
    {
        $this->initialized['shippingDate'] = true;
        $this->shippingDate = $shippingDate;

        return $this;
    }
}
