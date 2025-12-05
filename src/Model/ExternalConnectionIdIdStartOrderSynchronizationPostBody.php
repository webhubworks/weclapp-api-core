<?php

namespace Webhubworks\WeclappApiCore\Model;

class ExternalConnectionIdIdStartOrderSynchronizationPostBody extends \ArrayObject
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
    protected $itScopeOrderType;
    /**
     * 
     *
     * @var int|null
     */
    protected $syncSalesOrdersSince;
    /**
     * 
     *
     * @return string|null
     */
    public function getItScopeOrderType(): ?string
    {
        return $this->itScopeOrderType;
    }
    /**
     * 
     *
     * @param string|null $itScopeOrderType
     *
     * @return self
     */
    public function setItScopeOrderType(?string $itScopeOrderType): self
    {
        $this->initialized['itScopeOrderType'] = true;
        $this->itScopeOrderType = $itScopeOrderType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSyncSalesOrdersSince(): ?int
    {
        return $this->syncSalesOrdersSince;
    }
    /**
     * 
     *
     * @param int|null $syncSalesOrdersSince
     *
     * @return self
     */
    public function setSyncSalesOrdersSince(?int $syncSalesOrdersSince): self
    {
        $this->initialized['syncSalesOrdersSince'] = true;
        $this->syncSalesOrdersSince = $syncSalesOrdersSince;
        return $this;
    }
}