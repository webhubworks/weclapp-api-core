<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdCreateShipmentPostBody extends \ArrayObject
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
    protected $additionalSalesOrderIds;

    /**
     * @return list<string>|null
     */
    public function getAdditionalSalesOrderIds(): ?array
    {
        return $this->additionalSalesOrderIds;
    }

    /**
     * @param  list<string>|null  $additionalSalesOrderIds
     */
    public function setAdditionalSalesOrderIds(?array $additionalSalesOrderIds): self
    {
        $this->initialized['additionalSalesOrderIds'] = true;
        $this->additionalSalesOrderIds = $additionalSalesOrderIds;

        return $this;
    }
}
