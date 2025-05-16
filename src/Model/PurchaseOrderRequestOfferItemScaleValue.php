<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderRequestOfferItemScaleValue extends \ArrayObject
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
    protected $price;

    /**
     * @var string
     */
    protected $scale;

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    public function getScale(): string
    {
        return $this->scale;
    }

    public function setScale(string $scale): self
    {
        $this->initialized['scale'] = true;
        $this->scale = $scale;

        return $this;
    }
}
