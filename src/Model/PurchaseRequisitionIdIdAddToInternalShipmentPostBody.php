<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseRequisitionIdIdAddToInternalShipmentPostBody extends \ArrayObject
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
    protected $internalShipmentId;
    /**
     * 
     *
     * @return string|null
     */
    public function getInternalShipmentId(): ?string
    {
        return $this->internalShipmentId;
    }
    /**
     * 
     *
     * @param string|null $internalShipmentId
     *
     * @return self
     */
    public function setInternalShipmentId(?string $internalShipmentId): self
    {
        $this->initialized['internalShipmentId'] = true;
        $this->internalShipmentId = $internalShipmentId;
        return $this;
    }
}