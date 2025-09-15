<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionOrderGetResponse200AdditionalProperties extends \ArrayObject
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
    protected $availability;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $availabilityForAllWarehouses;
    /**
     * 
     *
     * @var list<list<ItemAvailability>>|null
     */
    protected $itemsAvailability;
    /**
     * 
     *
     * @var list<list<ItemAvailability>>|null
     */
    protected $itemsAvailabilityForAllWarehouses;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getAvailability(): ?array
    {
        return $this->availability;
    }
    /**
     * 
     *
     * @param list<string>|null $availability
     *
     * @return self
     */
    public function setAvailability(?array $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getAvailabilityForAllWarehouses(): ?array
    {
        return $this->availabilityForAllWarehouses;
    }
    /**
     * 
     *
     * @param list<string>|null $availabilityForAllWarehouses
     *
     * @return self
     */
    public function setAvailabilityForAllWarehouses(?array $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;
        return $this;
    }
    /**
     * 
     *
     * @return list<list<ItemAvailability>>|null
     */
    public function getItemsAvailability(): ?array
    {
        return $this->itemsAvailability;
    }
    /**
     * 
     *
     * @param list<list<ItemAvailability>>|null $itemsAvailability
     *
     * @return self
     */
    public function setItemsAvailability(?array $itemsAvailability): self
    {
        $this->initialized['itemsAvailability'] = true;
        $this->itemsAvailability = $itemsAvailability;
        return $this;
    }
    /**
     * 
     *
     * @return list<list<ItemAvailability>>|null
     */
    public function getItemsAvailabilityForAllWarehouses(): ?array
    {
        return $this->itemsAvailabilityForAllWarehouses;
    }
    /**
     * 
     *
     * @param list<list<ItemAvailability>>|null $itemsAvailabilityForAllWarehouses
     *
     * @return self
     */
    public function setItemsAvailabilityForAllWarehouses(?array $itemsAvailabilityForAllWarehouses): self
    {
        $this->initialized['itemsAvailabilityForAllWarehouses'] = true;
        $this->itemsAvailabilityForAllWarehouses = $itemsAvailabilityForAllWarehouses;
        return $this;
    }
}