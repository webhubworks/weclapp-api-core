<?php

namespace Webhubworks\WeclappApiCore\Model;

class TimeRecordGetResponse200AdditionalProperties extends \ArrayObject
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
     * @var list<Amount>|null
     */
    protected $costOfServices;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $netValue;
    /**
     * 
     *
     * @return list<Amount>|null
     */
    public function getCostOfServices(): ?array
    {
        return $this->costOfServices;
    }
    /**
     * 
     *
     * @param list<Amount>|null $costOfServices
     *
     * @return self
     */
    public function setCostOfServices(?array $costOfServices): self
    {
        $this->initialized['costOfServices'] = true;
        $this->costOfServices = $costOfServices;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getNetValue(): ?array
    {
        return $this->netValue;
    }
    /**
     * 
     *
     * @param list<string>|null $netValue
     *
     * @return self
     */
    public function setNetValue(?array $netValue): self
    {
        $this->initialized['netValue'] = true;
        $this->netValue = $netValue;
        return $this;
    }
}