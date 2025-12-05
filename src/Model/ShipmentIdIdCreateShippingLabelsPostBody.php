<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShipmentIdIdCreateShippingLabelsPostBody extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $parcelIds;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getParcelIds(): ?array
    {
        return $this->parcelIds;
    }
    /**
     * 
     *
     * @param list<string>|null $parcelIds
     *
     * @return self
     */
    public function setParcelIds(?array $parcelIds): self
    {
        $this->initialized['parcelIds'] = true;
        $this->parcelIds = $parcelIds;
        return $this;
    }
}