<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseRequisitionStartMaterialPlanningRunPostBody extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $warehouseIds;

    /**
     * @return list<string>|null
     */
    public function getWarehouseIds(): ?array
    {
        return $this->warehouseIds;
    }

    /**
     * @param  list<string>|null  $warehouseIds
     */
    public function setWarehouseIds(?array $warehouseIds): self
    {
        $this->initialized['warehouseIds'] = true;
        $this->warehouseIds = $warehouseIds;

        return $this;
    }
}
