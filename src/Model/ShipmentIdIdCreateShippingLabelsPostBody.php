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
}
