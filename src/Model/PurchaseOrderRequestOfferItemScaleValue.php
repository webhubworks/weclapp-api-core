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
     * 
     *
     * @var string|null
     */
    protected $price;
    /**
     * 
     *
     * @var string|null
     */
    protected $scale;
    /**
     * 
     *
     * @return string|null
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param string|null $price
     *
     * @return self
     */
    public function setPrice(?string $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScale(): ?string
    {
        return $this->scale;
    }
    /**
     * 
     *
     * @param string|null $scale
     *
     * @return self
     */
    public function setScale(?string $scale): self
    {
        $this->initialized['scale'] = true;
        $this->scale = $scale;
        return $this;
    }
}