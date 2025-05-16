<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseStockMovementBookToLoadingEquipmentPlacePostResponse200 extends \ArrayObject
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
     * @var list<WarehouseStockMovement>
     */
    protected $result;

    /**
     * @return list<WarehouseStockMovement>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<WarehouseStockMovement>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
